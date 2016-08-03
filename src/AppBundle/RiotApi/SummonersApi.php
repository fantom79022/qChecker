<?php
namespace AppBundle\RiotApi;

use AppBundle\Entity\Regions;
use GuzzleHttp\Exception\ClientException;
use LoLApi\ApiClient;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\Summoners;
use Symfony\Component\Config\Definition\Exception\Exception;

class SummonersApi extends Controller
{
    protected $key;

    const ru = 01;
    /**
     * @param  $container
     */
    public function __construct($container)
    {
        $this->container = $container;
        $this->key = parse_ini_file('../app/config/keys.ini');
    }

    public function getSummonersByName(array $names, $server) {
        $summonersRep = $this->getDoctrine()->getRepository('AppBundle:Summoners');
        $regionRep = $this->getDoctrine()->getRepository('AppBundle:Regions');
        $result = [];

        /**
         * @var $region Regions
         */
        $region = $regionRep->findOneBy(['region' => $server]);
        $summoners = [];
        $unfoundSummoners = [];
        foreach ($names as $name) {
            $summoner = $summonersRep->findOneBy(['name' => $name, 'region' => $region->getId()]);
            if (!$summoner) {
                $unfoundSummoners[] = $name;
            } else {
                $summoners[$name] = $summoner;
            }
        }
        if ($unfoundSummoners) {
            $api = new \LoLApi\ApiClient($region->getRegion(), $this->key['api.key']);
            $newSummoners = null;
            try {
                $newSummoners = $api->getSummonerApi()->getSummonersBySummonerNames($unfoundSummoners);
            } catch (ClientException $e) {
                foreach ($unfoundSummoners as $unfoundSummoner) {
                    $result[$unfoundSummoner] = null;
                }
            }
            if (is_object($newSummoners)) {
                $newSummoners = $newSummoners->getResult();
                /**
                 * @var $summoner Summoners
                 */
                foreach ($newSummoners as $summoner) {
                    $summoners[$summoner['name']] = $this->addNewSummoner(
                        $summoner['name'],
                        $summoner['profileIconId'],
                        $region->getId(),
                        $summoner['revisionDate'],
                        $summoner['summonerLevel'],
                        $summoner['id']
                    );
                }
            }
        }
        /**
         * @var $summoner Summoners
         */
        foreach ($summoners as $name => $summoner) {
            if (is_object($summoner)) {
                $result[$summoner->getName()] = get_object_vars($summoner);
            }
        }
        return $result;
    }

    public function addNewSummoner($name, $profileIconId, $region, $revDate, $level, $id) {
        try {
            $summoner = new Summoners();
            $summoner->setSummonerId($id)
                ->setName($name)
                ->setProfileIconId($profileIconId)
                ->setRegion($region)
                ->setRevisionDate($revDate)
                ->setSummonerLevel($level);
            $em = $this->getDoctrine()->getManager();
            $em->persist($summoner);
            $em->flush();
        } catch (Exception $e) {
            return false;
        }
        return $summoner;

    }

    public function matchesApi($summonerId) {
        $api = new \LoLApi\ApiClient(\LoLApi\ApiClient::REGION_RU, '');

    }


    /**
     * Get a service from the container
     *
     * @param string The service to get
     */
    protected function get($service)
    {
        return $this->container->get($service);
    }
}
