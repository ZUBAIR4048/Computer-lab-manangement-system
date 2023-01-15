
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>login page</title>
    <link rel="shortcut icon" href="favicon.ico">
    <script>       
    </script>
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
                <table color="#FF0000">
                    <section>
                    <div class="page-header">
                        <div class="container" text-align="center" font-size="50%">
                            <h1 style="margin-left: 150px;">Department of Computer Sciences</h1>
                            <p style="margin-left: 200px;">Quaid-i-Azam University, Islamabad</p>
                        </div>
                    </div>
                </section>
                 </table>
             </td>
        </tr>
     </table>	
<div class="box" align="center">
<div>
    <h1>
        LAB MANAGEMENT SYSTEM
    </h1>
    <h2>
        LOGIN 
    </h2>
    </div>
    <form method="post"  id="form">
    <div class="login" >
        <label for="user"> Username:</label>
        <input type="text" placeholder="LOGIN:" id="user" name="user" onchange="validateUser();"  required 
        minlength="11" maxlength="11"><br>
        <label id="errorUser"></label>
          
    </div>
    <br>
     <div>
        <label for="pass"> Password:</label>    
         <input type="password" required placeholder="PASSWORD:" id="pass" name="pass"><br>
         
    </div>
   <br>
   <!--<div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="inlineFormCheck">
      <label class="form-check-label" for="inlineFormCheck">
        Remember me
      </label>
    </div>
  </div>-->
    <div class="naming">
        <button value="submit" id="sub" style="padding: 15; padding-block: 15;"><a href="dasboard.html" onclick="validateUser()"></a><b>submit</b></button>
    </div>
</form>
<!--<br><br>
    <div class="other">
        <br><br>
        <button><a href="#" >Admministrator </a></button><br>
        <button><a href="#" >Other User </a></button>
    </div>-->
</div>
<script>
    function validateUser(){
        let namee;
        namee=document.getElementById("user").value;
        for(i=0; i<namee.length; i++){
            if((namee[i] >= 'a' && namee[i] <= 'z') && (namee[i] >= 'A' && namee[i] <= 'Z')) {
                document.getElementById("errorUser").innerHTML="Invalid user.";
                document.getElementById("errorUser").style.color="red";
                document.getElementById("sub").innerHTML=alert("please enter valid username");               
                return false;
            }
        }      
        if(namee.length==11){
            document.getElementById("errorUser").innerHTML="";
            return true;
        }
        else
        {
            document.getElementById("errorUser").innerHTML="Invalid user.";
            document.getElementById("errorUser").style.color="red";
            return false;
        }
        return true;
    }
</script>
</body>
</html>
 