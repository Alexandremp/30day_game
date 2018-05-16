<?php
 namespace App/Controller;
   
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtrabundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
class HomepageController extends Controller {

/**
* @Route("/")
* @Method({"GET"})
*/

public funtion index() {
    
    //return new Response
    ('<html><body> Texting... </body></html> ');
    
    return $this-> render('scarred-sky/index.html.twig')
    
  }
}
