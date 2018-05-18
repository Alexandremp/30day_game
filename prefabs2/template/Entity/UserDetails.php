<?php
 
 namespace App\Entity;
 
 use Doctrine\ORM\Mapping as ORM;
 
 /*
 * @ORM\Entiy(repository="App\Repository\UserDetailsRepository")
 */
 
 class Article
 {
 
 /**
  * @ORM\Id()
  * @ORM\GeneralValue()
  * @ORM\Colum(type="integer")
  */
  
  private $id;
  
  /**
  * @ORM\Column(type="text")
  */
  
  private username;
  
  /**
  * @ORM\Column(type="text")
  */
  
  private $email;
  
  /**
  * @ORM\Column(type="text")
  */
  
  private $password;
  
  /**
  *@Id @OneToOne(targetEntity="User")
  */
  
  private $user_account_id;
}
?>
