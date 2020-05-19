<?php include './adminmaster.php';
        include './sql_connection.php';?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Add Product and Sub Product</title>
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
        <div class="wrapper wrapper--w790">
                    <br><br><br><br>
                               
            <div class="card card-5">
                <div class="card-heading" >
                    <h2 class="title">ADD New Product</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="#">
                        
                        <div class="form-row">
                            <div class="name">Product Name</div>
                            <div class="value">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="pname" value="" required="required">
                                        </div>
                            </div>
                        </div>
                        <div>
                            <button class="btn btn--radius-2 btn--blue" type="submit" name="addproduct">Add Product</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    
    <br>
      
        <div class="wrapper wrapper--w790">
                    <br><br><br><br>
                  
                    
            <div class="card card-5">
                <div class="card-heading" >
                    <h2 class="title">ADD New Sub Product</h2>
                </div>
                <div class="card-body">
                      <form method="POST" action="#" enctype="multipart/form-data">
                        <div class="form-row">
                            <div class="name">Product</div>
                            <div class="value">
                                <div class="input-group-desc">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="product_name" required="required" >
                                             <option disabled="disabled" selected="selected">Select Product Type</option>
                                             
                                             <?php 
                                               $show="SELECT * FROM tbl_product_category";
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
                            <div class="name">Company</div>
                            <div class="value">
                                <div class="input-group-desc">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="comapany_name" required="required" >
                                             <option disabled="disabled" selected="selected">Select Company Type</option>
                                             
                                             <?php 
                                               $show="SELECT * FROM tbl_company";
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
                            <div class="name">Sub Product Name</div>
                            <div class="value">              
                                        <div class="input-g11roup-desc">
                                            <input class="input--style-5" type="text" name="spname" required="required">
                                        </div>
                            </div>
                        </div>
                      
                        <div class="form-row m-b-55">
                            <div class="name">Price</div>
                            <div class="value">
                                <div class="row row-refine">            
                                    <div class="col-9">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="sprice" onkeypress="numberonly(event)">                                    
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                           <div class="form-row m-b-55"> 
                        <div class="name">Type</div>
                            <div class="p-t-15">                          
                                <label class="radio-container m-r-55">Male
                                    <input type="radio"  name="gender" value="m">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="radio-container">Female
                                    <input type="radio" name="gender" checked="checked" value="f">
                                    <span class="checkmark"></span>
                                    </label>
                            </div>
                         </div>
                       
                       <div class="form-row">
                            <div class="name">Upload Product Image</div>
                            <div class="value">              
                                        <div class="input-g11roup-desc">
                                            <input class="input--style-5" type="file" name="img" required="required">
                                        </div>
                            </div>
                        </div>
                      
                        
                        <div>
                            <button class="btn btn--radius-2 btn--blue" type="submit" name="addsubproduct">Add Sub Product</button>
                        </div>
                    </form>
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


</body>
</html>

<?php 
           if (isset($_POST['addproduct'])) {         
                include 'sql_connection.php';               
                $name= strtoupper($_POST['pname']);
                $insert="insert into tbl_product_category(product_name) values ('$name')";
                $fire= mysqli_query($con,$insert);
                if ($fire) {
                    echo "<script>alert('Product Successfully Added')</script>";
                    
                }
                else {
                    echo mysqli_error($con);
                    
                }
     }
      if (isset($_POST['addsubproduct'])) {         
                include 'sql_connection.php';
                @$pid=$_POST['product_name'];
                @$cid=$_POST['comapany_name'];
                @$spname= strtoupper($_POST['spname']);               
                @$sprice=$_POST['sprice'];
                @$gender=$_POST['gender'];
                $file_name = $_FILES['img']['name']; 
                $file_size = $_FILES['img']['size'];
                $file_tmp = $_FILES['img']['tmp_name'];
                $file_type = $_FILES['img']['type']; 
                $imgtype = strtolower(pathinfo($file_name,PATHINFO_EXTENSION));
                $path="prductimages/".$spname;
                if (!is_dir($path)) { 
                if ($imgtype=='jpg' || $imgtype=='png' || $imgtype=='jpeg' || $imgtype=='JPG' || $imgtype=='PNG' || $imgtype=='JPEG') {
                    mkdir($path,0777,TRUE);
                    @move_uploaded_file($file_tmp,$path."/".$file_name);
                    $target_file = "$path/".$file_name;
                    $subproduct="insert into tbl_subproduct_catergory(product_id,subproduct_name,company_id,price,type,qty,image) values($pid,'$spname',$cid,$sprice,'$gender',1,'$target_file')";
                    $fire= mysqli_query($con,$subproduct);
                if ($fire) {
                    echo "<script>alert('Sub Product Successfully Added')</script>";    
                }
                else{
                   echo mysqli_error($con);
                   echo "$cid $pid";
                }
                } else {
                     echo "<script>alert('Please Upload only JPG/PNG/JPEG')</script>";  
                }
                } else {
                    echo "<script>alert('Document Already Uploaded')</script>"; 
                }      
      }
  ?>
<?php include './adminfooter.php';
?>
