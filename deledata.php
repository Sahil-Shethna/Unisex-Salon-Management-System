<?php
include './sql_connection.php';
@$uid=$_GET['id'];
$delete="delete from tbl_sub_service where sub_service_id='$uid'";
$del= mysqli_query($con, $delete);
if ($del) {
    header("Location:viewservicepackage.php");
}
 else {
    echo mysqli_error($con);
    //echo "<script>alert('error in single delete');</script>";
}
foreach($_POST['cb'] as $val)
{
    $sql="delete from tbl_sub_service where sub_service_id='$val'";
    if(mysqli_query($con, $sql))
    {
        
    }
    else
    {
        echo "error";
    }
}
echo "<script>location.href='viewservicepackage.php';</script>";
?>
