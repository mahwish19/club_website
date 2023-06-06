<?php 
$email = $_POST['email'];
$name = $_POST['name'];

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
$mail = new PHPMailer(true);
// code to send email

// Server settings
//$mail->SMTPDebug = 2;                      // Enable verbose debug output
$mail->isSMTP();                                            // Send using SMTP
$mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
$mail->SMTPAuth   = true;                                   // Enable SMTP authentication
$mail->Username   = 'rameenekram2002@gmail.com';                     // SMTP username
$mail->Password   = 'negtohrtxmpndoro';                               // SMTP password
$mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
$mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
// Recipients
$mail->setFrom('rameenekram2002@gmail.com', 'Codewizard');
$mail->addAddress($email);     // Add a recipient
$mail->addReplyTo('info@codewizard.com', 'Information');
// $mail->addCC('cc@example.com');
// $mail->addBCC('bcc@example.com');

// Content
$mail->isHTML(true);                                  // Set email format to HTML
$mail->Subject = 'Confirmation of your form submission';
$mail->Body    = 'Dear '.$name.',
<br><br>
Thank you for submitting your form. We have received your responses, and we are glad to have you as a participant. We appreciate your interest in our program/organization/event. 
<br><br>
Please keep this email for your records. If you have any questions or concerns about the program/organization/event, please do not hesitate to reach out to us at codewizard@gmail.com
<br><br>
Thank you again for your participation.
<br><br>
Best regards,
<br><br>
Codewizard';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if($mail->send()){
    //echo 'Mail has been sent';
    header('location: /codewizard/thankyou.php');
} else {
    echo 'Mail not sent';
}

//header('location: /thankyou.php');

?>