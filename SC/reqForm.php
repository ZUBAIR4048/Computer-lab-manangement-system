
<?php
//include_once "ReqClass.php";
require("C:/wamp/www/screens/ReqClass.php");
$destination = $time = $date= "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
  $destination = $_POST["fdes"];
  $time = $_POST["ftime"];
  $date = $_POST["fdate"];
}
$data= new requistion_r();
$data->insert($destination,$time,$date);
?>



