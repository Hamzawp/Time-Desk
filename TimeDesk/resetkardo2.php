<?php
include 'connection.php';
$sql = "UPDATE studententry2 SET current_status = '--'";
$res = mysqli_query($cond,$sql);
header('location: display2.php');
?>