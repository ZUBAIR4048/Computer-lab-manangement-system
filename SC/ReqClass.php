<?php
//include_once "Facade.php";
require("C:/wamp/www/screens/Facade.php");

class requistion_r {
  
  private $destination;
  private $time;
  private $date;
  private $Bus;

  function __construct() {
 
    $this->destination = "";
  	$this->time = "";
    $this->date = "";
    $this->Bus="";
  }
  function getDestination(){
    return $this->destination;
  }

  function gettime(){
    return $this->time;
  }
  function getdate(){
    return $this->date;
  }
  function insert($des,$t,$d){
    $db = new Facade();
    $db->insert_request($des, $t, $d);

  }
  function insert_req($des,$b,$t,$d){
    $db = new Facade();
    $db->insert_Admin_request($des,$b, $t, $d);

  }
}
  /*function view(){
    $con = new mysqli("localhost", "root", "", "bus management system",3306);

/* check connection 
if (mysqli_connect_errno()) {
    printf("Connection failed: %s\n", mysqli_connect_error());
    exit();
}
  }
else{
  $my_query = 'SELECT * FROM request';
  $result = mysqli_query($con, $my_query);
  "<h4>View Students</h4>

<hr>
    
    

    <table class="table col-md-8">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Contact</th>
      <th scope="col">Address</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>"

  <?php

if($result)
{
   $flag = true;
    while ($rows=mysqli_fetch_row($result)) {
      # code...
      $flag = false;
      echo "<tr>";
?>
"<td>" <?php echo $rows[0]; ?>  "</td>"
"<td>" <?php echo $rows[1]; ?>  "</td>"
"<td>" <?php echo $rows[2]; ?>  "</td>"
"<td>" <?php echo $rows[3]; ?>  "</td>"

"<td>"
"<div class="row">
    <form method="POST">
        <input type="hidden" name="dest" value="<?php echo $rows[0]; ?>" />
        <input type="hidden" name="time" value="<?php echo $rows[1]; ?>" />
        <input type="hidden" name="date" value="<?php echo $rows[2]; ?>" />
<button class="btn btn-success mr-2">Edit</button>
    </form>
    
    <form method="POST">
    <input type="hidden" name="deleteID" value="<?php echo $rows[0]; ?>" />
<button class="btn btn-danger">Delete</button>
    </form>
</div>
</td>"
    
<?php


echo "</tr>";


    }

    if($flag){
        echo "<tr> <td colspan='4'> Sorry, no records found!</td> </tr> ";
    }


  }

?>


    
  "</tbody>"
"</table>"

}
}

?>*/