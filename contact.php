<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Mailer = "smtp";

$mail->SMTPDebug  = 1;  
$mail->SMTPAuth   = TRUE;
$mail->SMTPSecure = "tls";
$mail->Port       = 587;
$mail->Host       = "tls://smtp.gmail.com";
$mail->Username   = "dougiefrancis@gmail.com";
$mail->Password   = "C2h6o123";

$name = $_POST["name"];
$email = $_POST["email"];
$number = $_POST["number"];
$message = $_POST["message"];

$mail->IsHTML(true);
$mail->AddAddress("dougiefrancis@gmail.com", "Doug");
$mail->SetFrom($email, $name);
$mail->AddReplyTo($email, $name);
$mail->Subject = "New Job Enquiry";
$content = "The job description is: $message <br> Contact them on: $number or email $email";

$mail->MsgHTML($content); 
if(!$mail->Send()) {
    echo '<meta http-equiv="refresh" content="0;url=error.html" />';
  var_dump($mail);
} else {
    echo '<meta http-equiv="refresh" content="0;url=thanks.html" />';
    exit;
}






?>