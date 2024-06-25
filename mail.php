<?php

echo "<html><body>";
        echo "<script type='text/javascript'>window.location.href = 'index.php#myform';</script>";
        echo "</body></html>";

$nome=$_POST["nome"];
$email=$_POST["email"];
$mensagem=$_POST["mensagem"];

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';

$phpmailer = new PHPMailer();

$phpmailer = new PHPMailer();
$phpmailer->isSMTP();
$phpmailer->Host = 'sandbox.smtp.mailtrap.io';
$phpmailer->SMTPAuth = true;
$phpmailer->Port = 2525;
$phpmailer->Username = '94b3bab2b544ae';
$phpmailer->Password = 'd7cbe37d62f3f7';

$phpmailer->setFrom('mailtrap@demomailtrap.com', 'João Paulo');
$phpmailer->addAddress("$email", $nome);
$phpmailer->Subject = $nome;


$phpmailer->isHTML(true);
$phpmailer->Body = "<html><strong>nome : </strong>  $nome <br> <strong> email:  </strong>  $email  <br> <strong> mensagem:</strong>  $mensagem </html>";
$phpmailer-> AltBody = 'Hi there, we are happy to confirm your booking. Please check the document in the attachment.';

$attachmentPath = './confirmations/yourbooking.pdf';
if (file_exists($attachmentPath)) {
    $mail->addAttachment($attachmentPath, 'yourbooking.pdf');
}

// Send the email
if(!$phpmailer->send()){
    echo 'Message could not be sent. Mailer Error: ' . $phpmailer->ErrorInfo;
} else {
    echo 'Message has been sent';
}