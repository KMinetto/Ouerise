<?php

namespace App\Controller;

use App\Service\CallApi;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LieuController extends AbstractController
{

    /**
     * @Route("/lieu/{id}", name="lieu", requirements={"id"="\d+"})
     * @return Response
     */
    public function index($id): Response
    {
        return $this->render('lieu/index.html.twig');
    }

    private function getDataSource($id) {

        return $this->getDoctrine()
            ->getRepository('App:Location')
            ->find($id);
    }

    /**
     * @Route ("/lieu/{id}_json", name="lieu_json")
     * @param $id
     */
    public function getLocation($id) : JsonResponse {

        $response = new JsonResponse();

        $data = [];

        $name = $this->getOneLocation($id);
        $latitude = $this->getOneLocationLatitude($id);
        $longitude = $this->getOneLocationLongitude($id);
        $img = $this->getOneLocationImg($id);

        $data[] = array(
            'name' => $name,
            'latitude' => $latitude,
            'longitude' => $longitude,
            'img' => $img
        );

        $response->setData([
            'data' => $data
        ]);

        return $response;

    }

    private function getOneLocation($id): ?string
    {
        $location = $this->getDataSource($id);

        if (!$location) {
            throw $this->createNotFoundException('Aucun lieu n\'a été trouvé :cry:');
        }

        return $location->getName();
    }

    private function getOneLocationLatitude($id): ?string
    {
        $location = $this->getDataSource($id);

        if (!$location) {
            throw $this->createNotFoundException('Aucun lieu n\'a été trouvé :cry:');
        }

        return $location->getLatitude();
    }

    private function getOneLocationLongitude($id): ?string
    {
        $location = $this->getDataSource($id);

        if (!$location) {
            throw $this->createNotFoundException('Aucun lieu n\'a été trouvé :cry:');
        }

        return $location->getLongitude();
    }

    private function getOneLocationImg($id): ?string
    {
        $location = $this->getDataSource($id);

        if (!$location) {
            throw $this->createNotFoundException('Aucun lieu n\'a été trouvé :cry:');
        }

        return $location->getImg();
    }


}
