<?php
namespace AppBundle\RiotApi;

use AppBundle\Entity\Matches;
use AppBundle\Entity\Regions;
use Doctrine\Common\Collections\Criteria;
use GuzzleHttp\Exception\ClientException;
use LoLApi\ApiClient;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\Summoners;
use Symfony\Component\Config\Definition\Exception\Exception;

class MatchesApi extends Controller
{
    protected $key;

    public function __construct($container)
    {
        $this->container = $container;
        $this->key = parse_ini_file('../app/config/keys.ini');
    }

    public function getMatchList($summonerId = 963145, $region = Regions::SERVER_RU)
    {
        $api = new \LoLApi\ApiClient($region, $this->key['api.key']);
        try {
            $matchList = $api->getMatchListApi()->getMatchListBySummonerId($summonerId)->getResult();
        } catch (\Exception  $e) {
            die('retry');
        }
        $matches = array_map(
            function ($match) {
                return $match['matchId'];
            },
            $matchList['matches']
        );

        return $matches;
    }

    public function prepareMatches(array $matchesId = [])
    {
        $expression = Criteria::expr();
        $criteria = Criteria::create();
        $criteria->where($expression->in('match_id', $matchesId));
        $matches = $this->getDoctrine()
            ->getRepository('AppBundle:Matches')
            ->matching($criteria)
            ->toArray();
        $matches ? $checkedMatches = array_map(
            function ($match) {
                return $match->getMatchId();
            },
            $matches
        ) : $checkedMatches = [];
        $uncheckedMatches = array_diff($matchesId, $checkedMatches);
        if ($uncheckedMatches) {
            $this->checkMatches($uncheckedMatches);
        }
        var_dump('done');
    }

    public function checkMatches($uncheckedMatches)
    {
        $api = new \LoLApi\ApiClient(Regions::SERVER_RU, $this->key['api.key']);
        $matchApi = $api->getMatchApi();
        $matchModel = new Matches();
        $manager = $this->getDoctrine()->getManager();
        foreach ($uncheckedMatches as $match) {
            try {
                usleep(1200000);
                $matchInfo = $matchApi->getMatchByMatchId($match)->getResult();
            } catch (\Exception $e) {
                sleep(10);
                $matchInfo = null;
            }
            if ($matchInfo) {
                $matchModel->setMatchId($matchInfo['matchId']);
                $matchModel->setRegion($matchInfo['region']);
                $matchModel->setMatchMode($matchInfo['matchMode']);
                $matchModel->setMatchType($matchInfo['matchType']);
                $matchModel->setMatchDuration($matchInfo['matchDuration']);
                $matchModel->setQueueType($matchInfo['queueType']);
                $matchModel->setMapId($matchInfo['mapId']);
                $matchModel->setSeason($matchInfo['season']);
                $matchModel->setMatchVersion($matchInfo['matchVersion']);
                $matchInfo['teams'][0]['winner'] ? $winner = 100 : $winner = 200;
                $matchModel->setTeamWin($winner);
                for ($i = 1; $i <= 10; $i++) {
                    $playerChamp = 'setPlayer' . $i . 'Champ';
                    $playerSId = 'setPlayer' . $i . 'Sid';
                    $playerTeam = 'setPlayer' . $i . 'TeamId';
                    $participantsId = $i - 1;
                    $matchModel->$playerChamp($matchInfo['participants'][$participantsId]['championId']);
                    $matchModel->$playerSId($matchInfo['participantIdentities'][$participantsId]['participantId']);
                    $matchModel->$playerTeam($matchInfo['participants'][$participantsId]['teamId']);
                }
                flush($matchModel);
                if ($matchModel) {
                    $manager->persist($matchModel);
                    $manager->flush();
                }
            }
        }
    }

    /**
     * Get a service from the container
     *
     * @param string
     * @return string
     * The service to get
     */
    protected function get($service)
    {
        return $this->container->get($service);
    }
}
