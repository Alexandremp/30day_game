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
  * @ORM\Column(type="text" ,length=255)
  */
  
  private screen_user_name;
  
}
?>
