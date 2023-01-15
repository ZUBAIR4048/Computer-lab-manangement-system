<?php
include "application.php";
$obj=new database();
$obj->insert('login',['username'=>'04072013004', 'password'=>'34435i']);
class student{
    public $id;
    public $password;
    public $name;
    public $department;
    function addstudent(){

    }
    function deletestudent(){

    }
    function updatestudent(){

    }
}
class computer{
    public $compid;
    function addcomputer(){

    }
    function deletecomputer(){

    }
    function updatecomputer(){
        
    }
}
class installation{
    public $installid;

    function request(){

    }
    function checkstatus(){
        return $installid;
    }
    function history(){
        
    }
}
class complaint{

}

?>