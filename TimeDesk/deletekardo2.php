<?php
include 'connection.php';

$id = $_GET['idth'];

$deletequery = "delete from studententry2 where rollno = $id";
$query = mysqli_query($cond,$deletequery);

header('location: display2.php');
?>