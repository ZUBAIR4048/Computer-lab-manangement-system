<?php

    include("facadeClass.php");

class Account {
  

  private $user;
  private $pass;

  function __construct( $un, $pw) {
 
    $this->user = $un;
  	$this->pass = $pw;
  }
  function getUsername(){
    return $this->user;
  }

  function getPassword(){
    return $this->pass;
  }


  function isAccountValid()
  {
    $db = new DBFacade();
    $id = $db->checkValidAccount($this);
   return $id;
  }  
}

?>