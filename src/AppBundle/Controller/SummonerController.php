<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Summoners;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class SummonerController extends Controller
{
    /**
     * @Route("/1", name="summoner")
     */
    public function indexAction(Request $request)
    {
        $request = Request::createFromGlobals();
        $name = $request->get('name');
        var_dump($name);
        $config = parse_ini_file('../app/config/keys.ini');
        $api = new \LoLApi\ApiClient(\LoLApi\ApiClient::REGION_RU, $config['api.key']);
        $summoners = $api->getSummonerApi()
            ->getSummonersBySummonerNames(
                ['fantonyasha',
                'gordonyasha',
                'reyli16',
                'KPI Gloube',
                'jumрer']
            )
            ->getResult();
        return $this->render('summoners/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
            'title' => 'Summoners',
            'summoners' => $summoners,
        ]);
    }
    public function getSummonersByName($names, $server) {
        $name = 'fantonyasha';
        foreach ($names as $name) {
            
        }
        $summonersEntity = $this->getDoctrine()->getRepository('AppBundle:Summoners');
        $summonersEntity->findOneBy(array('name' => $name));
    }
}
