<?php

namespace App\Controller;

use App\Entity\Location;
use App\Service\CallApi;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LieuController extends AbstractController
{

    /**
     * @Route("/lieu/{id}", name="lieu", requirements={"id"="\d+"})
     * @param CallApi $callApiServices
     * @param int $id
     * @return Response
     */
    public function index(CallApi $callApiServices, int $id): Response
    {
        $location = $this->getOneLocation($id);

        return $this->render('lieu/index.html.twig', [
            'data' => $callApiServices->getApiLieu($location)
        ]);
    }

    public function getOneLocation($id): ?string
    {
        $location = $this->getDoctrine()
            ->getRepository('App:Location')
            ->find($id);

        if (!$location) {
            throw $this->createNotFoundException('Aucun lieu n\'a été trouvé :cry:');
        }

        return $location->getName();
    }
}
