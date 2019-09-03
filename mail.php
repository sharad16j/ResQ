<?php

   include "connection.php";   
   session_start();
   $rollno = $_SESSION['roll_no'];
   $fetch=mysqli_query($connection,"select * from std_detail where std_rollno='$rollno' ");
   while($res=mysqli_fetch_assoc($fetch)){
      $email=$res['std_email'];
   }

//PHPMailer\PHPMailer\
   require 'src/PHPMailer.php';
   require 'src/SMTP.php';
   $mail = new PHPMailer\PHPMailer\PHPMailer(true);
    $mail->IsSMTP(); // enable SMTP

    $mail->SMTPAuth = true; // authentication enabled
    $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
    $mail->Host = "ssl://smtp.gmail.com";
    $mail->Port = 465; // or 587
    // $mail->IsHTML(true);
    $mail->Username = "emailr556@gmail.com";
    $mail->Password = "8777385365";
    $mail->SetFrom("emailr556@gmail.com");
    $mail->Subject = "Test";
    $mail->Body = "hello";
    $mail->AddAddress($email);
    $mail->addAttachment($rollno.'.pdf' );
     if(!$mail->Send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
     } else {
        echo "Message has been sent";
        header("Location: Admin.php");
     }
?>
