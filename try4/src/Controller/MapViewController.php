<?php

namespace App\Controller;

use App\Entity\BuildingManager;
use App\Entity\CityManager;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\Entity\Galaxy;
use App\Entity\SolarSystem;
use App\Entity\Planets;
use App\Entity\LandMass;
use App\Entity\Dungeons;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class MapViewController extends Controller
{



    /**
     * @Route("/map/view", name="map_view")
     */
    public function index()
    {
        return $this->render('map_view/index.html.twig', [
            'controller_name' => 'MapViewController',
        ]);
    }
}
