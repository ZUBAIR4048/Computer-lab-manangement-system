<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>SOFTWERE INSTALLATION REQUEST</title>
    <link rel="shortcut icon" href="favicon.ico">
</head>
<body>  
    <style>
        body{
            background: url('background1.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
        }
    </style> 
    <table width="100%" cellspacing="0%" align="center" movement="fixed">
        <tr>
            <td><img src="site-icon.png" height="150px" width="150px">
             </td>
             <td>
                <table bgcolor="#FF0000" >
                    <section>
                    <div class="page-header">
                        <div class="container" text-align="center" font-size="50%">
                            <h1>Department of Computer Sciences</h1>
                            <p>Quaid-i-Azam University, Islamabad</p>
                        </div>
                    </div>
                </section>
                 </table>
             </td>
        </tr>
     </table>
     <center>

        <?php
        $con = new mysqli("localhost", "root", "", "lab database",3306);
    
        /* check connection */
        if (mysqli_connect_errno()) {
        printf("Connection failed: %s\n", mysqli_connect_error());
        exit();
        }
    
    ?>
<div id="rox">
<div cellspacing="0%">
    <h1>
        INSERT HARDWERE 
    </h1>
    
    </div>
    <div class="form2" style="margin: auto;">
    <table class="forming">   
    <form action="backend.php"></form>
    <form align="centre">

    </div>
    <div class="form1" style="margin: auto;">
    <table class="forming">   
    <form  method="POST" action="inserthardwere.phps"></form>
    <form align="centre">
        <br>
        
    <div>
        <label for="labs">LAB ID     </label>
        <?php
        $myQuery="SELECT * from lab ";
        $lab_id=mysqli_query( $con,$myQuery);
        ?>
        <select id="labs"  name="zid" required>
          <?php
          while($zid=mysqli_fetch_array($lab_id))
          {
            echo "<option value='$zid[1]' >$zid[0]</option>";
          }
          ?>
        </select>
      </div>
        
        <br>
        <label for="mouseid"> Mouse id:</label>
        <input type="text" id="mouseid" name="mouseid"  onchange="validatereg()" required><br><br>


        <br>
        <label for="monitorid"> Monitorid:</label>
        <input type="text" id="monitorid" name="monitorid"  onchange="validatereg()" required><br><br>

        <br>
        <label for="keyboardid"> keyboard id:</label>
        <input type="text" id="keyboardid" name="keyboardid"  onchange="validatereg()" required><br><br>

        <br>
        <label for="cpuid"> CPU id:</label>
        <input type="text" id="cpuid" name="cpuid"  onchange="validatereg()" required><br><br>

        <br>
        <label for="harddiskid"> harddisk id :</label>
        <input type="text" id="harddiskid" name="harddiskid"  onchange="validatereg()" required><br><br>


        

        <br>
        <label for="Ramid"> Ram id:</label>
        <input type="text" id="Ramid" name="Ramid"  onchange="validatereg()" required><br><br>



        <input type="submit" value="Submit" id="btn1">
      </form>   
    </table>
</div>