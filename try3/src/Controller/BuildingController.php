<?php
// src/Controller/BuildingsController.php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
// ...
use App\Entity\Building;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
class BuildingController extends Controller
{

    /**
     * @Route("/building_list/new", name="building_new")
     *
     */
    public function BuildStart()
    {
        // you can fetch the EntityManager via $this->getDoctrine()
        // or you can add an argument to your action: index(EntityManagerInterface $entityManager)
        $entityManager = $this->getDoctrine()->getManager();
        $buildings = new Building();
        $buildings->setControlHQ(1);
        $buildings->setDrillingRig(0);
        $buildings->setWarehouse(0);
        $buildings->setHuntersLodge(0);
        $buildings->setBarracks(0);
        $buildings->setLaboratory(0);
        $buildings->setTaskId(999999);


        // tell Doctrine you want to (eventually) save the Product (no queries yet)
        $entityManager->persist($buildings);
        // actually executes the queries (i.e. the INSERT query)
        $entityManager->flush();
        return new Response('Saved new City with id ' . $buildings->getId());
    }
    /**
     * @Route("/building_list/{id}", name="building_list")
     *
     */
    public function index($id)
    {
        $buildings=$this->getDoctrine()->getRepository(Building::class)->find($id);
        return $this->render('building/index.html.twig',array('buildings'=>$buildings));
    }

    /**
     * @Route("/building/{id}", name="buildings_show")
     */
    public function show($id)
    {
        $building = $this->getDoctrine()
            ->getRepository(Building::class)
            ->find($id);
        if (!$building) {
            throw $this->createNotFoundException(
                'No product found for id ' . $id
            );
        }
        return new Response('ControlHQ ' . $building->getControlHq()
            .'<br>DrillingRig ' . $building->getDrillingRig()
            .'<br>Warehouse ' . $building->getWarehouse()
            .'<br>HuntersLodge ' . $building->getHuntersLodge()
            .'<br>Barracks ' . $building->getBarracks()
            .'<br>Laboratory ' . $building->getLaboratory()
        );
    }
    
    /**
     * @Route("/building/Upgrade/{building}/{id}", name="upgrade_building")
     * @Method({"GET", "POST"})
     */
    public function UpgradeBuilding($building,$id){
            $entityManager = $this->getDoctrine()->getManager();
            $buildings = $entityManager->getRepository(Building::class)->find($id);
            if (!$buildings) {
                throw $this->createNotFoundException(
                    'No product found for id '.$id
                );
            }
            switch ($building) {
                    case 100:
                        $type='ControlHQ';
                        break;
                    case 101:
                        $type='DrillingRig';
                        break;
                    case 102:
                        $type='Warehouse';
                        break;
                    case 103:
                        $type='HuntersLodge';
                        break;
                    case 104:
                        $type='Barracks';
                        break;
                    case 105:
                        $type='Laboratory';
                        break;
            }
            
            $level=$buildings->'get'.$type();
            $level=$level+1;
            $buildings->'set'.$type($level);
            $entityManager->flush();
            return $this->redirectToRoute('building_list', [
                'id' => $buildings->getId()
            ]);
    }     
}
