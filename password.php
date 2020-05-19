<?php 
if(isset($_POST['submit'])) {
    session_start();
   include './sql_connection.php';
        $id=$_SESSION['email'];
        $pass= mysqli_real_escape_string($con, md5(trim($_POST['password'])));
        $query="update Tbl_User set password='$pass' where email='$id'";
        $fire= mysqli_query($con, $query);
        if ($fire) {
          header("Location:login.php");
               
        }
            else {
                echo "invelid username or password";
            }
        }
        
session_start();
$code=$_SESSION['otp'];
if ($code==$_POST['sendcode']) {
?>
</html>
<html lang="en">
<head>
    <title>The World Famous Salon </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link href="https://fonts.googleapis.com/css?family=Gudea" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
     <script>
                  
                            function check()
                            {
                                    if (frm.password.value != frm.conformpassword.value) {
                                     alert("Password dose not match");
                                     return false;
                                 }
                                    else if (true) {
                                    var a = frm.password.value; 
                                   
                                     Check = /[0-9]/;  
                                  if(!Check.test(a)) {  
                                   alert("Error: password must contain at least one number (0-9),one lowercase letter (a-z),one uppercase letter (A-Z)!"); 
                                    return false;  
                                  }  
                                  Check = /[a-z]/;  
                                  if(!Check.test(a)) {  
                                   alert("Error: password must contain at least one number (0-9),one lowercase letter (a-z),one uppercase letter (A-Z)!"); 
                                    return false;  
                                  }  
                                  Check = /[A-Z]/;  
                                  if(!Check.test(a)) {  
                                   alert("Error: password must contain at least one number (0-9),one lowercase letter (a-z),one uppercase letter (A-Z)!");  
                                   return false;  
                                  }  
                                }
                                return true;
                            }
                    </script>
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
            <form action="#" method="POST" name="frm">
                <input name="tab" class="sign-up"><label class="tab text-signup">Enter Password
                    &nbsp;<img src="img/iconfinder_Real_estate_131999.png" height="30" style="border-radius: 50%"> </label>
                <div class="group">
                    <input type="password" class="input" name="password" placeholder="password" required="required"  pattern="(?=^.{6,}$)(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s)[0-9a-zA-Z!@#$%^&*()]*$" title="1 Upper Case ,1 Lower Case , 1 digit and 6 characters minimum">
                </div>
                <div class="group">
                    <input type="password" class="input" name="conformpassword" placeholder="conform password" required="required"  pattern="(?=^.{6,}$)(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s)[0-9a-zA-Z!@#$%^&*()]*$" title="1 Upper Case ,1 Lower Case , 1 digit and 6 characters minimum">
                </div>
                 <div class="group">                 
                     <input type="submit" class="button" value="Submit" name="submit" onclick="return check()">
                </div>
                
            </form>
           
           
    </div>
                
</div>
    </div>
</body>
</html>
<?php


}
 else {
    echo "Invalid OTP";
}
?>
<a href="forgetpassword.php"><input type="submit" value="Try Again" /></a>