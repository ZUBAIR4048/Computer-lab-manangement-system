<?php
//include "Facade.php";
include "C:\wamp\www\lab\Facade.php";
$email = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
  $email = $_POST["user"];
  $password = $_POST["pass"];
}
$data= new login();
$d= new login();
$var=$data->isValid($email,$password);
$admin=$d->isValid_admin($email,$password);
if($var){
  $_SESSION['std_id']=$var['id'];
  header('location:dashboard.php');
}
else if($admin){
  $_SESSION['admin_id']=$admin['adminId'];
  header('location: C:/wamp/www/lab/SC Project cordinotor side/dashboard labcordinator.php');
}
else{
  echo("User not found");
}



//login class
class login {
  
  private $userName;
  private $password;

  function __construct() {
 
    $this->userName = "";
  	$this->password = "";
  }
  function getuserName(){
    return $this->userName;
  }

  function getassword(){
    return $this->password;
  }


  function isValid($u,$p)
  {
    $db = new Facade();
    $data=$db->checkValid($u,$p);
    return $data;
  }  
  function isValid_admin($u,$p)
  {
    $db = new Facade();
    $data=$db->checkValid_admin($u,$p);
    return $data;
  } 
}

?>