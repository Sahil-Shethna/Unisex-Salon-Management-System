<?php

include './adminmaster.php';
include './sql_connection.php';
$emamilid="select email_id from tbl_user";
$fire= mysqli_query($con, $emamilid);
echo "<br>";
    $e=$_GET['id'];
    $sid=$_GET['sid'];
    $sql="select service_name from tbl_service where service_id='$e'";
    $fire1= mysqli_query($con, $sql);
    while ($row = mysqli_fetch_array($fire1)){
         $subname=$row[0];
    }
    
      
?>

<html>
    <head>
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
    </head>
    <body>
        
         <?php
                    
                    $sql="SELECT `sub_service_name`,`sub_service_price`,`type` FROM `tbl_sub_service` WHERE `sub_service_id`='$sid'";
                    $fir= mysqli_query($con, $sql);
                    while ($row = mysqli_fetch_array($fir)) {
                        
                    $sname=$row[0];
                    $sprice=$row[1];
                        if ($row[2]=='m') {
                            $g='Male';
                        }
                        else {
                            $g='Female';
                    }  
                    
                        }                
    ?>
        <div class="wrapper wrapper--w790">
                    <br><br><br><br>
                  
                    
            <div class="card card-5">
                <div class="card-heading" >
                    <h2 class="title">Update Sub Service</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="#">
                        <div class="form-row">
                           
                            <div class="name">Service Name</div>
                            <div class="value">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="name" value="<?php echo "$subname";?>" readonly="readonly">
                                            
                                        </div>
                            </div>
                        </div>
                 
                        <div class="form-row">
                           
                            <div class="name">Sub Service Name</div>
                            <div class="value">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="sname" value="<?php echo "$sname";?>" required="required">
                                            
                                        </div>
                            </div>
                        </div>
                 
                       <div class="form-row">
                            <div class="name">Price</div>
                            <div class="value">
                                <div class="input-group-desc">
                                    <input class="input--style-5" type="text" name="sprice" value="<?php echo "$sprice";?>" required="required" onkeypress="numberonly(event)">
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-row m-b-55"> 
                        <div class="name">Type</div>
                            <div class="p-t-15"> 
                                <?php if ($g=="male") {?>
                                <label class="radio-container m-r-55">Male
                                    <input type="radio"  name="gender" value="m" checked="checked">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="radio-container">Female
                                    <input type="radio" name="gender"checked="checked" value="f">
                                    <span class="checkmark"></span>
                                    </label>
                    <?php }else{?>
                                <label class="radio-container m-r-55">Male
                                    <input type="radio"  name="gender" value="m">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="radio-container">Female
                                    <input type="radio" name="gender"checked="checked" value="f" checked="checked">
                                    <span class="checkmark"></span>
                                    </label>
                    <?php }?>
                            </div>
                         </div>
                        <div>
                            <button class="btn btn--radius-2 btn--blue" type="submit" name="updatesubservice" >Update Sub Service</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>

<?php 
if (isset($_POST['updatesubservice'])) {
    include './sql_connection.php';
    $sname=$_POST['sname'];
    $sprice=$_POST['sprice'];
    $gender=$_POST['gender'];
    $update="update tbl_sub_service set sub_service_name='$sname',sub_service_price=$sprice,type='$gender' where sub_service_id='$sid'";
    $fireupdate= mysqli_query($con, $update);
    echo mysqli_error($con);
    if ($fireupdate) {
    echo "<script>location.href='viewservicepackage.php';</script>";
    }
    else {
        echo mysqli_error($con);
        
    }
}