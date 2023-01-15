<?php

// include_once "facadeClass.php";
include_once("account.inc.php");


if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $username = $_POST['username'];
    $password = $_POST['password'];
 $msg = "<br> <center> <h5> User not found ... </h5> </center> <br>";  
    $account = new Account($username, $password);
   $id= $account->isAccountValid();
    if($id!=-1)
    {
          $msg = " Logged in Successfully ....";
          include("studentProfile.html");
    }
    else if($username=="admin"&&$password=="admin"){
      $msg = " Logged in Successfully ....";
             include("adminHome.html");
    }
    else{
         $msg = "Credentials are invalid .... <br>";
    include("Login.html");
         
    }
    



  }

  else{
    echo "Fatal Error";
  }
?>
