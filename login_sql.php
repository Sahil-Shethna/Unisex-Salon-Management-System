<?php
if(isset($_POST['login'])) {
   
    $host="localhost";
    $user="root";
    $password="";
    $db="salon_project";
    $con= mysqli_connect($host, $user, $password, $db);
    if ($con) {
        
        $email= mysqli_real_escape_string($con,trim($_POST['email']));
        $pass= mysqli_real_escape_string($con, md5(trim($_POST['password'])));
        $query="select user_id,name from Tbl_User where email='$email' and password='$pass' and type='customer'";
        $fire= mysqli_query($con, $query);
        if ($fire) {
            if (mysqli_num_rows($fire)) {
                
                $row= mysqli_fetch_assoc($fire);
                $uname = $row["name"]; 
               
                session_start();
                $_SESSION['is_customer']= TRUE;
                $_SESSION['name']=$uname;
                $_SESSION['email']=$email;
                $_SESSION['userid']=$row["user_id"];
                header("Location:home.php");
               
            }
            else {
                     echo "<script>location.href='login.php?a=1';</script>";
            }
        }
        $query1="select name from Tbl_User where email='$email' and password='$pass' and type='Admin'";
        $fire1= mysqli_query($con, $query1);
        if ($fire1) {
            if (mysqli_num_rows($fire1)) {
                
                $row= mysqli_fetch_assoc($fire1);
                $uname = $row["name"]; 
                session_start();
                $_SESSION['is_admin']= TRUE;
                $_SESSION['name']=$uname;
                $_SESSION['email']=$email;
                header("Location:dashboard.php");
               
            }
        }
    }
 else {
         echo "<script>location.href='login.php?a=1';</script>";   
    }
}
 else {
    echo "error in login";
}



?>