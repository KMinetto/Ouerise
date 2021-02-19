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
        $names = 'Nom-inconnue';
        $description = 'Description-inconnue';
        $img = 'Image-inconnue.jpg';

//        foreach ($locations as $location) {
//            $names[] = $callApiServices->getApiLocation($location->getName());
//        }

//        foreach ($locations as $location) {
//            $datas[] = $callApiServices->getApiLocation($location->getName());
//            $datas[] = $callApiServices->getApiLocation($location->getLatitude());
//            $datas[] = $callApiServices->getApiLocation($location->getLongitude());
//        }

        return $this->render('index/index.html.twig', [
            'name' => $names,
            'desc' => $description,
            'img' => $img,
            'locations' => $locations,
        ]);
    }
}