<?php
include './sql_connection.php';
@$pid=$_GET['id'];
$delete="delete from tbl_temp_cart where Sub_product_id='$pid'";
$del= mysqli_query($con, $delete);
if ($del) {
    header("Location:buynow.php");
}
 else {
}
echo "<script>location.href='buynow.php';</script>";
?>
