<?php

namespace App\Controller;

use App\Service\CallApi;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    /**
     * @Route("/", name="index")
     * @param CallApi $callApiServices
     * @return Response
     */
    public function index(CallApi $callApiServices): Response
    {
        $locations = $this->getDoctrine()->getRepository('App:Location')
            ->findAll();
        $datas = [];

        foreach ($locations as $location) {
            $datas[] = $callApiServices->getApiLocation($location->getName());
            $datas[] = $callApiServices->getApiLocation($location->getLatitude());
            $datas[] = $callApiServices->getApiLocation($location->getLongitude());
        }

        return $this->render('index/index.html.twig', [
            'datas' => $datas,
            'locations' => $locations,
        ]);
    }
}