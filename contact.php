<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';
require_once realpath(__DIR__ . "/vendor/autoload.php");

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

$username = getenv("GMAIL_USERNAME");
$password = getenv("GMAIL_PASSWORD");

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Mailer = "smtp";

$mail->SMTPDebug  = 1;  
$mail->SMTPAuth   = TRUE;
$mail->SMTPSecure = "tls";
$mail->Port       = 587;
$mail->Host       = "tls://smtp.gmail.com";
$mail->Username   = $username;
$mail->Password   = $password;

$name = $_POST["name"];
$email = $_POST["email"];
$number = $_POST["number"];
$message = $_POST["message"];

$mail->IsHTML(true);
$mail->AddAddress($username, "Richard");
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