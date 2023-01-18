<?php

require("C:/wamp/www/lab/classses.php");

$sname=$_POST["software"];
$fun=$_POST['functionality'];
//$lid=$_POST['zid'];
$lid=$_POST['zid'];
$d=$_POST['des'];

$request_id=rand(10,200);
//echo("$sname,$sversion,$lid,$subject,$request_id");

// controller class ;
//echo("$sname,$subject,$version,$request_id");
$obj=new complaint();

$obj->makecomplaint($sname,$fun,$lid,$d,$request_id);
header("location: dashboard.php")
?>