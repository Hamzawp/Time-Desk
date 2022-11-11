<?php

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
    document.location.href = 'new_attendence1.php';
    </script>
    ";
}

?>