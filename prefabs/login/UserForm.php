<?php

namespace AppBundle\Entity;
class StundentForm{
    private $userName;
    private $userId;
    public  $password;
    private $email;
    private $birthday;
    
    public function getUserName() {
        return $this->userName;
        
    }
    
    public function setUserName(){
        $this->userName =$userName;
    }

    public function getUserId() {
        return $this->userId;
        
    }
    
    public function setUserId(){
        $this->userId =$userId;
    }
    
    public function getPassword() {
        return $this->password;
        
    }
    
    public function setPassword(){
        $this->password=$password;
    }

    public function getEmail() {
        return $this->email;
        
    }
    
    public function setEmail(){
        $this->email=$email;
    }
    
    public function getBirthday() {
        return $this ->birthday;
        
    }
    
    public function setBirthday(){
        $this->userId =$birthday;
    }
    
?>
