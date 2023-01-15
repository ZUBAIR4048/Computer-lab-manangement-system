<?php
include_once "Facade.php";

$email = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
  $email = $_POST["email"];
  $password = $_POST["password"];
}
$data= new login($email,$password);
$data->isValid();



//login class
class login {
  
  private $userName;
  private $password;

  function __construct( $name, $pass) {
 
    $this->userName = $name;
  	$this->password = $pass;
  }
  function getuserName(){
    return $this->userName;
  }

  function getassword(){
    return $this->password;
  }


  function isValid()
  {
    $db = new Facade();
    $id = $db->checkValid($this);
   return $id;
  }  
}

?>