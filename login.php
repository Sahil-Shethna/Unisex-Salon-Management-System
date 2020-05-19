<!DOCTYPE html>
<html lang="en">
<head>
    <title>Stunning Login Form </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link href="https://fonts.googleapis.com/css?family=Gudea" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
</head>
<body>
<?php
session_start();
if(!isset($_SESSION['is_customer'])) {
    if(!isset($_SESSION['is_admin'])){
?>
<div class="login-wrap">
    <div class="login-html">
        <div class="col-md-12 text-center">
            <a href="home.php">
                <img src="img/download.png" style="width: 130px;border-radius: 50%">
            </a>
        </div>
        <div class="col-sm-3 col-md-2 columns">
            <h2 class="text-white top-font right">Login to Continue</h2>
        </div>
        </br>

        <input id="tab-1" type="radio" name="tab" class="sign-in " checked><label for="tab-1" class="tab ">Sign In
        &nbsp;<img src="img/loader_ulamama_1.gif" height="30" style="border-radius: 50%"></label>
        <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab text-signup">Sign Up
        &nbsp;<img src="img/loader_ulamama.gif" height="30" style="border-radius: 50%"> </label>

        <div class="login-form">
            <div class="sign-in-htm">
                <form action="login_sql.php" method="POST">
                <div class="group"> 
                    <input type="email" class="input" name="email" placeholder="Email ID" required="required">
                </div>
                <div class="group">
                    <input type="password" class="input" name="password" placeholder="Password" required="required">
                </div>
                <div class="group">
                    <input id="check" type="checkbox" class="check" checked>
                    <label for="check"><span class="icon"></span> Keep me Signed in</label>
                </div>
                <div class="group">
                    <input type="submit" class="button" value="Sign In" name="login">
                </div>
                <div class="hr"></div>
                <div class="foot-lnk">
                    <a href="forgetpassword.php">Forgot Password?</a>
                </div>
                <h5 class="text-center text-white">Stunning Login Form Design by <a
                        href="#">Sahil And Bhoomi</a></h5>
                </form>
            </div>
            
            <form name="frm" action="signup_sql.php" method="POST">
              
            <div class="sign-up-htm">
                <div class="group">
                    <label for="user" class="label">Username</label>
                    <input id="user" type="text" class="input" name="name" required="required">
                </div>
                <div class="group">
                    <label for="pass" class="label">Password</label>
                    <input type="password" class="input" data-type="password" name="password" required="required"  pattern="(?=^.{6,}$)(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s)[0-9a-zA-Z!@#$%^&*()]*$" title="1 Upper Case ,1 Lower Case , 1 digit and 6 characters minimum">
                </div>
                <div class="group">
                    <label for="pass" class="label">Repeat Password</label>
                    <input type="password" class="input" data-type="password" name="password1"  pattern="(?=^.{8,}$)(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s)[0-9a-zA-Z!@#$%^&*()]*$" title="1 Upper Case ,1 Lower Case , 1 digit and 8 characters minimum">
                </div>
                <div class="group">
                    <label for="pass" class="label">Email Address</label>
                    <input id="pass" type="text" class="input" name="email" required="required">
                </div>
                
                <div class="group">
                    <label for="pass" class="label">Gender</label>
                    <input  type="radio" name="gender" value="Male" checked="checked"><label style="color: white">Male</label>
                    <input  type="radio" name="gender" value="Female"><label style="color: white">Female</label>
                </div>
                <div class="group">
                    <label for="pass" class="label">Contact No</label>
                    <input id="pass" type="text" onkeypress="numberonly(event)" class="input" name="contactno" required="required">
                    <script>
                            function numberonly(evt){
                                var ch= String.fromCharCode(evt.which);
                                if (!(/[0-9]/.test(ch))) {
                                      evt.preventDefault();
                                }
                            }
                            function check()
                            {
                                if (frm.password1.value != frm.password.value) {
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
                </div>
                <div class="group">
                    <label for="pass" class="label">Address</label>
                    <textarea cols="20" class="input" rows="4" name="address" required="required"></textarea>
                </div>
                <div class="group">
                    <input type="submit" class="button" value="Sign Up" name="signup" onclick="return check()" >
                </div>
            </div>
                </form>
        </div>
    </div>
</div>
    <?php
    
    }
else{
    header("Location: dashboard.php");
}
}
 else {
    header("Location: home.php");
}
?>
</body>
</html>
<?php 
@$id=$_GET['a'];
if ($id==1) {
     echo "<script>alert('Username or Password Invalid')</script>";
}
@$id=$_GET['f'];
if ($id==1) {
     echo "<script>alert('You Have to Login First')</script>";
}
if (@$_GET['email']) {
    echo "<script>alert('Email id Already Exist.please Login')</script>";
}
?>