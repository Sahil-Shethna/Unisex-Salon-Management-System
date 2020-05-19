<?php
include './adminmaster.php';
@session_start();?>
<?php
if(isset($_POST['submit'])) {
    
   include './sql_connection.php';
        $id=$_SESSION['email'];
        $pass= mysqli_real_escape_string($con, md5(trim($_POST['oldpass'])));
        $query1="select password from Tbl_User where email='$id'";
        $firee=mysqli_query($con, $query1);
        if ($firee) {
            while (@$row = mysqli_fetch_array($firee)) {
                $pd=$row[0];
            }
        } else {
            echo "<script>alert('aaaa');</script>";
        }
   if ($pd == $pass) {
       
        //$id=$_SESSION['email'];
        $pass1= mysqli_real_escape_string($con, md5(trim($_POST['newpass'])));
        $query="update Tbl_User set password='$pass1' where email='$id'";
        $fire= mysqli_query($con, $query);
        if ($fire) {
          echo "<script>alert('Password Successfully Changed');</script>";            
        }
  } else {
      echo "<script>alert('Wrong Password');</script>";

  }
} 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Change Password</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
    <script>
                  
                            function check()
                            {
                                    if (frm.newpass.value != frm.conpass.value) {
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
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Change Password</h2>
                </div>
                <div class="card-body">
                    <form  action="#" method="POST" name="frm">
                        <div class="form-row">
                            <div class="name">Old Password</div>
                            <div class="col-lg-8">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="password" name="oldpass" placeholder="Old Password" required="required">
                                        </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">New Password</div>
                            <div class="col-lg-8">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="password" name="newpass" placeholder="New Password" required="required" pattern="(?=^.{6,}$)(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s)[0-9a-zA-Z!@#$%^&*()]*$" title="1 Upper Case ,1 Lower Case , 1 digit and 6 characters minimum">
                                        </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Confirm Password</div>
                             <div class="col-lg-8">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="password" name="conpass" placeholder="confirm password"  pattern="(?=^.{6,}$)(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s)[0-9a-zA-Z!@#$%^&*()]*$" title="1 Upper Case ,1 Lower Case , 1 digit and 6 characters minimum">
                                            
                                        </div>
                                    </div>
                        </div> 
                        <div>
                            <button class="btn btn--radius-2 btn--blue" type="submit" name="submit" onclick="return check()">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body>

</html>
<!-- end document-->
<?php include './adminfooter.php';?>
<!-- end document-->
<?php 



?>
