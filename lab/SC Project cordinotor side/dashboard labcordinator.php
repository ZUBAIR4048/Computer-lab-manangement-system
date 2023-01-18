<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>HOME page</title>
    <link rel="shortcut icon" href="favicon.ico">
</head>
<body>
    <style>
        * {c
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

body
        {
            background: url('background1.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
        }
.dropbtn 
{
  background-color: white;
  color: green;
  padding: 5px;
  font-size: 18px;
  border: black;
  
}

.dropdown 
{
  position: relative;
  display: inline-block;
  align-items:"center";
    margin-left: 150px;
    size: 5px;
    border: black;
}
.a
{

}

.dropdown-content 
{
  display: none;
  position: absolute;
  background-color:white;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {
    display: block;
    

}

.dropdown:hover .dropbtn {background-color: white;}
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
<table border="0"  bgcolor="black" align="center" width="100%" padding="100px">
        <table cellpadding="10" color="black" align="center" width="100%" cellspacing="0%">
            <h1 style="text-align: center;">WELCOME TO LAB MANAGEMENT SYSTEM for LAB CORDINATOR
            </h1> 
        </table> 
        <br>  
    <table border="0" width="100%" padding="90px" >
        <tr>
            <td>
                <button align="center" style="margin-left: 150px;"  background-color="white "color= "green;"><a target="_blank" href="view installation requests.php"><font size="5" align="center"> View  Softwere Installation Request</font></a></button><br><br>
            </td>
            <td>
                <button align="center"style="background-color: white" ;><a target="_blank" href="view complaints.php"><font size="5" align="center">view Complaint</font></a></button><br><br>
            </td>
            
        </tr>
        <tr>
            <td><div class="dropdown">
                <button class="dropbtn">Computer details</button>
                <div class="dropdown-content">
                  <a target="_blank" href="view hardwere details.html">hardwere details</a>
                  <a target="_blank" href="view softwere details.html">softwere details</a>
                  
                </div>
            
                
                <!--<button align="center" style="margin-left: 150px;"><a target="_blank" href="view computer details .html"><font size="5" align="center"> View Computer details </font></a></button><br><br>
                --> </td>
                
           
           
            </td>
            <td>
                  
               <button align="center" style="background-color:white;" font><a target="_blank" href="view resolve complaints .html"><font size="5" align="center">View Resolved Complaints</font></a></button><br><br>
            </td>
        </tr>

        <tr>
            <td>
               <!--  <button align="center" style="margin-left: 150px;"><a target="_blank" href="view login enteries.html"><font size="5" align="center"> View Login enteries </font></a></button><br><br>
            </td>-->
            <td>
                
                <button align="center" style="background-color:white; ><a target="_blank" > <a href="view login enteries.html"><font size="5" align="center">View Login enteries</font></a></button><br><br>
            </td>
        --><br>
        <td>
            


        </tr>
        <tr>
        </td>
         <td>
             <div class="dropdown">
             <button class="dropbtn">Hardwere</button>
             <div class="dropdown-content">
               <a target="_blank" href="inserthardwereform.php">Insert Hardwere</a>
               <a target="_blank" href="deletehardwere.html">Delete Hardwere</a>
               <a target="_blank" href="updatehardwere.html">Update Hardwere</a>
              
             </div>
         
             
             <!--<button align="center" style="margin-left: 150px;"><a target="_blank" href="view computer details .html"><font size="5" align="center"> View Computer details </font></a></button><br><br>
             --></td>
             
        
        
         </td>

         <td>
             <div class="a">
             <button class="dropbtn" style="margin-left:10px;">Softwere</button>
             <div class="dropdown-content">
               <a target="_blank" href="insertsoftwere.html">Insert Softwere</a>
               <a target="_blank" href="deletesoftwere.html">Delete Softwere</a>
               <a target="_blank" href="updatesoftwere.html">Update Softwere</a>
              
             </div>
         
             
             <!--<button align="center" style="margin-left: 150px;"><a target="_blank" href="view computer details .html"><font size="5" align="center"> View Computer details </font></a></button><br><br>
             --> </td>
             
        
        
         </td>

         
         <td>
            <div class="dropdown">
            <button class="dropbtn">logins Enteries</button>
            <div class="dropdown-content">
              <a target="_blank" href="insertsoftwere.html">Insert login Entry</a>
              <a target="_blank" href="deletesoftwere.html">Delete login Entry</a>
              <a target="_blank" href="updatesoftwere.html">Update login Entry</a>
             
            </div>
        
            
            <!--<button align="center" style="margin-left: 150px;"><a target="_blank" href="view computer details .html"><font size="5" align="center"> View Computer details </font></a></button><br><br>
            --> </td>
            
       
       
        </td>

         
         
        </tr>


    </table>
</table>
<br>
<br>
<br>
<br>
<br>
<br>




<footer>
    <div class="row">
    <div class="column">
      <br>
      <button class="footer-btn"><a target="_blank" href="dashboard labcordinator.html">home </a></button>
        <br><br>
      <button class="footer-btn"><a href="contact.html">Contact</a></button><br><br>
      <button class="footer-btn"><a href="conditions.html">About</a></button><br>
    </div>     
    <div class="column">
      <h3 style="color: white;"> Computer science department <br> Quaid e Azam university, Islamabad, Pakistan</h3>
      <h3 style="color: white;">068-570234</h3>
    </div>      
    </div>
</footer>      

</body>
</html>