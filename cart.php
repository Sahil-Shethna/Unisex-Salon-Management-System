<?php 
@session_start();
if (isset($_SESSION['is_customer'])) {
 
$uid=$_SESSION['userid'];   
$pid=$_GET['id'];
$flag=0;
include './index.php';?>

<?php include './sql_connection.php';


$checkid="select * from tbl_temp_cart;";

if($res=mysqli_query($con, $checkid))
{
    while($row= mysqli_fetch_array($res))
    {
        $id=$row[1];
        if($pid==$id)
        {
            $cart="update tbl_temp_cart set qty=$row[3]+1 where Sub_product_id=$row[1];";
            $fire= mysqli_query($con, $cart);
            if ($fire) {
                $flag=1;
                echo "<script>location.href='shop.php?i=2';</script>";
            } else {
                echo mysqli_error($con);
            }
        }
    }
}

if($flag==0)
{
$cart="insert into tbl_temp_cart (sub_product_id,user_id,qty) values('$pid','$uid','1')";
$fire= mysqli_query($con, $cart);
if ($fire) {
    echo "<script>location.href='shop.php?i=1';</script>";
} else {
    echo mysqli_error($con);
}    
}
} else {
    echo "<script>location.href='login.php';</script>";
}

?>
<?php include './footer.php';?>