<?php

session_start();

$con = mysqli_connect('localhost', 'root');
if($con)
{
    echo "connection successful";
}
else
{
    echo "no connection";
}
mysqli_select_db($con, 'sessionpractical');

$name = $_POST['user'];
$pass = $_POST['password'];

$q = " select * from login WHERE name = '$name' and password = '$pass'";
$result = mysqli_query($con, $q);
$num = mysqli_num_rows($result);

if($num == 1)
{
    echo "Duplicate data";
}
else
{
    $qy = "insert into login(name, password) values('$name', '$pass')";
    mysqli_query($con, $qy);
}
?>