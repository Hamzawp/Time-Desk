<?php

$username = 'root'; //standard
$password = ''; //standard
$server = 'localhost';
$db = 'timedesk';


$cond = mysqli_connect($server, $username, $password, $db); //Variable cond for checking connection

if($cond) // #Checking
   { //echo "Connection Successful";
    ?>
    <!-- <script>
        alert("Connection Successful!");
</script>        -->
   
    <?php
   }
else
    echo "Connection was reset";
?>