<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Complaint</title>
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

<?php
    $con = new mysqli("localhost", "root", "", "lab database",3306);

    /* check connection */
    if (mysqli_connect_errno()) {
    printf("Connection failed: %s\n", mysqli_connect_error());
    exit();
    }

?>
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
                COMPLAINT FORM
            </h1>
            </div>
            <div class="form1">
            <table class="forming">   
            <form method="POST" action="compliant.php" onSubmit="return validate()">
                <label for="sofware"> Subject:</label>
                <input type="text" id="software" name="software" onchange="validate()"  required>

            <br><label id ="errorName"></label> <br>


            <label for="Semester">About</label>
            <select id="Semester" name="functionality" required>
              <option value="softwere">Software</option>
              <option value="Hardware">Hardware</option>
              <option value="Lab maintenance">Lab maintenance</option>
              <option value="Lab maintenance">Lab timing</option>
              
            </select>
            <br>
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
            echo "<option value='$zid[0]' >$zid[0]</option>";
          }
          ?>
        </select>
      </div>
    


                <label for="description" style="margin-right: 150px;"> Description:</label><br>
                <textarea type= textarea id="w3review" name="des" rows="3" cols="20" required></textarea>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script>
     
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
        let name = document.getElementById("software").value;
        
        // let email = document.getElementById("email").value;

        if(name.length == 0 || !doesContainNumber(name)){
            let errorName = document.getElementById("errorName");
            errorName.innerHTML = "Please enter a valid subject";
            errorName.style.color = "red";
            document.getElementById('submit').disabled()=true;
            return false;
        }
        else{
        let errorName = document.getElementById("errorName");
        document.getElementById('submit').disabled()=false;
            errorName.innerHTML = "";  
            return true; 
    }
       
    }


    </script>
</body>

</html>