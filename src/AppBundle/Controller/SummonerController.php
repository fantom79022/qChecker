<?php

namespace AppBundle\Controller;

use AppBundle\AppBundle;
use AppBundle\Entity\Summoners;
use AppBundle\RiotApi\SummonersApi;
use LoLApi\ApiClient;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\GeneratorBundle\Model\Bundle;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class SummonerController extends Controller
{
    /**
     * @Route("/summonerInfo", name="summoner")
     */
    public function indexAction(Request $request)
    {
        $request = Request::createFromGlobals();
        $name = $request->get('name');
        $api = new SummonersApi($this->container);
        $summoners = $api->getSummonersByName(
            [$name],
            \LoLApi\ApiClient::REGION_RU
            );

        return $this->render('summoners/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
            'title' => 'Summoners',
            'summoners' => $summoners,
        ]);
    }

}
