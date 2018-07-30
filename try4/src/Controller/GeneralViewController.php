<?php

namespace App\Controller;


use App\Entity\BuildingManager;
use App\Entity\CityManager;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\Entity\UserManager;
use App\Entity\Buildings;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
class GeneralViewController extends Controller
{
    /**
     * @Route("/user/new", name="user_new")
     *
     */
    public function BuildStart()
    {

        $entityManager = $this->getDoctrine()->getManager();
        $userprof = new UserManager();
        $userprof->setUsername('User');
        // tell Doctrine you want to (eventually) save the Product (no queries yet)

        $cities = new CityManager();
        $cities->setCityName('City');

        $buildings= new BuildingManager();
        $buildings->setControlHQ(1);
        $buildings->setDrillingRig(0);
        $buildings->setWarehouse(0);
        $buildings->setHuntersLodge(0);
        $buildings->setBarracks(0);
        $buildings->setLaboratory(0);


        // relates this product to the category
        $cities->setUserId($userprof);

        // relates this product to the category
        $buildings->setCityid($cities);

        $entityManager->persist($buildings);
        $entityManager->persist($userprof);
        // actually executes the queries (i.e. the INSERT query)

        $entityManager = $this->getDoctrine()->getManager();

        $usid=$userprof->getId();
        $userprof->setUsername("User{$usid}");
        $entityManager->persist($userprof);


        $citid=$cities->getId();
        $cities->setCityName('City'. $userprof->getId() . 'lll'. $cities->getId());
        // tell Doctrine you want to (eventually) save the Product (no queries yet)
        $entityManager->persist($cities);
        // actually executes the queries (i.e. the INSERT query)
        $entityManager->flush();
        return new Response('Saved new City with id ' . $userprof->getId() . ', name:' . $userprof->getUsername());
    }
    /**
     * @Route("/building_list/{id}", name="building_list")
     *
     */
    public function index($id)
    {
        $entityManager=$this->getDoctrine()->getManager();
        $userprof=$entityManager->getRepository(UserManager::class)->find($id);
        $cities=$entityManager->getRepository(CityManager::class)->findOneBy(['UserId' => $id]);
        $buildings=$entityManager->getRepository(BuildingManager::class)->findOneBy(['Cityid' => $id]);
        return $this->render('general_view/index.html.twig',['userpr'=>$userprof,'cities' => $cities,'building'=>$buildings]);
    }


}