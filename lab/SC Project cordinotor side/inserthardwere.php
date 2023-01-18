<?php

require("C:/wamp/www/lab/classses.php");

$lid=$_POST['zid'];
$mid=$_POST['mouseid'];
$monid=$_POST['monitorid'];
$keyid=$_POST['keyboardid'];
$cid=$_POST['cpuid'];
$hid=$_POST['harddisk'];
$request_id=rand(10,200);
//echo("$sname,$sversion,$lid,$subject,$request_id");

// controller class ;
//echo("$sname,$subject,$version,$request_id");
$obj=new hardwere();
echo("obj");
$obj->inserthardwere($lid,$mid,$monid,$keyid,$cid,$hid,$request_id);

?>