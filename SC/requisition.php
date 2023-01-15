<!--Jaria batool
    04072013018
    BCSC 5th
    G9_CS_2
    BUS REQUISITION WEB PAGE
-->
<!--
<?php
include_once "database.php";

$destination = $time = $date= "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
  $destination = $_POST["dest"];
  $time = $_POST["time"];
  $date = $_POST["date"];
}
?>-->
<!DOCTYPE html>
<html>
    <head>
        <title>Bus requisition</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--Javascript-->
        <script>
            function doesContainNumber(name){
        for(i = 0; i<name.length; i++){
            if(!(( name[i] >= 'a' && name[i] <= 'z') || (name[i] >= 'A' && name[i] <= 'Z'))){
                return false;
            }
            
        }
        
        return true;
        }
            function validate(){
            let name = document.getElementById("dest").value;
        
            if(name.length == 0 || !doesContainNumber(name)){
                let errorName = document.getElementById("errorName");
                errorName.innerHTML = "Please enter a valid destination";
                errorName.style.color = "red";
                }
            }
            </script>
            <!--STYLE-->
        <style>
            body{
                justify-content: center;
                background-image: url('https://img.freepik.com/premium-photo/highway-road-dry-grass-atacama-desert-chile-with-yellow-blue-landscape-south-america_124067-142.jpg?w=2000');
                background-repeat:no-repeat;
                background-size: cover;
                background-attachment: fixed;
                opacity: 1;
            }
            h1{
                color: midnightblue;
            }
            h2{
                color:#fff;
                text-align: center;
            }
            #tble{
                align-items: center;
                text-align: left;
                font-size: 30px;
                font-size: x-large;
                color: midnightblue;
                border: 3px solid;
                width: 100%;
                border-collapse: collapse;
                padding: 15px;
                font-style:italic;
            }
            th, td {
                text-align: left;
                padding: 8px;
                color: #fff;
            }  
           tr:nth-child(even) {
               background-color:rgb(88, 121, 170);
               color:#fff;
            }
            tr:nth-child(odd) {
               background-color: midnightblue;
               color:#fff;
            }
            div.menu{
                background-color:rgb(18, 18, 88);
                position: relative;
            }
            div.menu a{
                color: beige;
                display: inline-block;
                text-align: center;
                padding: 15px 35px 15px 40px;
                text-decoration: none;
            }
            div.menu a:hover {
                background-color:cornflowerblue;
            }
            #req{
                background-color: rgb(88, 121, 170);
                opacity: 0.9;
                border:10px;
                border-color: black;
                padding: 20px 30px 20px 40px;
                position: absolute;
                margin-right: 50px;
                margin-left: 200px;
                margin-top: 70px;
            }
            * {
                box-sizing: border-box;
            }
            .column {
               float: left;
               width: 50%;
               padding: 10px;
               height: 400px;
            }
            .row:after {
                content: "";
                display: table;
                clear: both;
}
            #foot1{
                width: 25%;
                float: left;
                margin-top: 5%;
                height: 200px;
                color: #fff;
            }
    
            #foot2{
               margin-top: 5%;
               width: 25%;
               float: right;
               height: 200px;
               color: #fff;
               border: none;
            }
            #left
            {
       
               width:20%;
            }
            #left p{
               font-size: 24px;
               color:white;
               margin-top: 70%;
            }
            #right{
               margin-top: 5%;
               width: 30%;
               height: 200px;
               color: #fff;
               border: none;
            }
            #footerdiv
            {
       
              display: flex;
            }
           #link
           {
              color:white;
           }
          #footer
           {
              height: 10%;
              background-color: rgb(18, 18, 88);
           }
           .des{
            background-image: url('https://www.graana.com/blog/wp-content/uploads/2022/04/image_2022-04-12_154400917-1024x573.jpg');
            height: 500px;
            width: auto;
            background-repeat: no-repeat;
           }
           .faisal{
            background-image: url('https://mosqpedia.org/img/cache/thumbnail/E7zPkew893EjHLpgd8S8lXYeLFWZprVakCqKBTFl');
            height: 500px;
            width: auto;
            background-repeat: no-repeat;
           }
           .lal{
            background-image: url('https://i.tribune.com.pk/media/images/1213426-LalaMasjidx-1477671335/1213426-LalaMasjidx-1477671335.jpg');
            height: 500px;
            width: auto;
            background-repeat: no-repeat;
           }
           .lok{
            background-image: url('https://www.thenews.com.pk/assets/uploads/akhbar/2020-07-23/690748_051219_updates.jpg');
            height: 500px;
            width: auto;
            background-repeat: no-repeat;
           }
           .monu{
            background-image: url('https://www.youlinmagazine.com/articles/a-look-into-pakistan-monument.jpg');
            height: 500px;
            width: auto;
            background-repeat: no-repeat;
           }
           .joy{
            background-image: url('https://i0.wp.com/1.bp.blogspot.com/-_SY3OHAVLKc/YH8HiEcWK6I/AAAAAAAAqPs/-odhw-O_HsY01Gi1LnAABKDqMeId7l3XACLcBGAsYHQ/w640-h480/IMG_0212.JPG?w=900&ssl=1');
            height: 500px;
            width: auto;
            background-repeat: no-repeat;
           }
           #req{
            width:300px;
            height: 200px;
           }
           #tablee{
            display: flex;
           }
        </style>
    </head>
    <!--BODY-->
    <body>
        <br>
        <p>
            <H1>
                <img src="logo.bmp" width="80px" height="80px">
                Le Bus
            </H1>
            <div class="menu">
                <a href="">Home</a>
                <a href="">Schedule</a>
                <a href="">Seat reservation</a>
                <a href="requisition.html">Bus requisition</a>
                <a href="Track bus.html">Track bus</a>
                <a href="">Help</a>
            </div>
        </p>
        <div class="row"></div>
        <div class="column">
            <!--form-->
        <form id="req" method="post" action="reqForm.php">
            <label for="dest"> <b>Destination:</b> </label><br>
            <input type="text" id="dest" name="fdes" onchange="validate()">
            <br>
            <label id="errorName" ></label>
            <label for="time"><b>Time</b></label><br>
            <input type="time" id="time"  name="ftime" ><br>
             <label for="date"> <b> Date:</b></label><br>
            <input type="date" id="date" name="fdate" min="2023-01-01" max="2023-01-31" > <br><br>
            <button id="Request" name="Request">  <b>Request</b> </button>
        </form>
        </div>
        <div class="column">
            <!--REQUISITION TO BE-->
        <h2 style="color: midnightblue;">Bus requisition schedule:</h2>
        <table id="tble" style="border-collapse: collapse;">
            <th style="border-collapse: collapse;" height="40px">Bus number</th>
            <th style="border-collapse: collapse;" height="40px">Date</th>
            <th style="border-collapse: collapse;" height="40px">Time</th>
            <th style="border-collapse: collapse;" height="40px">Location</th>
            <!--<tr>
                <td height="40px">12</td>
                <td height="40px">20/12/2022</td>
                <td height="40px">Lake view park</td>
                <td height="40px">12:00 pm</td>
            </tr>
            <tr>
                <td height="40px">10</td>
                <td height="40px">22/12/2022</td>
                <td height="40px">Pipeline track</td>
                <td height="40px">7:00 am</td>
            </tr><tr>
                <td height="40px">11</td>
                <td height="40px">23/12/2022</td>
                <td height="40px">Murree</td>
                <td height="40px">8:00 am</td>
            </tr><tr>
                <td height="40px">9</td>
                <td height="40px">29/12/2022</td>
                <td height="40px">Pipeline track</td>
                <td height="40px">6:00 am</td>
            </tr>
            <tr>
                <td height="40px">10</td>
                <td height="40px">19/12/2022</td>
                <td height="40px">Murree</td>
                <td height="40px">7:00 am</td>
            </tr><tr>
                <td height="40px">10</td>
                <td height="40px">20/12/2022</td>
                <td height="40px">Pakistan monument</td>
                <td height="40px">3:00 pm</td>
            </tr>-->
            
            <!--Fetching table from database-->
            <?php
                //database connection
                $con = new mysqli("localhost", "root", "", "bus management system",3306);
               
                $sql = " SELECT * FROM requisition ";
                $result = $con->query($sql);
                //$mysqli->close();
                 // LOOP TILL END OF DATA
                while($rows=$result->fetch_assoc())
                {
            ?>
            <tr>
                <!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->
                <td><?php echo $rows['Busnumber'];?></td>
                <td><?php echo $rows['Date'];?></td>
                <td><?php echo $rows['Time'];?></td>
                <td><?php echo $rows['Location'];?></td>
            </tr>
            <?php
                }
            ?>
        </table>
        </div>
        </div>
        <br><br><br><br><br><br><br><br>
        <br><br><br><br><br><br><br><br>
        <!--MOST FREQUENT DESTINATIONS-->
        <br><br>
        <h2 style="color: midnightblue;">Most frequent bus requisition destinations:</h2>
        <table id="tablee">
            <tr>
            <td width="450px"><div id="ReqDes"></div>
            <a class="des" href="https://goo.gl/maps/CDWHjdVbsCFKVgpB8" target="_blank">
                <div class="des"></div>
            </a>
            <h2>Lake view park</h2>
            </div></td>
            <td width="450px"><div id="joy">
            <a class="joy" href="https://goo.gl/maps/q3j9nTw3z4wo9VBW7" target="_blank">
                <div class="joy"></div>  
            </a>
            <h2>Joyland Rawalpindi</h2>
            </div></td>
            <td width="450px">
                <div id="lok">
                <a class="lok" href="https://goo.gl/maps/7Cdeotmw95AT2Lfe8" target="_blank">
                    <div class="lok"></div>
                </a>
                <h2>Lok virsa museum</h2>
                </div>
            </td>
            </tr>
            <tr>
                <td width="450px"><div id="monu"></div>
                <a class="monu" href="https://goo.gl/maps/UCLgck3oJDKxk6hP6" target="_blank">
                    <div class="monu"></div>
                </a>
                <h2>Pakistan monument</h2>
                </div></td>
                <td width="450px"><div id="lal">
                <a class="lal" href="https://goo.gl/maps/wTj1z1UAygC6Mx5A9" target="_blank">
                    <div class="lal"></div>  
                </a>
                <h2>Lal masjid</h2>
                </div></td>
                <td width="450px">
                    <div id="faisal">
                    <a class="faisal" href="https://goo.gl/maps/jg57QYon4yLHyYjr5" target="_blank">
                        <div class="faisal"></div>
                    </a>
                    <h2>Faisal mosque</h2>
                    </div>
                </td>
                </tr>
        </table>
        <br><br><br>
        <!--View along with database-->
        
        <!--FOOTER-->
        <br><br><br>
<div id="footer">
    <div id="footerdiv">
        <div id="left">
            <p>
                Le Bus
            </p>
        </div>
            <div id="foot1">
                <li><a href="#" id="link">Home</a></li>
                <li><a href="#" id="link">Schdeule</a></li>
                <li><a href="#" id="link">Seat reservation</a></li>
                <li><a href="#" id="link">Request bus requisition</a></li>
                <li><a href="#" id="link">Help desk</a></li>
                <br><br><br>
           
            </div>
            <div id="foot2">
                <li><a href="#" id="link">T & Cs</a></li>
                <li><a href="#" id="link">Privacy</a></li>
                <li><a href="#" id="link">Community</a></li>
                <li><a href="#" id="link">Mobile:+923303487342</a></li>
                <li><a href="#" id="link">Email:LeBus@gmail.com</a></li>
            </div>
            <!--FORM-->
            <div id="right">
            <form name="Newsletter" method="post" style="color: #fff;">
                Sign up </br>
                <input type="text" placeholder="E-mail" required>
                <input type="button" value="Sign up">
                
            </form>
           </div>    
    </div>
    <p style="color:white;font-size: 16px;position: relative;left:50%;">All rights reserved.</p>
    </div>
    </body>
</html>