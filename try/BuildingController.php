
<?php
  namespace App\Controller;
  use App\Entity\Article;
  use Symfony\Component\HttpFoundation\Response;
  use Symfony\Component\HttpFoundation\Request;
  use Symfony\Component\Routing\Annotation\Route;
  use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
  use Symfony\Bundle\FrameworkBundle\Controller\Controller;
  use Symfony\Component\Form\Extension\Core\Type\TextType;
  use Symfony\Component\Form\Extension\Core\Type\TextareaType;
  use Symfony\Component\Form\Extension\Core\Type\SubmitType;
  class ArticleController extends Controller {
    /**
     * @Route("/", name="article_list")
     * @Method({"GET"})
     */
    public function index() {
      $articles= $this->getDoctrine()->getRepository(Article::class)->findAll();
      return $this->render('articles/index.html.twig', array('articles' => $articles));
    }
