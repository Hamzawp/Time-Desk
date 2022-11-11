<?php

$username = 'root'; //standard
$password = ''; //standard
$server = 'localhost';
$db = 'sessionpractical';


$condn = mysqli_connect($server, $username, $password, $db); //Variable cond for checking connection

if($condn) // #Checking
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