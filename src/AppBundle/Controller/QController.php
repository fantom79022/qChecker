<?php

namespace AppBundle\Controller;

use AppBundle\AppBundle;
use AppBundle\Checker\Checker;
use AppBundle\Checker\CheckerAction;
use AppBundle\Entity\Matches;
use AppBundle\Entity\Summoners;
use AppBundle\RiotApi\MatchesApi;
use AppBundle\RiotApi\SummonersApi;
use LoLApi\ApiClient;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\GeneratorBundle\Model\Bundle;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class QController extends Controller
{
    /**
     * @Route("/q", name="Q Checker")
     */
    public function indexAction(Request $request)
    {
        $matches = new MatchesApi($this->container);
        $matches->prepareMatches($matches->getMatchList());
       
        return $this->render('q/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
            'title' => 'Your favorite Q',
        ]);
    }
}
