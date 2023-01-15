<?php
  class database{
    private $db_host="localhost";
    private $db_user="root";
    private $db_pass="";
    private $db_name="login";
    private $mysqli="";
    private $result=array();
    private $conn=false;

    public function__construct(){
        if(!this->conn){
            $this->mysqli=new mysqli($this->db_host,$this->db_user,$this->db_pass,$this->db_name)
            $this->conn=true;
        }
        if($this->mysqli->connect_error){
            array_push($this->result,$this->mysqli->connect_error)
            return false;
        }
        else{
            return true;
        }
    }
    function insert($login,$credential=array()){
       
    }
    function update(){

    }
    function delete(){

    }
    private function table_exist($login){
        $sql="show tables from $this->db_name LIKE '$login'";
        $tableindb=$this->mysqli->query($sql);
        if($tableindb){
            if($tableindb->num_rows==1){
                return true;
            }
            else{
                array_push($this->result,$table. "doesn't exist in this database");
                return false;
            }
        }
    }

  }


?>