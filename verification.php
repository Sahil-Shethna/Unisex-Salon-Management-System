<?php
$emailid="16mscit113@gmail.com";
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-master/PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/PHPMailer-master/src/SMTP.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
  //  $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = '16mscit099@gmail.com';                 // SMTP username
    $mail->Password = 'mscit099';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('16mscit099@gmail.com', 'Sahil Shethna');
    $mail->addAddress($emailid, 'Bhoomi');     // Add a recipient
//    $mail->addReplyTo('info@example.com', 'Information');
//    $mail->addCC('cc@example.com');
//    $mail->addBCC('bcc@example.com');

    //Attachments
//    $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    $mail->addAttachment('download.png', 'From Mr_Shethna');    // Optional name
        $num= rand(999, 9999);
        session_start();
        $_SESSION['otp']=$num;
        $_SESSION['email']=$emailid;
    //Content
    //$mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Verification code for Unisex Salon';
    $mail->Body    = "<b>Verification code:"."$num";
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo "Message has been sent $emailid";
    header("Location: forgetpassword.php?id=1");
    
    
} catch (Exception $e) {
    echo "Message $emailid";
//header('Location: forgetpassword.php?check=1');
}