<?php
$con=mysqli_connect("localhost", "root", "", "salon_project");
if ($con) {
    //header("Location:output.php");
}
 else {
    echo "<h1>Error in Connetion</h1>";
}
?>

