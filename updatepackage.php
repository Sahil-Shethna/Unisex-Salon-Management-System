<?php

include './adminmaster.php';
include './sql_connection.php';
$emamilid="select email_id from tbl_user";
$fire= mysqli_query($con, $emamilid);
echo "<br>";
    $pid=$_GET['id'];
    
    
      
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
                    
                    $sql="SELECT `package_name`,`description`,`package_price` FROM tbl_package WHERE `package_id`='$pid'";
                    $fir= mysqli_query($con, $sql);
                    while ($row = mysqli_fetch_array($fir)) {
                        
                    $pname=$row[0];
                    $desc=$row[1];
                      $pprice=$row[2];
                    
                        }                
    ?>
        <div class="wrapper wrapper--w790">
                    <br><br><br><br>
                  
                    
            <div class="card card-5">
                <div class="card-heading" >
                    <h2 class="title">Update Package</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="#">
                        <div class="form-row">
                           
                            <div class="name">Package Name</div>
                            <div class="value">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="pname" value="<?php echo "$pname";?>">
                                            
                                        </div>
                            </div>
                        </div>
                 
                        <div class="form-row">
                           
                            <div class="name">Description</div>
                            <div class="value">
                                        <div class="input-group-desc">
                                            <textarea class="input--style-5" name="desc" rows="4" cols="20"><?php echo "$desc";?>
                                            </textarea>  
                                        </div>
                            </div>
                        </div>
                 
                       <div class="form-row">
                            <div class="name">Price</div>
                            <div class="value">
                                <div class="input-group-desc">
                                    <input class="input--style-5" type="text" name="pprice" value="<?php echo "$pprice";?>" required="required" onkeypress="numberonly(event)">
                                </div>
                            </div>
                        </div>
                        <div>
                            <button class="btn btn--radius-2 btn--blue" type="submit" name="updatepackage" >Update Package</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>

<?php 
if (isset($_POST['updatepackage'])) {
    include './sql_connection.php';
    $pname=$_POST['pname'];
    $pprice=$_POST['pprice'];
    $desc=$_POST['desc'];
    $update="update tbl_package set package_name='$pname',description='$desc',package_price=$pprice where package_id='$pid'";
    $fireupdate= mysqli_query($con, $update);
    echo mysqli_error($con);
    if ($fireupdate) {
    echo "<script>location.href='viewservicepackage.php';</script>";
    }
    else {
        echo mysqli_error($con);
        
    }
}