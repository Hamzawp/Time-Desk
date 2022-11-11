<?php

session_start();
header('location:login.php');

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
    $_SESSION['username'] = $name;  
    header('location:admin.php');
    
}
else{
    if ($name=="" && $pass==""){
    echo '<script>
    alert("Username and Password fields are empty");
    window.location.href-"login.php" </script›';
    }
    else if($name==""){
    echo '<script>
    alert ("Library Id field is empty"); window.location.href-"login.php";
    < script>';
    }
    else if ($pass==""){
    echo '<script>
    alert ("Password field is empty");
    window.location.href-"login.php";
    </script>';
    }
    else{
    sleep (1) ;
    echo '<script>
    alert ("Login failed. Invalid username or password");
    window.location.href-"login.php";
    </script›';
    }}
?>

