<?php include './index.php';?>
<html>
    <head>
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
<div class="container">
    <h1 style="color: white">Edit Profile</h1>
  	<hr>
	<div class="row">
      <!-- left column -->
<!--      <div class="col-md-3">
        <div class="text-center">
          <img src="//placehold.it/100" class="avatar img-circle" alt="avatar">
          <h6>Upload a different photo...</h6>
          
          <input type="file" class="form-control">
          
        </div>
      </div>-->
      
      <!-- edit form column -->
      <div class="col-md-9 personal-info">
        <div class="alert alert-info alert-dismissable">
          <a class="panel-close close" data-dismiss="alert">×</a> 
          <i class="fa fa-coffee"></i>
          <form action="myprofile.php" method="get">
           <input type="submit" class="btn btn-primary" value="Edit Profile">
           
           Hello <strong><?php echo strtoupper($_SESSION['name']);?></strong>. Use this to edit profile.
          </form>
        </div>
          <h3 style="color: white">Change Password</h3>
          <form class="form-horizontal" role="form" name="frm" action="#" method="POST">
            <div class="form-group">
            <label class="col-md-3 control-label"style="color: white">Old Password:</label>
            <div class="col-md-5">           
                <input class="form-control" type="password" name="oldpass" placeholder="Old password" required="required">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label"style="color: white">Password:</label>
            <div class="col-md-5">           
                <input class="form-control" type="password" name="pass" placeholder="Password" required="required" pattern="(?=^.{6,}$)(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s)[0-9a-zA-Z!@#$%^&*()]*$" title="1 Upper Case ,1 Lower Case , 1 digit and 6 characters minimum">
            </div>
          </div>
          <div class="form-group">
              <label class="col-md-3 control-label" style="color: white">Confirm password:</label>
            <div class="col-md-5">
                <input class="form-control" type="password" name="newpass" required="required" placeholder="Confirm Password"  pattern="(?=^.{6,}$)(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s)[0-9a-zA-Z!@#$%^&*()]*$" title="1 Upper Case ,1 Lower Case , 1 digit and 6 characters minimum">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-5">
                <input type="submit" class="btn btn-primary" name="submit" value="Save Changes" onclick="return check()">
              <span></span>
              <input type="reset" class="btn btn-default" value="Cancel">
            </div>
          </div>
        </form>
      </div>
  </div>
</div>
</body>
</html>
<?php include './footer.php';?>
<script>
                  
                            function check()
                            {
                                if (frm.oldpass.value == frm.pass.value) {
                                     alert("You've entered an old password");
                                     return false;
                                 }
                                    if (frm.pass.value != frm.newpass.value) {
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
        $pass1= mysqli_real_escape_string($con, md5(trim($_POST['pass'])));
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