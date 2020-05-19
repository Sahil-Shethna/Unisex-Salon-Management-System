<?php
session_start();
$user=$_SESSION['userid'];
include './index.php';
 include './sql_connection.php';
 ?>
<html>
<head>
    <title>Buy Now</title>
     <link rel="stylesheet" href="fontawesome-free-5.7.0-web/css/all.css" type="text/css" >
  <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <style>
        <?php
    	if (isset($_POST['french-hens'])) {
    		echo '<div style="border:1px solid #fc0;padding:10px;margin-top:25px;">';
    		echo 'The values returned were:  '.implode(', ',array_values($_POST));
    		echo '</div>';
    	}
    ?>
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
       
</head>
<body>
    <br>
<br>
<?php
        if (isset($_SESSION['name'])) {
            echo "<center><h3 style='color:white'>Appointment Booking Details</h3>";
  $app="SELECT * FROM tbl_appointment_order where user_id=$user ORDER BY Appointment_order_id DESC ";
echo "<center>";
echo "<table style='color:black;margin-top:20px' class='table table-striped table-hover' id='myTable'>\n";
echo "<thead style='color:white'><tr><th>Appointment ID</th><th>Service Name</th><th>Package Name</th><th>Time</th><th>Date</th><th>Cancel Appointment</th></tr></thead>";
if($res1=mysqli_query($con, $app))
{
    while($row= mysqli_fetch_array($res1))
    {
         $aid=$row[1];
          $cart="SELECT service_name FROM tbl_service where service_id=$aid";
            $fire= mysqli_query($con, $cart);
            @$row1= mysqli_fetch_array($fire);
            
          $pid=$row[2];
          $pack="SELECT package_name FROM tbl_package where package_id=$pid";
            $fire1= mysqli_query($con, $pack);
            @$row2= mysqli_fetch_array($fire1);  
           
        ?>
<tbody>
    <tr>
        <td><?php echo "$row[0]" ?></td>
        <td><?php echo "$row1[0]" ?></td>
        <td><?php echo "$row2[0]" ?></td>
        <td><?php echo "$row[4]" ?></td>
        <td><?php echo "$row[5]" ?></td>
        
        <?php
        $date=$row[4];
        $today= date('Y-m-d');
        if ($today < $date) {
                    
                ?>
        <td style="padding-left: 30px;"><a onclick="return confirm('Are You Sure');"href='myorder.php?id=<?php echo $row[0] ?>'><i style='color:red' class='fa fa-times'></i></a></td>

       <?php 
        } else {
            echo "<td>-</td>";
        }
    }
}
echo "</table></center>";
          
echo "<center><h3 style='color:white'>Product Orders</h3></center>";
$order="SELECT tbl_order.bill_id,subproduct_id,qty,amount from tbl_order,tbl_bill WHERE tbl_order.bill_id=tbl_bill.bill_id AND tbl_bill.user_id=$user";
echo "<center>";
echo "<table style='color:black;margin-top:20px' class='table table-striped table-hover' id='myTable'>\n";
echo "<thead style='color:white'><tr><th>Product Name</th><th>Image</th><th>Price</th><th>Qty</th><th>Bill</th></tr></thead>";
if($res=mysqli_query($con, $order))
{
    while($row= mysqli_fetch_array($res))
    {
         $id=$row[1];
          $cart="SELECT subproduct_name,image FROM tbl_subproduct_catergory where subproduct_id=$id";
            $fire= mysqli_query($con, $cart);
            $row1= mysqli_fetch_array($fire);
           
        ?>
<tbody>
    <tr>
        
        <td><?php echo "$row1[0]" ?></td>
    
         <td> <img src="<?php echo $row1[1] ?>" style="height: 50px;width: 80px;"/> </td>
        <td><?php echo "$row[3]" ?></td>
        <td><?php echo "$row[2]" ?></td>
        <td style="font-family: cursive;font-weight: bolder"><a href="bill.php?bill=<?php echo $row[0]; ?>"><?php echo "Generate Bill" ?></a></td>
        
         

       <?php 
    }
}
echo "</table></center>";
     
} else {
    echo "<script>location.href='login.php';</script>";
}

?>
    
</body>

</html>

<?php

include './sql_connection.php';
if (isset($_GET['id'])) {
    $appo=$_GET['id'];
$sql="delete from tbl_appointment_order  where Appointment_order_id=$appo";

if(mysqli_query($con, $sql))
{
    echo "<script>location.href='myorder.php';</script>";
}
else
{
    echo "Not Updated";
}
}
?>
<?php 
include './footer.php';
?>