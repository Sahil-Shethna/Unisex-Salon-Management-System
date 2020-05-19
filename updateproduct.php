<?php
include './adminmaster.php';
include './sql_connection.php';
$emamilid="select email_id from tbl_user";
$fire= mysqli_query($con, $emamilid);
echo "<br>";
    $e=$_GET['id'];
    $prodid=$_GET['prodid'];
    
    $sql="select product_name from tbl_product_category where product_id='$prodid'";
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
                    
                    $sql="SELECT `subproduct_name`,`price`,`type`,`qty` FROM `tbl_subproduct_catergory` WHERE `subproduct_id`='$e'";
                    $fir= mysqli_query($con, $sql);
                    while ($row = mysqli_fetch_array($fir)) {
                        
                    $sname=$row[0];
                    $sprice=$row[1];
                    $qty=$row[3];
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
                    <h2 class="title">Update Sub Product</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="#">
                         
                        <div class="form-row">
                           
                            <div class="name">Product Name</div>
                            <div class="value">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="name" value="<?php echo "$subname";?>" readonly="readonly">                                           
                                        </div>
                            </div>
                        </div>
                 
                        <div class="form-row">
                           
                            <div class="name">Sub Product Name</div>
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
                      
                        <div class="form-row">
                            <div class="name">Add Quantity</div>
                            <div class="value">
                                <div class="input-group-desc">
                                    <input class="input--style-5" type="number" name="qty" max="10" min="0" value="<?php echo "$qty";?>" required="required" onkeypress="numberonly(event)">
                                </div>
                            </div>
                        </div>
                       
                      
                        <div class="form-row m-b-55"> 
                        <div class="name">Type</div>
                            <div class="p-t-15"> 
                                <?php if ($g=="Male") {?>
                                <label class="radio-container m-r-55">Male
                                    <input type="radio"  name="gender" value="m" checked="checked">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="radio-container">Female
                                    <input type="radio" name="gender" value="f">
                                    <span class="checkmark"></span>
                                    </label>
                    <?php }else{?>
                                <label class="radio-container m-r-55">Male
                                    <input type="radio"  name="gender" value="m">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="radio-container">Female
                                    <input type="radio" name="gender" checked="checked" value="f">
                                    <span class="checkmark"></span>
                                    </label>
                    <?php }?>
                            </div>
                         </div>
                        <div>
                            <button class="btn btn--radius-2 btn--blue" type="submit" name="updatesubproduct" >Update Sub product</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
    </body>
</html>

<?php 
if (isset($_POST['updatesubproduct'])) {
    include './sql_connection.php';
    $sname=$_POST['sname'];
    $sprice=$_POST['sprice'];
    $qty=$_POST['qty'];
    $gender=$_POST['gender'];
    $update="update tbl_subproduct_catergory set subproduct_name='$sname',price=$sprice,type='$gender',qty=$qty where subproduct_id='$e'";
    $fireupdate= mysqli_query($con, $update);
    echo mysqli_error($con);
    if ($fireupdate) {
    echo "<script>location.href='viewproduct.php';</script>";
    }
    else {
        echo mysqli_error($con);
        
    }
}

