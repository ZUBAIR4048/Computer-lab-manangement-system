<?php
$con = new mysqli("localhost", "root", "", "lab database",5501);

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connection failed: %s\n", mysqli_connect_error());
    exit();
}

?>