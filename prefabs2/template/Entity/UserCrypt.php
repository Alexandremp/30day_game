<?php
 
 namespace App\Entity;
 
 use Doctrine\ORM\Mapping as ORM;
 
 /*
 * @ORM\Entiy(repository="App\Repository\UserCryptRepository")
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
  
  private $password_salt;
  
  /**
  * @ORM\Column(type="text")
  */
  
  private $password_pepper;
  
  /**
  * @ORM\Column(type="text")
  */
  
  private $password_hash;
  
  /**
  *@Id @OneToOne(targetEntity="User")
  */
  
  private $user_account_id;
}
?>
