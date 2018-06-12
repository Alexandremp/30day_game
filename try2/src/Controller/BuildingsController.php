<?php
// src/Controller/BuildingsController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
// ...
use App\Entity\Buildings;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;



class BuildingsController extends Controller
{
    /**
     * @Route("/building_list/{id}", name="building_list")
     *
     */
    public function index($id)
    {

        $buildings=$this->getDoctrine()->getRepository(Buildings::class)->find($id);
        return $this->render('buildings/index.html.twig',array('buildings'=>$buildings));
    }
    
     /**
     * @Route("/building_list/new", name="building_new")
     *
     */

    public function BuildStart()
    {
        // you can fetch the EntityManager via $this->getDoctrine()
        // or you can add an argument to your action: index(EntityManagerInterface $entityManager)

        $entityManager = $this->getDoctrine()->getManager();

        $buildings = new Buildings();
        $buildings->setControlHQ(1);
        $buildings->setDrillingRig(0);
        $buildings->setWarehouse(0);
        $buildings->setHuntersLodge(0);
        $buildings->setBarracks(0);
        $buildings->setLaboratory(0);
        $buildings->setTask($buildings->getId());
        // tell Doctrine you want to (eventually) save the Product (no queries yet)
        $entityManager->persist($buildings);

        // actually executes the queries (i.e. the INSERT query)
        $entityManager->flush();

        return new Response('Saved new City with id ' . $buildings->getId());
    }

    /**
     * @Route("/building/{id}", name="buildings_show")
     */

    public function show($id)
    {
        $building = $this->getDoctrine()
            ->getRepository(Buildings::class)
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
     * @Route("/building/UpgradeControlHQ/{id}", name="UpgradeControlHQ")
     * @Method({"GET", "POST"})
     */

    public function upgradeControlHQ($id){

        $entityManager = $this->getDoctrine()->getManager();
        $buildings = $entityManager->getRepository(Buildings::class)->find($id);

        if (!$buildings) {
            throw $this->createNotFoundException(
                'No product found for id '.$id
            );
        }

        $level=$buildings->getControlHQ();
        $level=$level+1;

        $buildings->setControlHQ($level);
        $entityManager->flush();
        return $this->redirectToRoute('building_list', [
            'id' => $buildings->getId()
        ]);


    }

    /**
     * @Route("/building/UpgradeDrillingRig/{id}", name="UpgradeDrillingRig")
     * @Method({"GET", "POST"})
     */

    public function upgradeDrillingRig($id){

        $entityManager = $this->getDoctrine()->getManager();
        $buildings = $entityManager->getRepository(Buildings::class)->find($id);

        if (!$buildings) {
            throw $this->createNotFoundException(
                'No product found for id '.$id
            );
        }

        $level=$buildings->getDrillingRig();
        $level=$level+1;

        $buildings->setDrillingRig($level);
        $entityManager->flush();
        return $this->redirectToRoute('building_list', [
            'id' => $buildings->getId()
        ]);


    }


    /**
     * @Route("/building/UpgradeWarehouse/{id}", name="UpgradeWarehouse")
     * @Method({"GET", "POST"})
     */

    public function upgradeWarehouse($id){

        $entityManager = $this->getDoctrine()->getManager();
        $buildings = $entityManager->getRepository(Buildings::class)->find($id);

        if (!$buildings) {
            throw $this->createNotFoundException(
                'No product found for id '.$id
            );
        }

        $level=$buildings->getWarehouse();
        $level=$level+1;

        $buildings->setWarehouse($level);
        $entityManager->flush();
        return $this->redirectToRoute('building_list', [
            'id' => $buildings->getId()
        ]);


    }


    /**
     * @Route("/building/UpgradeHuntersLodge/{id}", name="UpgradeHuntersLodge")
     * @Method({"GET", "POST"})
     */

    public function upgradeHuntersLodge($id){

        $entityManager = $this->getDoctrine()->getManager();
        $buildings = $entityManager->getRepository(Buildings::class)->find($id);

        if (!$buildings) {
            throw $this->createNotFoundException(
                'No product found for id '.$id
            );
        }

        $level=$buildings->getHuntersLodge();
        $level=$level+1;

        $buildings->setHuntersLodge($level);
        $entityManager->flush();
        return $this->redirectToRoute('building_list', [
            'id' => $buildings->getId()
        ]);


    }

    /**
     * @Route("/building/UpgradeBarracks/{id}", name="UpgradeBarracks")
     * @Method({"GET", "POST"})
     */

    public function upgradeBarracks($id){

        $entityManager = $this->getDoctrine()->getManager();
        $buildings = $entityManager->getRepository(Buildings::class)->find($id);

        if (!$buildings) {
            throw $this->createNotFoundException(
                'No product found for id '.$id
            );
        }

        $level=$buildings->getBarracks();
        $level=$level+1;

        $buildings->setBarracks($level);
        $entityManager->flush();
        return $this->redirectToRoute('building_list', [
            'id' => $buildings->getId()
        ]);


    }

    /**
     * @Route("/building/UpgradeLaboratory/{id}", name="UpgradeLaboratory")
     * @Method({"GET", "POST"})
     */

    public function upgradeLaboratory($id){

        $entityManager = $this->getDoctrine()->getManager();
        $buildings = $entityManager->getRepository(Buildings::class)->find($id);

        if (!$buildings) {
            throw $this->createNotFoundException(
                'No product found for id '.$id
            );
        }

        $level=$buildings->getLaboratory();
        $level=$level+1;

        $buildings->setLaboratory($level);
        $entityManager->flush();
        return $this->redirectToRoute('building_list', [
            'id' => $buildings->getId()
        ]);


    }

}
