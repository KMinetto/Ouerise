<?php

namespace App\Controller;

use App\Service\CallApi;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LieuController extends AbstractController
{
    /**
     * @Route("/lieu/{lieu}", name="lieu")
     * @param string $lieu
     * @param CallApi $callApiServices
     * @return Response
     */
    public function index(string $lieu, CallApi $callApiServices): Response
    {
        return $this->render('lieu/index.html.twig', [
            'data' => $callApiServices->getApiLieu($lieu),
        ]);
    }
}
