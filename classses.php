<?php
// include_once "Facade.php";
~require("C:/wamp/www/lab/Facade.php");
class login {
    // Properties
    private $id;
    private $password;


  function __constructor($id,$password) 
  {
    $this->$id = $id;
    $this->$password = $password;


  }
  
    function set_id($id) 
    {
      $this->id = $id;
    }
    function get_id() {
      return $this->id;
    }

    function password($password) 
    {
      $this->password = $password;
    }
    function get_password() {
      return $this->password;
    }
    function addsid()
    {
     
    }
    function updateid()
    {
     
    }
    function deleteid()
    {
    
  }


}



class labcordinator {
  // Properties
  private $name;
  private $login;
  private $password;
  private $department;
  

  // Methods
  function __constructor($name, $login,$password) 
  {
    $this->name = $name;
    $this->login = $login;
    $this->password = $password;
    
  }
  function set_name($name) 
  {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
  
  function set_login($login)
 {
    $this->login = $login;
  }
  function get_login()
   {
    return $this->$login;
   }
  function set_password($password)
  {
     $this->login = $password;
   }
   function get_password()
   {
    return $this->$password;
   }
   function set_department($department) 
   {
     $this->name = $department;
   }
   function get_department()
   {
    return $this->$department;
   }
   function addcordinator()
   {
    
   }
   function updatecordinator()
   {
    
   }
   function deletecordinator()
   {
    

}
  
}

class computer{
    // Properties
    public $labid;
    public $hd;
    public $st;
    public $computerid;
    
  
    function __constructor($labid, $hd,$st,$computerid) 
  {
    $this->labid = $labid;
    $this->lhd = $hd;
    $this->st = $st;
    $this->computerid = $computerid;
    
  }
  
    function set_labid($labid) 
    {
      $this->labid = $labid;
    }
    function get_labid() {
      return $this->labid;
    }
    
    function set_hd($hd)
   {
      $this->hd= $hd;
    }
    function get_hd()
     {
      return $this->hd;
     }
    function set_st($st)
    {
       $this->st= $st;
     }
     function get_st()
     {
      return $this->st;
     }
     function set_computerid($computerid) 
     {
       $this->name = $computerid;
     }
     function get_computerid()
     {
      return $this->computerid;
     }
     function insertcomputer()
     {
      
     }
     function updatecomputer()
     {
      
     }
     function deletecomputer()
     {
      
     }
    
    
  }
  class installation {
    // Properties
    public $id;
    function __constructor($id) 
  {
    $this->id = $lid;
    
  }
  
    function set_labid($labid) 
    {
      $this->labid = $labid;
    }
    function get_labid() {
      return $this->labid;
    }
    
     function request($sname,$subject,$sversion,$request_id)
     {
      // pass this data to db facade class 
     $obj= new Facade();
     $obj->InsertInInstallation($sname,$subject,$sversion,$request_id);
     }
     function checkstatus()
     {
      
     }
     function watchhistory()
     {
      
     }
     
     function installation()
     {
      
     }
    function print(){
      echo 'classes';
    }
    
  }

  class lab {
    // Properties
    public $id;
    public $name;
    public $department;
    
    
    function __constructor($id) 
  {
    $this->id = $lid;
    
  }
  
    function set_id($id) 
    {
      $this->id = $id;
    }
    function get_id() {
      return $this->ld;
    }


    function set_name($name) 
    {
      $this->name= $name;
    }
    function get_name() {
      return $this->name;
    }
    
     
    
    
  }

  class complaint {
    // Properties
    public $id;
    function __constructor($id) 
  {
    $this->id = $lid;
    
  }
  
    function set_id($id) 
    {
      $this->id = $id;
    }
    function get_labid() {
      return $this->labid;
    }
    
     function makecomplaint()
     {
      
     }
     function status()
     {
      
     }
     function history()
     {
      
     }
     
     function viewcomplaints()
     {
      
     }

    
    
  }
  class hardwere {
    // Properties
    private $id;
    private  $name;
    private $labid;
    private $mouseid;
    private $monitorid;
    private $keyboardid;
    private $cpuid;
    private $harddiskid;
    function __constructor($name, $labid, $mouseid, $monitorid, $keyboardid, $cpuid, $harddiskid) 
  {
    $this->name = $name;
    $this->labid = $labid;
    $this->mouseid = $mouseid;
    $this->monitorid = $monitorid;
    $this->keyboardid = $keyboardid;
    $this->cpuid = $cpuid;
    $this->harddiskid = $hardiskid;
    
  }
  
    function set_id($id) 
    {
      $this->id = $id;
    }
    function get_id() 
    {
      return $this->id;
    }
    function set_name($name) 
    {
      $this->name = $name;
    }
    function get_name() 
    {
      return $this->name;
    }
    function get_labid() 
    {
      return $this->labid;
    }
    function get_mouseid() 
    {
      return $this->mouseid;
    }
    function get_monitorid() 
    {
      return $this->monitorid;
    }
    function get_keyboardid() 
    {
      return $this->keyboardid;
    }
    function get_cpuid() 
    {
      return $this->cpuid;
    }
    function get_harddiskid() 
    {
      return $this->harddiskid;
    }
//insert
    function insert($hard)
    {
      $db = new Facade();
      $db->insert_hardware($hard);
    }
    function updatehardwere()
    {
     
    }
    function deletehardwere()
    {
     
    }
   
    
  }
  
  class softwere {
    // Properties
    private $id;
    private  $name;
    private $version;
    function __constructor($id,$name,$version) 
  {
    $this->id = $lid;
    $this->name = $namr;
    $this->version=$version;
    
  }
  
    function set_id($id) 
    {
      $this->id = $id;
    }
    function get_id() 
    {
      return $this->id;
    }
    
    function set_name($name) 
    {
      $this->name = $name;
    }
    function get_name() 
    {
      return $this->name;
    }
    function set_version($version) 
    {
      $this->version = $version;
    }
    

    function insertsoftwere()
    {
     
    }
    function updatesoftwere()
    {
     
    }
    function deletesoftwere()
    {
     
    }
 


  }


?>