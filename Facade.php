<?php
// include_once "database.php";

class Facade {
  
//insert hardware
  function insert_hardware($hardware){

    $name=$hardware->get_name();
    $labid=$hardware->get_labid();
    $mouseid=$hardware->get_name();
    $monitorid=$hardware->get_labid();
    $keyboard=$hardware->get_keyboardid();
    $cpuid=$hardware->get_cpuid();
    $harddiskid=$hardware->get_harddiskid();
    

  $my_query = "INSERT INTO harwere (hname, hlab, hmouse, hmonitor, hkeyboard, hcpu, hharddisk) VALUES ('$name', '$labid' , '$mouseid' , '$monitorid' , '$keyboardid' , '$cpuid' , '$harddiskid')";
  $result = mysqli_query($con, $my_query);
  if ($conn->query($result) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $result . "<br>" . $conn->error;
  }
  
  $conn->close();

  } 

  function insert_software(){} 
  function insert_student($route){}
  function insert_coordinator($schedule){}
  function insert_lab(){}
  function check_login($acc)
   {

      $username = $acc->getuserName();
      $password = $acc->getpassword();

      $query = "SELECT * FROM students WHERE userName = '$username' AND password = '$password'";
      $results = mysqli_query($conn, $query);

      if (mysqli_num_rows($results) > 0) {
         $row = mysqli_fetch_row($results);

         $query1 = "SELECT * FROM students WHERE userName = '$row[0]'";
         $results1 = mysqli_query($conn, $query1);
         $row2 = mysqli_fetch_row($results1);
         return $row2[0];
      }
      return -1;
   }


   
  function InsertInInstallation($sname,$subject,$sversion,$request_id){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "lab database";

// Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else{
  $sql = "INSERT INTO installation (sname,subject,requestId,version)
    VALUES ('$sname','$subject','$request_id','$sversion')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}

  }
}

?>