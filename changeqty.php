<?php

include './sql_connection.php';

$qty=$_POST['quantity'];
$pid=$_POST['pid'];

$sql="update tbl_temp_cart set qty='$qty' where Sub_product_id='$pid'";

if(mysqli_query($con, $sql))
{
    
}
else
{
    echo "Not Updated";
}

?>