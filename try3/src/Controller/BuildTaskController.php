<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
// ...
use App\Entity\Building;
use App\Entity\BuildingTodo;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class BuildTaskController extends Controller
{
    /**
     * @Route("/build/task", name="build_task")
     */
    public function index()
    {
        return $this->render('build_task/index.html.twig', [
            'controller_name' => 'BuildTaskController',
        ]);
    }
    
     /**
     * @Route("/building_task_creation/{id}", name="builtask_new")
     *
     */
    public function TaskBuildCreation($id)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $buildings = $entityManager->getRepository(Building::class)->find($id);
        if (!$buildings) {
            throw $this->createNotFoundException('No product found for id '.$id);
        }
        $buildings->setTaskId($id);
        $entityManager->flush();
        
        $entityManager = $this->getDoctrine()->getManager();
        $buildtask = $entityManager->getRepository(BuildingTodo::class)->find($id);
        $buildtask = new BuildingTodo();
        $buildtask->setNumberOfTasks(4);
        $buildtask->setNumberOfFreeTasks(4);
        $buildtask->setTaskRemaingTime(null);
        $buildtask->setTaskRemaingTime2(null);
        $buildtask->setTask1(0);
        $buildtask->setTask2(0);
        $buildtask->setTask3(0);
        $buildtask->setTask4(0);
        $buildtask->setTask5(0);
        $buildtask->setTask6(0);
        $buildtask->setTask7(0);
        $buildtask->setTask8(0);
        $buildtask->setTask9(0);
        $buildtask->setTask10(0);
        
        // tell Doctrine you want to (eventually) save the Product (no queries yet)
        $entityManager->persist($buildtask);
        // actually executes the queries (i.e. the INSERT query)
        $entityManager->flush();
        return new Response('Saved new Task with id ' . $buildtask->getId());
    }
    
    
        /**
     * @Route("/buildtask/{building}/{id}", name="add_task")
     * @Method({"GET", "POST"})
     */
    public function TaskCounter($building,$id){
        $entityManager = $this->getDoctrine()->getManager();
        $buildings = $entityManager->getRepository(Building::class)->find($id);
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
    
}
