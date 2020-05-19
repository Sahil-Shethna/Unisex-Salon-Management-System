<?php
include './sql_connection.php';
@$uid=$_GET['id'];
$delete="delete from tbl_subproduct_catergory where subproduct_id='$uid'";
$del= mysqli_query($con, $delete);
if ($del) {
    header("Location:viewproduct.php");
}
 else {
    echo mysqli_error($con);
    //echo "<script>alert('error in single delete');</script>";
}
echo "<script>location.href='viewproduct.php';</script>";
?>
