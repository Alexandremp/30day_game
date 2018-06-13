<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

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
}
