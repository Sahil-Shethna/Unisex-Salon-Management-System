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
    <title>Au Register Forms by Colorlib</title>

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
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Admin Registration Form</h2>
                </div>
                <div class="card-body">
                    <form method="POST">
                        <div class="form-row">
                            <div class="name">Name</div>
                            <div class="value">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="name" placeholder="Name" required="required">
                                        </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Password</div>
                            <div class="value">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="password" name="password" placeholder="Password" required="required" pattern="(?=^.{8,}$)(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s)[0-9a-zA-Z!@#$%^&*()]*$" title="1 Upper Case ,1 Lower Case , 1 digit and 8 characters minimum">
                                        </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Email</div>
                            <div class="value">
                                <div class="input-group-desc">
                                    <input class="input--style-5" type="email" name="email" placeholder="Email id" required="required">
                                </div>
                            </div>
                        </div>
                        <div class="form-row m-b-55">
                            <div class="name">Phone</div>
                            <div class="value">
                                <div class="row row-refine">
                                    <div class="col-3">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text"  value="+91">
                                           
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="contactno" placeholder="Contact no" maxlength="10">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row m-b-55"> 
                        <div class="name">Gender</div>
                            <div class="p-t-15">
                                <label class="radio-container m-r-55">Male
                                    <input type="radio" checked="checked" name="gender" value="Male">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="radio-container">Female
                                    <input type="radio" name="gender" value="Female">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                         </div>
<!--                        <div class="form-row">
                            <div class="name">Type</div>
                            <div class="value">
                                <div class="input-group-desc">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="type">
                                            <option disabled="disabled" selected="selected">Choose Type</option>
                                            <option value="Admin">Admin</option>
                                            <option value="Customer">Customer</option>
                                           
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>-->
                        <div class="form-row m-b-55">
                            <div class="name">Addesss</div>
                            <div class="value">
                                <div class="input-group-lg">
                                    <textarea name="address" class="input--style-5" rows="2" cols="54"></textarea>
                                    
                                </div>
                            </div>
                        </div>
                         
                        <div>
                            <button class="btn btn--radius-2 btn--blue" type="submit" name="addadmin">Add Admin</button>
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

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
<?php include './adminfooter.php';?>
<!-- end document-->


<?php 
      if (isset($_POST['addadmin'])) {
         
          
                include 'sql_connection.php';
                $name=$_POST['name'];
                $pass= mysqli_real_escape_string($con,md5(trim($_POST['password'])));
                $email=$_POST['email'];
                $gender=$_POST['gender'];
                $contactno=$_POST['contactno'];
                $address=$_POST['address'];
               
                $insert="insert into Tbl_User (name,password,email,contact_no,gender,address,type) values ('$name','$pass','$email',$contactno,'$gender','$address','Admin')";
                $fire= mysqli_query($con,$insert);
                if ($fire) {
                    echo "<script>alert('Admin Registration Successfully Done')</script>";
                    header("Location:dashboard.php");
                }
                else {
                    echo "<script>alert('Error In Registration check deatils and please try again')</script>";
                    die("");
                }
          
     } 
    
  ?>