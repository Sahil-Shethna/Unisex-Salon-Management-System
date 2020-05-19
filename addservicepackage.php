<?php include './adminmaster.php';
        include './sql_connection.php';?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Title Page-->
    <title>Add Service package</title>

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
    </script>
</head>


<body>
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
            <div class="card-heading" >
                    <h2 class="title">Select Service or package</h2>
            </div>
                <div class="card-body">
                    <form method="POST" action="#">
     
                        <div class="form-row">
                            <div class="name">Select</div>
                            <div class="value">
                                <div class="input-group-desc">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="add" required="required" >
                                             <option disabled="disabled" selected="selected">Select</option>
                                             <option value="Service">Service</option>
                                             <option value="Package">Package</option>
                                        </select>
                                        <div class="select-dropdown" ></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div>
                            <button class="btn btn--radius-2 btn--blue" type="submit" name="searchemployee" >Add Service/Package</button>
                        </div>
                    </form>
                </div>
                </div>
        </div>
        <?php if (@$_POST['add']=='Service') {
            
        ?>
        <div class="wrapper wrapper--w790">
                    <br><br><br><br>
                  
                    
            <div class="card card-5">
                <div class="card-heading" >
                    <h2 class="title">ADD New Sub Service</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="#">
                        
                        <div class="form-row">
                            <div class="name">Select</div>
                            <div class="value">
                                <div class="input-group-desc">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="add" required="required" >
                                             <option disabled="disabled" selected="selected">Select Service Type</option>
                                             
                                             <?php 
                                               $show="SELECT * FROM tbl_service";
                                                $f= mysqli_query($con, $show);
                                                if ($f) {
                                                    while ($row = mysqli_fetch_array($f)) {
                                                        echo "<option value='$row[0]'>$row[1]</option> ";
                                                    }
                                                }
                                                ?>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Sub Service Name</div>
                            <div class="value">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="name" value="" required="required">
                                        </div>
                            </div>
                        </div>
                 
                       <div class="form-row">
                            <div class="name">Price</div>
                            <div class="value">
                                <div class="input-group-desc">
                                    <input class="input--style-5" type="text" name="price" value="" required="required" onkeypress="numberonly(event)">
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-row m-b-55"> 
                        <div class="name">Type</div>
                            <div class="p-t-15">                          
                                <label class="radio-container m-r-55">Male
                                    <input type="radio"  name="type" value="Male">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="radio-container">Female
                                    <input type="radio" name="type"checked="checked" value="Female">
                                    <span class="checkmark"></span>
                                    </label>
                            </div>
                         </div>
                        <div>
                            <button class="btn btn--radius-2 btn--blue" type="submit" name="addservice" >Add Service</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
        <?php }?>
     <?php if (@$_POST['add']=="Package") {
        ?>
        <div class="wrapper wrapper--w790">
                    <br><br><br><br>
                  
                    
            <div class="card card-5">
                <div class="card-heading" >
                    <h2 class="title">ADD New Package</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="#">
                        
                        <div class="form-row">
                            <div class="name">Package Name</div>
                            <div class="value">              
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="pname" required="required">
                                        </div>
                            </div>
                        </div>
                        <div class="form-row m-b-55">
                            <div class="name">Package Discription</div>
                            <div class="value">
                                <div class="input-group-lg">
                                    <textarea name="disc" class="input--style-5" rows="2" cols="54"></textarea>
                                    
                                </div>
                            </div>
                        </div>
                 
                        <div class="form-row m-b-55">
                            <div class="name">Price</div>
                            <div class="value">
                                <div class="row row-refine">
                                    
                                    <div class="col-9">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="pprice" value="" onkeypress="numberonly(event)">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                        <div>
                            <button class="btn btn--radius-2 btn--blue" type="submit" name="addpackage" >Add Package</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
        <?php }?>
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
                    
      }}
           if (isset($_POST['addservice'])) {         
                include 'sql_connection.php';
                $id=$_POST['add'];               
                $name= strtoupper($_POST['name']);
                $price=$_POST['price'];
                $type=$_POST['type'];
                $insert="insert into tbl_sub_service(service_id,sub_service_name,sub_service_price,type) values ('$id','$name','$price','$type')";
                $fire= mysqli_query($con,$insert);
                if ($fire) {
                    echo "<script>alert('Sub Service Successfully Added')</script>";
                    
                }
                else {
                    echo mysqli_error($con);
                    
                }
     }
      if (isset($_POST['addpackage'])) {         
                include 'sql_connection.php';
                $pname= strtoupper($_POST['pname']);               
                $desc= strtoupper($_POST['disc']);
                $pprice=$_POST['pprice'];
                
                $package="insert into tbl_package(package_name,description,package_price) values ('$pname','$desc','$pprice')";
                $fire= mysqli_query($con,$package);
                if ($fire) {
                    echo "<script>alert('Package Successfully Added')</script>";
                    
                }
                else {
                    echo mysqli_error($con);
                    
                }
      }
    
  ?>
<?php include './adminfooter.php';?>
