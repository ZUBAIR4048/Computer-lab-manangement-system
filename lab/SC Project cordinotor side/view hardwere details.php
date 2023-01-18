<!DOCTYPE html>
<html>
    <head>
        <title>View Hardwere Details</Details> </title>
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
.row:after {
  content: "";
  display: table;
  clear: both;
}
footer{
    background-color:rgb(56, 56, 143);
    height: 10%;
}
* {
  box-sizing: border-box;
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
      <input type="text" placeholder="search hardware by id" name="search2">
      <button type="submit">Done</button>
    </form>
  </div>
<h2 style="text-align: center;">Hardwere Details </h2>

<table id="table" style="width:100%">
  <tr>
    
    <th>lab id</th>
    <th>Computer id</th>
    <th>Mouseid</th>
    <th>Monitor id</th>
    <th>Keyboard id</th>
    <th>CPU id</th>
    <th>RAM</th>
    <th>Harddrive/SSD id</th>
    
    
    
  </tr>

  <?php

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
  $sql = "SELECT* FROM hardware";
  $result = $conn->query($sql);
  
  //if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    ?> 
      <tr> 
      
      <td><?php echo $row["hid"] ?></td>
      <td><?php echo $row["hlab"] ?></td>
      <td>c42202</td>
      <td><?php echo $row["hmonitor"] ?></td>
      <td><?php echo $row["hkeyboard"] ?></td>
      <td><?php echo $row["hcpu"] ?></td>
      <td><?php echo $row["hhard disk"] ?></td>
    
      
      <td><input type="radio" name="r" value="accept" >accept<br><input type="radio" name="r" value="reject" >Reject</td>
      <td><button style color="white"> <a href="https://mail.google.com/mail/u/0/#inbox/FMfcgxvwzcMvCVqtTprDSvtNVBhnMBzq        ">Reply</a></button></td>  
     
    </tr>
<?php
    }
    $conn->close();
    ?> 
    
   
</table>
<br><br><br><br>
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

