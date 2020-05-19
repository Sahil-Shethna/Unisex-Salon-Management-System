<?php include './index.php';
 include './sql_connection.php';
 $id=$_SESSION['email'];
 
 if(isset($_SESSION['email'])) {
 
        $query1="select * from Tbl_User where email='$id'";
        $firee=mysqli_query($con, $query1);
        if ($firee) {
            while (@$row = mysqli_fetch_array($firee)) {   
                
           ?>
<html>
    <head>
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
<div class="container">
    <h1 style="color: white">Edit Profile </h1>
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
          <form action="change.php" method="get">
           <input type="submit" class="btn btn-primary" value="Change Password">
           
          Hello <strong><?php echo strtoupper($_SESSION['name']);?></strong>. Use this to change your password.
          </form>
        </div>
        <h3 style="color:white">Personal info</h3>
        
        <form class="form-horizontal" role="form" method="POST" action="#">
          <div class="form-group">
            <label class="col-lg-3 control-label" style="color:white">Name</label>
            <div class="col-lg-6">
                <input class="form-control" type="text" value="<?php echo "$row[1]";?>" required name="name">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label" style="color:white">Email ID</label>
            <div class="col-lg-6">
                <input class="form-control" type="text" value="<?php echo "$row[3]";?>" readonly>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label" style="color:white">Contact No</label>
            <div class="col-lg-6">
                <input class="form-control" type="text" value="<?php echo "$row[4]";?>" name="contact">
            </div>
          </div>
          <div class="form-group">
              <label class="col-lg-3 control-label" style="color:white">Address</label>
            <div class="col-lg-6">
                <textarea name="address" class="col-lg-12" rows="4" cols="20"><?php echo "$row[6]";?>
                            </textarea>
              
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
                <input type="submit" class="btn btn-primary" name="submit" value="Save Changes">
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
<?php
            }
        } else {
            echo "<script>alert('Something Want wrong Try Agian');</script>";
        }
 } else {
     header("Location:home.php");
}
        include './footer.php';
        if (isset($_POST['submit'])) {
        $name=$_POST['name'];
        $contact=$_POST['contact'];
        $address=$_POST['address'];
       $update="update Tbl_User set name='$name', contact_no='$contact', address='$address' where email='$id'";
       $fire=mysqli_query($con, $update);
       if ($fire) {
           echo "<script>alert('Profile Updated Successfully');</script>";    
       }
        else {
        $error= mysqli_error($con);
        echo "<script>alert('$error');</script>";   
       }
}
        ?>