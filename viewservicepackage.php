<?php include './adminmaster.php';
        include './sql_connection.php';?>
<html lang="en">

<head>
    <!-- Title Page-->
    <title>Add Service package</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link rel="stylesheet" href="fontawesome-free-5.7.0-web/css/all.css" type="text/css" >
    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">
    <link href="css/main.css" rel="stylesheet" media="all">
    <style>
            #myInput {
                background-image: url('search-magnifier-interface-symbol.png');
                background-position:10px 3px;
                background-repeat: no-repeat;
                background-size: 20px;
                width: 100%;
                font-size: 20px;
                padding: 12px 10px 15px 40px;
                border: 1px solid #ddd;
                margin-bottom: 10px;
            }

            #myTable {
                border-collapse: collapse;
                width: 100%;
                border: 1px solid #ddd;
                font-size: 18px;
            }
        </style>
        <script>
        function Function() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[2];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }
        </script>
</head>


<body>
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
            <div class="card-heading" >
                    <h2 class="title">View Service or package</h2>
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
                            <button class="btn btn--radius-2 btn--blue" type="submit" name="searchemployee" >View Service/Package</button>
                        </div>
                    </form>
                </div>
                </div>
        </div>
        <?php if (@$_POST['add']=='Service') {
           ?>
    <script>
        function myFunction() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[3];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }
        
    </script>

    <?php
    include './sql_connection.php';
    ?>
    <br>
<center><h1 style="color: black;font-weight: bolder">Sub Services</h1></center>
<br>
<input  type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for First names.." title="Type in a name">
<?php
$show = "select * from tbl_sub_service";
$result = mysqli_query($con, $show);
echo "<form action='deledata.php' method='post' class='sahil'>";
echo "<center>";
echo "<table style='color:black;margin-top:20px' class='table table-striped table-hover' id='myTable'>\n";
echo "<thead><tr><th>Select</th><th>Service Name</th><th>Sub Service Name</th><th>Sub Service Price</th><th>Type</th><th>Update</th><th>Delete</th></tr></thead>";
while ($row = mysqli_fetch_array($result)) {
    $id = $row[1];
    $sid=$row[0];
    if ($row[4] == 'm') {
        $row[4] = "Male";
    } else {
        $row[4] = "Female";
    }
    ?>

    <tr>
        <td><input type="checkbox" name="cb[]" value="<?php echo $row[0] ?>"</td>
        <td><?php $show="SELECT service_name FROM tbl_service where service_id=$id";
                  $f= mysqli_query($con, $show);
                       if ($f) {
                            while ($row1 = mysqli_fetch_array($f)) {
                                 echo $row1[0];
                            }
                       }?></td>
        
        <td><?php echo $row[2] ?></td>
        <td><?php echo $row[3] ?></td>
        <td><?php echo $row[4] ?></td>
        <td><a href='updateservice.php?id=<?php echo $id ?>&&sid=<?php echo $sid ?>'><i style='padding-left: 20px;' class="fas fa-edit"></i></a></td>  
        <td> <a  onclick="return confirm('Are You Sure');"href='deledata.php?id=<?php echo $id ?>'><i style='color:red' class='fas fa-trash'></i></a></td>
    </tr>
    <?php
}
echo "</table></center><input type='submit' name='submit' value='Delete All' class='btn btn-danger'></form>";
?>
        
        
        <?php }?>
    <?php if (@$_POST['add']=='Package') {
           ?>
    
    <?php
    include './sql_connection.php';
    ?>
    <br>
<center><h1 style="color: black;font-weight: bolder">Packages</h1></center>
<br>
<input  type="text" id="myInput" onkeyup="Function()" placeholder="Search for Package name" title="Type in a name">
<?php
$show = "select * from tbl_package";
$result = mysqli_query($con, $show);
echo "<form action='deledata.php' method='post' class='sahil'>";
echo "<center>";
echo "<table style='color:black;margin-top:20px' class='table table-striped table-hover' id='myTable'>\n";
echo "<thead><tr><th>Select</th><th>Package_Id</th><th>Package Name</th><th>Description</th><th>Package Price</th><th>Update</th><th>Delete</th></tr></thead>";
while ($row = mysqli_fetch_array($result)) {
    $pid=$row[0];
    ?>

    <tr>
        <td><input type="checkbox" name="cb[]" value="<?php echo $row[0] ?>"</td>
        <td><?php echo $row[0] ?></td>
        <td><?php echo $row[1] ?></td>
        <td><?php echo $row[2] ?></td>
        <td><?php echo $row[3] ?></td>
        <td><a href='updatepackage.php?id=<?php echo $pid ?>'><i style='padding-left: 20px;' class="fas fa-edit"></i></a></td>  
        <td> <a  onclick="return confirm('Are You Sure');"href='delete.php?id=<?php echo $pid ?>'><i style='color:red' class='fas fa-trash'></i></a></td>
    </tr>
    <?php
}
echo "</table></center><input type='submit' name='submit' value='Delete All' class='btn btn-danger'></form>";
?>
        
        
        <?php }?>
 <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>