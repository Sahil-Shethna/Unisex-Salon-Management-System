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
              <?php 
            if (@$id=$_GET['id']== 1) {
               echo "<script>alert('OTP Send on Email Id');</script>";
                ?>
        <div class="login-form">
            <form action="password.php" method="POST">
                <input name="tab" class="sign-up"><label class="tab text-signup">OTP
                    &nbsp;<img src="img/iconfinder_Real_estate_131999.png" height="30" style="border-radius: 50%"> </label>
                <div class="group">
                    <input type="text" class="input" name="sendcode" placeholder="OTP" required="required">
                </div>
                 <div class="group">                 
                    <input type="submit" class="button" value="Account Verification" name="verification">
                </div>
                
            </form>
            </div>
            <?php }
            else {?>
                <input name="tab" class="sign-up"><label class="tab text-signup">Forget Password
                   &nbsp;<img src="img/iconfinder_lock_safe_password_2992204.png" height="30" style="border-radius: 50%"> </label>    
        <div class="login-form">       
                <form action="#" method="POST">
                <div class="group"> 
                    <input type="email" class="input" name="email" placeholder="Email ID" required="required">
                </div>
                <div class="group">
                    <input type="submit" class="button" value="Send Verification Code" name="code" >
                </div>
               
                </form>
            <?php 
                }?>
    </div>
                
</div>
    </div>
</body>
</html>
<?php 

if (isset($_POST['code'])) {
    include './sql_connection.php';
    $em=$_POST['email'];
    
    $check="select * from tbl_user where email='$em'";
    $f1= mysqli_query($con, $check);
    if ($f1) {
        if (mysqli_fetch_array($f1)) {
            header('Location: verification.php?email=$em');
        }
         else {
            echo "<script>alert('Invalid Email Id');</script>";
        }
    } else {
        echo "<script>alert('Error..!Please Try Again ');</script>";
    }
}
if (@$_GET['check']) {
    echo "<script>alert('Please Enter Valid Email ID');</script>";
}
?>

