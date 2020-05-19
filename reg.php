<?php 
      if (isset($_POST['verification'])) {
          include './index.php';
          if ($_POST['code']==$_POST['sendcode']) {
                include 'sql_connection.php';
                $name=$_POST['name'];
                $pass= mysqli_real_escape_string($con,md5(trim($_POST['password'])));
                $email=$_POST['email'];
                $gender=$_POST['gender'];
                $contactno=$_POST['contactno'];
                $address=$_POST['address'];
                $insert="insert into Tbl_User (name,password,email,contact_no,gender,address) values ('$name','$pass','$email',$contactno,'$gender','$address')";
                $fire= mysqli_query($con,$insert);
                if ($fire) {
                    header("Location:login.php");
                }
                else {
                    header("location:login.php?email=1");
                    
                }
          } else {
                echo "<script>alert('Invalid OTP')</script>";
          }
            } 
    
  ?>