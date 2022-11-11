<?php
include 'connection.php';
$sql = "UPDATE studententry1 SET current_status = '--'";
$res = mysqli_query($cond,$sql);
header('location: display1.php');
?>