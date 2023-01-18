<!DOCTYPE html>
<html>
    <head>
        <title>View Installation Requests </title>
<style>
    body{
        background: url('background1.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
    }
table, th, td {
  border:1px solid black;
  text-align: center;
}
* {
  box-sizing: border-box;
}
.column {
  float: left;
  width: 50%;
  padding: 10px;
  height: 180px;
}
.tab{

}
.row:after {
  content: "";
  display: table;
  clear: both;
}
footer{
    background-color:rgb(56, 56, 143);
    height: 10%;
}
form.example input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 80%;
  background: #f1f1f1;
}

form.example button {
  float: left;
  width: 20%;
  padding: 10px;
  background: #2196F3;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: 600px;
  cursor: pointer;
}

form.example button:hover {
  background: #0b7dda;
}

form.example::after {
  content: "";
  clear: both;
  display: table;
}
</style>
</head>
<body>
  
  <div id="search">
    <br>
    <form class="example" style="margin:auto;max-width:300px">
      <input type="text" placeholder="search by id" name="search2">
      <button type="submit">Done</button>
    </form>
  </div>

<h2 style="text-align: center;">Installation Requests</h2>

<h1>Notifications</h1>
    <table id="table" style="width:100%">>
      <tr>
      <th>Request id</th>
      <th>LABID</th> 
      <th>Softwer Name</th>
      <th>Version</th>
        <th>Description</th>
        <th>Status</th>
        <th>Responce</th>
        
      </tr>
      <?php
        require_once 'C:\wamp\www\lab\classses.php';
        $requestFacade = new RequestFacade();
        $requests = $requestFacade->getAllRequest();
        foreach ($requests as $request) {
          echo '<tr>';
          echo '<td>' . $request->getRequestID() . '</td>';
          
          echo '<td>' . $request->getlabID()   .'</td>';

          echo '<td>' . $request->getSname() . '</td>';
          echo '<td>' . $request->getversion() . '</td>';
          echo '<td>' . $request->getSubject() . '</td>';

          ?>

    <td><input type="radio" name="r" value="accept" >accept<br><input type="radio" name="r" value="reject" >Reject</td>
    <td><button style color="white"> <a href="https://mail.google.com/mail/u/0/#inbox/FMfcgxvwzcMvCVqtTprDSvtNVBhnMBzq        ">Reply</a></button></td>  
  </tr>
      

          
      
  <?php
      
      
        }
        ?> 
    </table>
<?php




/*
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
$sql = "SELECT* FROM installation";
$result = $conn->query($sql);

//if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    ?>
    <tr> 
    
    <td><?php echo $row["requestId"] ?></td>
    <td><?php echo $row["labid"] ?></td>
    <td>c42202</td>
    <td><?php echo $row["sname"] ?></td>
    <td><?php echo $row["version"] ?></td>
    <td><?php echo $row["subject"] ?></td>

    <?php 
?>
    
    <td><input type="radio" name="r" value="accept" >accept<br><input type="radio" name="r" value="reject" >Reject</td>
    <td><button style color="white"> <a href="https://mail.google.com/mail/u/0/#inbox/FMfcgxvwzcMvCVqtTprDSvtNVBhnMBzq        ">Reply</a></button></td>  
  </tr>
<?php
  }//
//} else {
  //echo "0 results";
//}
$conn->close();


?>
<!-- 
 

  <tr>
    <td>0630</td>
    <td>200</td>
    <td>c42202</td>
    <td>dev c++</td>
    <td>2.00</td>
    <td> for c++ practice</td>
    <td><input type="radio" name="r" value="accept" >accept<br><input type="radio" name="r" value="reject" >Reject</td>
    <td><button style color="white"> <a href="https://mail.google.com/mail/u/0/#inbox/FMfcgxvwzcMvCVqtTprDSvtNVBhnMBzq        ">Reply</a></button></td>
    
    
  </tr>
 
  <tr>
    <td>0630</td>
    <td>200</td>
    <td>c42201</td>
    <td>wamp server</td>
    <td>5.2</td>
    <td> </td>
   
    <td><input type="radio" name="r" value="accept" >accept<br><input type="radio" name="r" value="reject" >Reject</td>
    <td><button><a href="https://mail.google.com/mail/u/0/#inbox/FMfcgxvwzcMvCVqtTprDSvtNVBhnMBzq        " >Reply</a> </button></td>
    
    
  </tr>
  
  <tr>
    
    <td>0631</td>
    <td>204</td>
    <td>c42204</td>
    <td>vlc media palyer</td>
    <td>5.2</td> 
    <td> require for Assignments</td>
    <td><input type="radio" name="r" value="accept" >accept<br><input type="radio" name="r" value="reject" >Reject</td>
    <td><button> <a href="https://mail.google.com/mail/u/0/#inbox/FMfcgxvwzcMvCVqtTprDSvtNVBhnMBzq        ">Reply</a></button></td>
   */
  ?> 
  </tr>
</table>
<br><br><br><br>
<br><br><br><br>
<footer>
            <div class="row">
            <div class="column">
              <br>
              <button class="footer-btn"><a target="_blank" href="contact_us/contact.html">Contact Us </a></button>
                <br><br>
              <button class="footer-btn"><a href="#">Privacy Policy</a></button><br><br>
              <button class="footer-btn"><a href="#">Terms and Conditions</a></button><br>
            </div>     
            <div class="column">
              <h3 style="color: white;"> Computer science department <br> Quaid e Azam university, Islamabad, Pakistan</h3>
              <h3 style="color: white;">068-570234</h3>
            </div>      
            </div>
</footer>      
    
</body>
</html>

