<?php

      if (isset($_POST['signup'])) {
        include 'sql_connection.php';
                $name=$_POST['name'];
                $pass= mysqli_real_escape_string($con,md5(trim($_POST['password'])));
                $email=$_POST['email'];
                $gender=$_POST['gender'];
                $contactno=$_POST['contactno'];
      $address=$_POST['address'];
      
      }
      
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
    $mail->setFrom('16mscit099@gmail.com', 'sahil Shethna');
    $mail->addAddress($_POST['email'], 'Bhoomi');     // Add a recipient
//    $mail->addReplyTo('info@example.com', 'Information');
//    $mail->addCC('cc@example.com');
//    $mail->addBCC('bcc@example.com');

    //Attachments
//    $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    $mail->addAttachment('download.png', 'From Mr_Shethna');    // Optional name
        $num= rand(999, 9999);
            //Content
    //$mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Verification code for Unisex Salon';
    $mail->Body    = "<b>Verification code:"."$num";
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo "<script>alert('Otp Send On Email Id')</script>";
    $a=1;
  
    
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
    
}?>
 <?php 
                if ($a= 1) {?>
</html>
<html lang="en">
<head>
    <title>The World Famous Salon </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link href="https://fonts.googleapis.com/css?family=Gudea" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
</head>
<body>
<div class="login-wrap">
    <div class="login-html">
        <div class="col-md-12 text-center">
            <a href="home.php">
                <img src="img/download.png" style="width: 170px;border-radius: 50%">
            </a>
        </div>
        <div class="col-sm-3 col-md-2 columns">
           
        </div>
        </br>
                  <div class="login-form">
                      <form action="reg.php" method="POST">
                    <input name="tab" class="sign-up"><label class="tab text-signup">OTP
                        &nbsp;<img src="img/iconfinder_Real_estate_131999.png" height="30" style="border-radius: 50%"> </label>
                    <div class="group">
                        <input type="hidden" name="code" value="<?php echo "$num";?>">
                        <input type="hidden" name="name" value="<?php echo "$name";?>">
                        <input type="hidden" name="password" value="<?php echo "$pass";?>">
                        <input type="hidden" name="email" value="<?php echo "$email";?>">
                        <input type="hidden" name="gender" value="<?php echo "$gender";?>">
                        <input type="hidden" name="contactno" value="<?php echo "$contactno";?>">
                        <input type="hidden" name="address" value="<?php echo "$address";?>">
                        
                        <input type="text" class="input" name="sendcode" placeholder="OTP" required="required">
                    </div>
                     <div class="group">                 
                        <input type="submit" class="button" value="Account Verification" name="verification">
                    </div>

                </form>
                </div>
            
                
</div>
    </div>
</body>
</html>
<?php }?>
