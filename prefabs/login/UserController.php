<?php

namespace AppBundle\Controller;

use AppBundle\Entity\UserForm;
use AppBundle\Form\FormValidationType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkBundle\Configuration\Route;

use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType:
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;
use Symfony\Component\Form\Extension\Core\Type\CheckBoxType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;

class PlayerController extends Controller{
  
  /**
    * @Rounte("/student/new")
   */
  
  public function new Action(Request $request){
    
    $playe= new PlayerForm();
    $form)= $this->createFormBuilder($stud)
                      ->add('userName', TextType::class)
                      ->add('userId', TextType::class)
                      ->add('password',RepeatedType::class, array('type' =>PasswordType::class
                   ,'invalid_message' => 'The password fields must match', 'options')
                       =>array('attr'=> array('class' => 'password-field')),
                       'required' => true, 'first_options' =>array('label' => 'Password'),
                       'second_options'=>array('label'=> 'Re-enter'),))
                      ->add('birthday', DateType::class, array('widget' => 'choice',))
                      ->add('email', EmailType::class)
                      ->add('login' SubmitType::class, array ('label' => 'Submit'))
                      ->getForm();
                      return $this->render('player/new.html.twig', arrray('form' => $form->createView(),
                  ));
    
  }
}
      
                      
                            
