<?php
//include_once "database.php";

class Facade {
  
//request form
  function insert_request($des,$t,$d){

    $con = new mysqli("localhost", "root", "", "bus management system",3306);
    /* check connection */
if (mysqli_connect_errno()) {
  printf("Connection failed: %s\n", mysqli_connect_error());
  exit();
}
else{

    $my_query = "INSERT INTO request (Destination, Time, Date) VALUES ('$des', '$t','$d')";
    $result = mysqli_query($con, $my_query);
  if ($result) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $result . "<br>" . $con->error;
  }
  
  $con->close();
  }
  } 
  //Requisition addition by admin

  function insert_Admin_request($des,$b,$t,$d){

    $con = new mysqli("localhost", "root", "", "bus management system",3306);
    /* check connection */
    if (mysqli_connect_errno()) {
  printf("Connection failed: %s\n", mysqli_connect_error());
  exit();
}
else{
    $my_query = "INSERT INTO requisition (Busnumber, Date, Time, Location) VALUES ('$b', '$d','$t','$des')";
    $result = mysqli_query($con, $my_query);
  if ($result) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $result . "<br>" . $con->error;
  }
  
  $con->close();
  }
  } 
  function insert_requistion(){} 
  function insert_route($route){}
  function insert_sch($schedule){}
  function insert_seat(){}
  function insert_track(){}
  function checkValid($acc)
   {

      $username = $acc->getuserName();
      $password = $acc->getpassword();
      $con = new mysqli("localhost", "root", "", "bus management system",3306);
      $query = "SELECT * FROM students WHERE userName = '$username' AND password = '$password'";
      $results = mysqli_query($con, $query);

      if (mysqli_num_rows($results) > 0) {
         $row = mysqli_fetch_row($results);

         $query1 = "SELECT * FROM students WHERE userName = '$row[0]'";
         $results1 = mysqli_query($con, $query1);
         $row2 = mysqli_fetch_row($results1);
         return $row2[0];
      }
      return -1;
   }
}

?>