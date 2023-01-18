<?php
// include_once "database.php";
//require_once 'classses.php';
define ('DB_SYS','mysql');
define ('DB_HOST','localhost');
define ('DB_NAME','lab database');
define ('DB_USER','root');
define ('DB_PASS','');






class InstallationData {
    private $conn;
    public function __construct() {
        $this->conn = mysqli_connect("localhost", "root", "", "lab database");
    }
    public function getAllRequest() {
        $query = "SELECT * FROM installation";
        $result = mysqli_query($this->conn, $query);
        $requests = array();
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $request = new Installation_Request();
                $request->setRequestId($row['requestId']);
                $request->setSname($row['sname']);
                $request->setSubject($row['subject']);
                $request->setLabID($row['labid']);
                $request->setversion($row['version']);
                array_push($requests, $request);
            }
        }
        mysqli_close($this->conn);
        return $requests;
    }
  }
  class ComplaintData {
    private $conn;
    public function __construct() {
        $this->conn = mysqli_connect("localhost", "root", "", "lab database");
    }
    public function getAllCRequest() {
        $query = "SELECT * FROM installation";
        $result = mysqli_query($this->conn, $query);
        $requests = array();
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                   $comp = new complaint();
                  $comp->setRequestId($row['complaintid']);
                  $comp->setSetsubject($row['subject']);
                  $comp->setLabID($row['labid']);
                  $comp->setAbout($row['funtionality']);
                  $comp->setDescription($row['description']);
                  array_push($requests, $comp);
            }
        }
        mysqli_close($this->conn);
        return $requests;
    }
  }

class Facade {
  private $conn;
    public function __construct() {
        $this->conn = mysqli_connect("localhost", "root", "", "lab database");
    }
    function checkValid($username,$password)
   {

    $con_str = DB_SYS.':host='.DB_HOST.';dbname='.DB_NAME;
    $pdo=new PDO($con_str,DB_USER,DB_PASS);
      $sql= "SELECT * FROM login WHERE id =:username AND password = :password ";
      $stat=$pdo->prepare($sql);
      $stat->bindValue(":username",$username);
      $stat->bindValue(":password",$password);
      $stat->execute();
      if($result=$stat->fetch())
      {
        return $result;
      }
      else{
        return false;
      }
   }
   function checkValid_admin($username,$password)
   {

    $con_str = DB_SYS.':host='.DB_HOST.';dbname='.DB_NAME;
    $pdo=new PDO($con_str,DB_USER,DB_PASS);
      $sql= "SELECT * FROM admin WHERE adminId =:username AND password = :password ";
      $stat=$pdo->prepare($sql);
      $stat->bindValue(":username",$username);
      $stat->bindValue(":password",$password);
      $stat->execute();
      if($result=$stat->fetch())
      {
        return $result;
      }
      else{
        return false;
      }
   }
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


   
  function InsertInInstallation($sname,$subject,$sversion,$request_id,$lid){
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
  $sql = "INSERT INTO installation (sname,subject,requestId,version,labid)
    VALUES ('$sname','$subject','$request_id','$sversion','$lid')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}

  }


 
function Insertcomplaint($sname,$fun,$lid,$d,$request_id){
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
$sql = "INSERT INTO complaint (labid,subject,functionality,description,complaintid)
  VALUES ('$lid','$sname','$fun','$d','$request_id')";

if ($conn->query($sql) === TRUE) {
echo "New record created successfully";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}

}

function Inserthardwere($lid,$mid,$monid,$keyid,$cid,$hid,$request_id)
{
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
$sql = "INSERT INTO harwere(hid,hlab,hmouse,hmonitor,hkeyboard,hcpu,hharddisk)
  VALUES ('$request_id','$lid','$mid','$monid','$keyid','$cid','$hid')";

if ($conn->query($sql) === TRUE) {
echo "New record created successfully";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();




}
}

function getAllRequest( )
  {
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
    else echo 'connected';

        $query = "SELECT * FROM installation";
        $result = mysqli_query($this->conn, $query);
        $requests = array();
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $request = new Installation_Request();
                $request->setRequestId($row['requestId']);
                $request->setSname($row['sname']);
                $request->setSubject($row['subject']);
                $request->setLabID($row['labid']);
                $request->setversion($row['version']);
                array_push($requests, $request);
            }
        }
        mysqli_close($this->conn);
        return $requests;
    }
    function getAllCRequest( )
    {
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
      else echo 'connected';
  
          $query = "SELECT * FROM complaint";
          $result = mysqli_query($this->conn, $query);
          $requests = array();
          if (mysqli_num_rows($result) > 0) {
              while ($row = mysqli_fetch_assoc($result)) {
                  $comp = new complaint();
                  $comp->setRequestId($row['complaintid']);
                  $comp->setsubject($row['subject']);
                  $comp->setLabID($row['labid']);
                  $comp->setAbout($row['functionality']);
                  $comp->setDescription($row['description']);
                  array_push($requests, $comp);
              }
          }
          mysqli_close($this->conn);
          return $requests;
      }
  
  
  /*  $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "lab database";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    else echo 'connected';
    $sql = "SELECT* FROM installation";
    $result = $conn->query($sql);

    //if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    ?>

    
    <td><?php $request= $row["requestId"] ?></td>
    <td><?php $labid= $row["labid"] ?></td>
    <td><?php $comid=c42202?></td>
    <td><?php $sanme= $row["sname"] ?></td>
    <td><?php $version= $row["version"] ?></td>
    <td><?php $subject= $row["subject"] ?></td>
  
    
    
    </tr>
      <?php    }
    
    $obj=new installation();
    $obj->viewinstallation($request,$labid,$sanme,$version,$subject);

  }


*/
}

?>