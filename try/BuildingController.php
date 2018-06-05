
<?php
  namespace App\Controller;
  use App\Entity\Buildings;
  use Symfony\Component\HttpFoundation\Response;
  use Symfony\Component\HttpFoundation\Request;
  use Symfony\Component\Routing\Annotation\Route;
  use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

  class BuildingController extends Controller {
    /**
     * @Route("/", name="Building_list")
     * @Method({"GET"})
     */
    public function index() {
      $articles= $this->getDoctrine()->getRepository(Article::class)->findAll();
      return $this->render('articles/index.html.twig', array('articles' => $articles));
    }

    /**
    * @Route("/buildings/{id}/{upgrade}", name="upgradables")
    * @Method({"GET","POST"})
    */
    
    public function update(Request $request, $id, $upgrade) {
      $buildable = new Buildings();
      $buildable = $this->getDoctrine()->getRepository(Buildings::class)->find($id);
      
      switch ($upgrade) {
        case 100:
            echo "updating ControlHQ";
            $level=$buildable->getControlHQ;
            $level++;
            $buildable->setControlHQ($level);
            break;
        case 101:
            echo "updating DrillingRig";
            $level=$buildable->getDrillingRig;
            $level++;
            $buildable->setDrillingRig($level);
            break;
        case 102:
            echo "updating Barracks";
            $level=$buildable->getBarracks;
            $level++;
            $buildable->setBarracks($level);
            break;
          case 103:
            echo "updating Warehouse";
          $level=$buildable->getWarehouse;
            $level++;
            $buildable->setWarehouse($level);
            break;
          case 104:
            echo "updating Workshop";
          $level=$buildable->getWorkshop;
            $level++;
            $buildable->setWorkshop($level);
            break;
          case 105:
            echo "updating Nursery";
          $level=$buildable->getNursery;
            $level++;
            $buildable->setNursery($level);
            break;
          case 106:
            echo "updating Laboratory";
            $level=$buildable->getLaboratory;
            $level++;
            $buildable->setLaboratory($level);
            break;
          case 107:
            echo "updating HuntersLodge";
            $level=$buildable->getHuntersLodge;
            $level++;
            $buildable->setHuntersLodge($level);
          break;
              default:
              echo "error on update";
      }

          
}
      
      
