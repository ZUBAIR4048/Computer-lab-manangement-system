<?php

require("C:/wamp/www/lab/classses.php");

$sname=$_POST['softwerename'];
$sversion=$_POST['version'];
$lid=$_POST['zid'];
$subject=$_POST['subject'];
$request_id=rand(10,200);

//echo("$sname,$sversion,$lid,$subject,$request_id");

// controller class ;
//echo("$sname,$subject,$version,$request_id");


$obj=new Installation_Request();

$obj->request($sname,$subject,$sversion,$request_id,$lid);
echo("REQUEST SUBMITTED");
header("location: dashboard.php")

?>