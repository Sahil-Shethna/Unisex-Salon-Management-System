<?php include './adminmaster.php';
        include './sql_connection.php';?>
<html lang="en">

<head>
    <!-- Title Page-->
    <title>View Product</title>

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
   
    <?php
    include './sql_connection.php';
    ?>
    <br>
<center><h1 style="color: black;font-weight: bolder">Sub Product</h1></center>
<br>
<input  type="text" id="myInput" onkeyup="Function()" placeholder="Search for Sub product name..." title="Type in a name">
<?php
$show = "select * from tbl_subproduct_catergory";
$result = mysqli_query($con, $show);
echo "<form action='deledata.php' method='post' class='sahil'>";
echo "<center>";
echo "<table style='color:black;margin-top:20px' class='table table-striped table-hover' id='myTable'>\n";
echo "<thead><tr><th>Product_Name</th><th>Sub_product_name</th><th>Company_Name</th><th>Price</th><th>Type</th><th>qty</th><th>Image</th><th>Update</th><th>Delete</th></tr></thead>";
while ($row = @mysqli_fetch_array($result)) {
    $id = $row[0];
    $prodid=$row[1];
    if ($row[6] == 'm') {
        $row[6] = "Male";
    } else {
        $row[6] = "Female";
    }
    ?>
    <?php $pid=$row[1];?>
    <?php $coid=$row[4];?>
    <tr>
        
        <td><?php $show="SELECT product_name FROM tbl_product_category where product_id=$pid";
                  $f= mysqli_query($con, $show);
                       if ($f) {
                            while ($row1 = mysqli_fetch_array($f)) {
                                 echo $row1[0];
                            }
                       }?></td>
        <td><?php echo $row[2] ?></td>
        <td><?php $show="SELECT company_name FROM tbl_company where company_id=$coid";
                    $f= mysqli_query($con, $show);
                        if ($f) {
                            while ($row2 = mysqli_fetch_array($f)) {
                                echo $row2[0];
                            }
                        }
                    ?></td>
       
        <td><?php echo $row[5] ?></td>
        <td><?php echo $row[6] ?></td>
        <td><?php echo $row[7] ?></td>
        <td><img src="<?php echo $row[8] ?>" style="height: 50px;width: 80px;"></td>
        
        <td><a href='updateproduct.php?id=<?php echo $id ?>&&prodid=<?php echo $prodid?>'><i style='padding-left: 20px;' class="fas fa-edit"></i></a></td>  
        <td> <a  onclick="return confirm('Are You Sure');"href='productDelete.php?id=<?php echo $id ?>'><i style='color:red' class='fas fa-trash'></i></a></td>
    </tr>
    <?php
}
echo "</table></center></form>";
?>
        
        
       
 <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>