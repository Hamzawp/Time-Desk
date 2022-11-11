<?php
include 'connection.php';

$id = $_GET['idth'];

$deletequery = "delete from studententry where rollno = $id";
$query = mysqli_query($cond,$deletequery);

header('location: display3.php');
?>