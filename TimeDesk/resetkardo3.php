<?php
include 'connection.php';
$sql = "UPDATE studententry SET current_status = '--'";
$res = mysqli_query($cond,$sql);
header('location: display3.php');
?>