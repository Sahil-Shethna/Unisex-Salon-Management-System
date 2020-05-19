<?php
session_start();
include './sql_connection.php';
if (isset($_POST['submit'])) {
    $rating=$_POST['rating'];
    $id=$_POST['id'];
    $fid=$_POST['fid'];
     $uid= $_SESSION['userid'];
    $feedback= strtoupper($_POST['feedback']);
    echo "$rating $feedback $uid";
    $update="update tbl_feedback set rating=$rating,feedback='$feedback',status='complete' where feedback_id=$fid";
    $f= mysqli_query($con, $update);
    if ($f) {
        echo "<script>location.href='productinfo.php?id=$id'</script>";
    }
}


?>