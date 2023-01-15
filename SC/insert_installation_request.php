<?php

require("C:/wamp/www/lab/classses.php");

$sname=$_POST['software'];
$sversion=$_POST['version'];
$subject=$_POST['subject'];
$request_id=rand(10,200);
// controller class ;
//echo("$sname,$subject,$version,$request_id");
$obj=new installation();

$obj->request($sname,$subject,$sversion,$request_id);

?>