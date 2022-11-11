<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Student</title>
    <link rel="stylesheet" href="navstyle.css">
    <link rel="stylesheet" href="new_style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Karla&family=Roboto:ital@1&display=swap" rel="stylesheet">
</head>
<body>
<div class="navbar" style=" justify-content: left;">
        <div class="heading-logo" style="margin-left: 20px; margin-right: 34vw; ">
            <img src="logo_MPR.png" alt="" width="70" height="70" >
            <h1 style="margin-top: 15px;"> TimeDesk</h1>
        </div>
        <div class="navtabs" style="margin-top: 0;">
            <!-- <a href="" class="navbtn">About Us</a> -->
            <a href="login.php" class="navbtn">Logout</a>
            
        </div>
    </div>
    <div class="outermost" style="margin-top: 7vh;">
        <div class="information">
            <h3 id="welcometxt">Welcome C3</h3>
            <div id="text">
                Please fill the data correctly
            </div>
            <button id="btn1"><a href="display3.php" target="main">Check Form</a></button>
        </div>
        <div class="form">
            <form  class="add_st_form" id="new-student-form" method="POST">
            <div class="form-box">
                    <h3>Enter First Name:</h3>
                    <input type="text" placeholder="Enter name" id="new-student-fname" required name="f_student_name">
                </div>
                <div class="form-box">
                    <h3>Enter Last Name:</h3>
                    <input type="text" placeholder="Enter name" id="new-student-lname" required name="l_student_name">
                </div>
                <div class="form-box" >
                    <h3>Enter Roll Number:</h3>
                    <input type="number" placeholder="Enter Roll Number" id="new-student-rollno" required name="student_rollno">
                </div>
                <div class="form-box" id="last-form-box">
                    <h3>Enter E-mail ID:</h3>
                    <input type="email" placeholder="Enter Username" id="new-student-emailid" required name="student_emailid">
                </div>
                <div class="submit-form-box">
                    <button class="submit-btn" id="entry" name="submit">SUBMIT</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>

<?php


include 'connection.php';

//Inserting DATA In mySQL
session_start();

if(!isset($_SESSION['username'])){
    header('location:login.php');
}
if(isset($_POST['submit'])) //It is super global variable that is used to collect form data after submitting an HTML form with method = post
{
    $pfname = $_POST['f_student_name'];
    $plname = $_POST['l_student_name'];
    $prollno = $_POST['student_rollno'];
    $pemailid = $_POST['student_emailid'];

    $insertquery = "insert into studententry(fname,lname,rollno,email) values('$pfname','$plname','$prollno','$pemailid')";


    $res = mysqli_query($cond,$insertquery);
    

}
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer\src\Exception.php';
require 'phpmailer\src\PHPMailer.php';
require 'phpmailer\src\SMTP.php';

if(isset($_POST["submit"]))
{
    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'testuser0550@gmail.com';
    $mail->Password = 'xxrofytxcxxzruxz';

    $mail->setFrom('testuser0550@gmail.com');
    $mail->addAddress($_POST["student_emailid"]);

    $mail->isHTML(true);

    // $mail->Subject = $_POST["subject"];
    $mail->Subject = "Admission via TimeDesk";
    // $mail->Body = $_POST["msg"];
    $mail->Body = "You have been successfully added to the Attendence Report!";


    $mail->send();

    echo
    "
    <script>
    alert('Sent');
    document.location.href = 'new_attendence3.php';
    </script>
    ";
}

?>