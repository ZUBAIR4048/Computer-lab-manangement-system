<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
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
<div class="rox">
<div cellspacing="0%">
    <h1>
        SOFTWARE INSTALLATION REQUEST FORM
    </h1>
    </div>
    <?php
    $con = new mysqli("localhost", "root", "", "lab database",3306);

    /* check connection */
    if (mysqli_connect_errno()) {
    printf("Connection failed: %s\n", mysqli_connect_error());
    exit();
    }

?>
    <div class="form1">
    <table class="forming">   
    <form method="POST" action="insert_installation_request.php" onsubmit="return validate()">
     <!--  <label for="name">Student name:</label>
        <input type="text" id="name"  onchange="validate()" required><br>
        <br>
        <label for="reg"> Reg no:</label>
        <input type="text" id="regno" name="regno"  onchange="validatereg()" required><br><br>

        <p>Choose your program:</p>

        <input type="radio" id="html" name="bs" value="BS" checked>
        <label for="bs">BS</label>
        <input type="radio" id="html" name="bs" value="MS">
        <label for="ms">MS</label>
        <input type="radio" id="html" name="bs" value="PHD">
        <label for="phd">PHD</label><br><br>


        <label for="smester"> Semester no:</label>
        <input type="text" id="Smester" name="Smester" onchange="validatesemester()" required><br><br>
    -->


  
        <label for="sofwerename"> Softwere Name:</label>
       
        <input type="text" id="softwerename" name="softwerename" onchange="validate()" required>
    <br><label id="errorName"></label><br>

        <label for="version"> Version:</label>
        <input type="text" id="version" name="version" onchange="validatep()" required><br><label id="errorp1"></label><br>

        <!--<label for="User id"> User ID:</label>
        <input type="text" id="User Id" name="User Id" required><br><br> -->
  
        


        
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
        
        <label for="description" style="margin-right: 150px;"> Reason:</label><br>
        <textarea type= textarea id="subject" name="subject" rows="3" cols="20" required></textarea>
        <button onclick="displaysubmit()"name="submit" type="submit"id="submit" style="margin-left: 250px; padding-block: 3px; padding-left: 1px; padding-right: 1px;">Submit </button>
            
       </form>    
    </table>
</div>
</center>  
    <footer>
        <div class="footer-content">
         <h3>Services</h3>
         <p> We make it more accessible to use the computer in computer science department</p>   
        <ul class="socials">
            <li><a href="dasboard.html"> <i class="home"></i>Home   </a></li>
            <li><a href="contact.html"> <i class="Contact us"></i>Contact Us   </a></li>
            <li><a href="conditions.html"> <i class="Terms and condition"></i>About</a></li>  
        </ul>     
        <div class="footer-bottom">
          <h3> Computer science department &copy; 2022</h3>
        </div>
        </div>
    </footer>
<script type="text/javascript">
    
    function displaysubmit() { 
            alert("FORM SUCCESSFULLY SUBMITTED");

                };
                
                
    function doesContainNumber(name){
    for(i = 0; i<name.length; i++){
        if(!(( name[i] >= 'a' && name[i] <= 'z') || (name[i] >= 'A' && name[i] <= 'Z'))){
            return false;
        }
        
    }

    return true;
}
function doesContainalpha(phone){
    for(i = 0; i<phone.length; i++){
        if(!(( phone[i] >= '0' && phone[i] <= '9'))){
            return false;
        }       
    }
    return true;
}
function validatep(){
    let phone=document.getElementById("version").value;
    if(phone.length == 0 || !doesContainalpha(phone)){
            let errorp = document.getElementById("errorp1");
            errorp.innerHTML = "Please enter a valid version";
            errorp.style.color = "red";
            return false;
        }
        else{
        let errorp = document.getElementById("errorp1");
            errorp.innerHTML = "";   
    }  
}
function validate(){
        let name = document.getElementById("softwerename").value;
        
        // let email = document.getElementById("email").value;

        if(name.length == 0 || !doesContainNumber(name)){
            let errorName = document.getElementById("errorName");
            errorName.innerHTML = "Please enter a valid subject";
            errorName.style.color = "red";
          //  document.getElementById('submit').setAttribute("disabled","true");
            return false;
        }
        else{
        let errorName = document.getElementById("errorName");
     //   document.getElementById('submit').setAttribute("disabled","false");
            errorName.innerHTML = "";  
            return true; 
    }
       
    }

</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
 