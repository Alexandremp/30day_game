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
