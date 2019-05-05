<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';

$data[]= json_encode(data);
function sendMail(){
    $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'anwaarsociety17@gmail.com';                 // SMTP username
    $mail->Password = 'anwaar2017';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('anwaarsociety17@gmail.com', 'Anwaar Society');
    $mail->addAddress('nerdben1@gmail.com', 'Joe User');     // Add a recipient
   // $mail->addAddress('ellen@example.com');               // Name is optional
    $mail->addReplyTo('nerdben1@gmail.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //Attachments
   // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
   // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Here is the subject';//le sujet du message
    $mail->Body    = '<div style="background-color:green;"><img src="logo.PNG" align="left;"><h3 align="center";style="display:inline;">Anwaar</h3></div>';
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
}


sendmail();

echo "<script>".$data['nom']."</script>";


