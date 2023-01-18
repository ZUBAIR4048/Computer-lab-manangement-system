<?php
include_once "classes.php";

$name = $labid = $mouseid = $monitorid = $keyboardid = $cpuid = $harddiskid ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
  $name = $_POST["name"];
  $labid = $_POST["labid"];
  $mouseid = $_POST["mouseid"];
  $monitorid = $_POST["monitorid"];
  $keyboardid = $_POST["keyboardid"];
  $cpuid = $_POST["cpuid"];
  $harddiskid = $_POST["harddiskid"];
}
$obj= new hardwere($name, $labid, $mouseid, $monitorid, $keyboardid, $cpuid, $harddiskid);
insert($obj);

