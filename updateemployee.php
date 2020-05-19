<?php include './adminmaster.php';?>

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
    <title>Update Employee</title>

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
    function numberonly(evt){
        var ch=String.fromCharCode(evt.which);
        if (!/[0-9]/.test(ch)) {
            evt.preventDefault();
}
    }
    function charonly(evt){
        var ch=String.fromCharCode(evt.which);
        if (!/[A-z]/.test(ch)) {
            evt.preventDefault();
}
    }
    </script>
</head>


<body>
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
            <div class="card-heading" >
                    <h2 class="title">Search Employee Id</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="#">
     
                        <div class="form-row">
                            <div class="name">Email Id</div>
                            <div class="value">
                                <div class="input-group-desc">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="email" required="required" >
                                             <option disabled="disabled" selected="selected">Choose Employee Email</option>
                                            <?php
                                            include './sql_connection.php';
                                            if ($con) {
                                                   $show="select email from tbl_employee";
                                                   $fire= mysqli_query($con, $show);
                                                   if ($fire) {
                                                       while ($row = mysqli_fetch_array($fire)) {
                                                           echo "<option value='$row[0]'>$row[0]</option>";
                                                       }
                                                   } else {
                                                       echo "mysqli_error($con)";
                                                   }
                                            }else {
                                                echo "mysqli_error($con)";
                                            }
                                            ?>           
                                        </select>
                                        <div class="select-dropdown" ></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div>
                            <button class="btn btn--radius-2 btn--blue" type="submit" name="searchemployee" >Search Employee</button>
                        </div>
                    </form>
                </div>
                </div>
        </div>
        <div class="wrapper wrapper--w790">
                    <br><br><br><br>
                    <?php if (isset($_POST['searchemployee'])) {
                                        $eid=$_POST['email'];
                                        include './sql_connection.php';
                                        if ($con) {
                    
                                            $query="select * from tbl_employee where email='$eid'";
                                            $firee= mysqli_query($con, $query);
                                            if ($firee) {
                                                while (@$row1 = mysqli_fetch_array($firee)) {

                                                ?>
                    
            <div class="card card-5">
                <div class="card-heading" >
                    <h2 class="title">Update Employee Details</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="#">
                        <div class="form-row">
                            <div class="name">Name</div>
                            <div class="value">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="name" value="<?php echo "$row1[1]";?>" required="required" onkeypress="charonly(event)">
                                        </div>
                            </div>
                        </div>
                 
                        <div class="form-row">
                            <div class="name">Email</div>
                            <div class="value">
                                <div class="input-group-desc">
                                    <input class="input--style-5" type="email" name="email" value="<?php echo "$row1[2]";?>" readonly="readonly">
                                </div>
                            </div>
                        </div>
                        <div class="form-row m-b-55">
                            <div class="name">Phone</div>
                            <div class="value">
                                <div class="row row-refine">
                                    <div class="col-3">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="area_code" value="+91" readonly >
                                           
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="phone" value="<?php echo "$row1[3]";?>" onkeypress="numberonly(event)">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-row m-b-55"> 
                        <div class="name">Gender</div>
                            <div class="p-t-15">
                                <?php 
                                    $gen=$row1[4];
                                    if ($gen=='Male') {
                        ?>
                                <label class="radio-container m-r-55">Male
                                    <input type="radio" checked="checked" name="gender" value="Male">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="radio-container">Female
                                    <input type="radio" name="gender" value="Female">
                                    <span class="checkmark"></span>
                                    </label>
                                    <?php } else {
                        
                    ?>
                                <label class="radio-container m-r-55">Male
                                    <input type="radio"  name="gender" value="Male">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="radio-container">Female
                                    <input type="radio" name="gender"checked="checked" value="Female">
                                    <span class="checkmark"></span>
                                    </label><?php }?>
                            </div>
                         </div>
                     
                        <div class="form-row m-b-55">
                            <div class="name">Addesss</div>
                            <div class="value">
                                <div class="input-group-lg">
                                    <textarea name="address" class="input--style-5" rows="2" cols="54"><?php echo "$row1[5]";?></textarea>
                                    
                                </div>
                            </div>
                        </div>
                         <div class="form-row">
                            <div class="name">Salary</div>
                            <div class="value">
                                <div class="input-group-desc">
                                    <input class="input--style-5" type="text" name="salary" value="<?php echo "$row1[6]";?>" required="required" onkeypress="numberonly(event)">
                                </div>
                            </div>
                        </div>
                        <div>
                            <button class="btn btn--radius-2 btn--blue" type="submit" name="updateemployee" >Update Employee</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php }
           } else {
               echo "<script>alert('Sometimg Wrong Please Try Again')</script>";
           }
                    }
                    
           }
    ?>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>


</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->

<!-- end document-->

<?php 
      if (isset($_POST['updateemployee'])) {         
                include 'sql_connection.php';
                $name=$_POST['name'];               
                $email=$_POST['email'];
                $gender=$_POST['gender'];
                $contactno=$_POST['phone'];
                $address=$_POST['address'];
               $salary=$_POST['salary'];
                $insert="update tbl_employee set name='$name',contact_no='$contactno',gender='$gender',address='$address',Salary=$salary where email='$email' ";
                $fire= mysqli_query($con,$insert);
                if ($fire) {
                    echo "<script>alert('Employee Successfully Updated')</script>";
                    
                }
                else {
                    echo mysqli_error($con);
                    
                }
          
     } 
    
  ?>
<?php include './adminfooter.php';?>
