<?php
include './dashboardmaster.php';  

@session_start();
if (isset($_SESSION['is_admin']))
    {
?>
<!-- //header-ends -->
<html>
    <head>
         <style>
#myInput {
  background-position:5px 12px;
  background-repeat: no-repeat;
  background-size: 26px;
  width: 100%;
  font-size: 20px;
  padding: 12px 10px 8px 40px;
  border: 1px solid;
  margin-bottom: 10px;
  border-radius: 50px;
}

#myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 18px;
}
table {
  border-collapse: collapse;
  width: 100%;
}
</style>
    </head>
    <body>
<?php
include './sql_connection.php';

$show="select count(user_id) from tbl_user where type='customer'";
$result= mysqli_query($con, $show);
$row = mysqli_fetch_array($result);
$totalcustomer=$row[0];
$gen="select count(user_id) from tbl_user where gender='Female' and type='customer'";
$result1= mysqli_query($con, $gen);
$row = mysqli_fetch_array($result1);
$gender=$row[0];
$city="select count(user_id) from tbl_user where gender='Male' and type='customer'";
$result2= mysqli_query($con, $city);
$row = mysqli_fetch_array($result2);
@$city=$row[0];
$date= date('Y-m-d');
$show="SELECT COUNT(*) from tbl_appointment_order WHERE Appointment_date='$date'";
$result3= mysqli_query($con, $show);
$row = mysqli_fetch_array($result3);
$today=$row[0];
while ($row = @mysqli_fetch_array($result3)){
   
}
echo "<div style='border: 1px white solid;width: 1000px;margin-left:300px;margin-top:50px;background:#000000'><center>";
echo "<table cellspacing='15' cellpadding='5' style='color:#F8BE5B;margin-top:50px;width:90%;height: 250px;'>"; 
echo "<tbody><tr><th style=width:25%>Total Customer</th><th style=width:25%>Total Female Customer</th><th style=width:30%>Total Male Customer</th><th style=width:20%>Total Todays Appointment</th></tr>"
. "<tr><td><h1><i class='fa fa-user' aria-hidden='true'></i> $totalcustomer</h1></td><td><h1><i class='fa fa-female' aria-hidden='true'></i>  $gender</h1></td><td><h1><i class='fa fa-male'></i>  $city</h1></td><td><h1><i class='fa fa-calendar' aria-hidden='true'></i>  $today</h1></td></tbody>";
echo "</table></center></div>";
?>
       
<div style="width: 80%;margin-left: 150px;margin-top: 100px;margin-bottom: 100px;">
    <center><h2 style="font-weight: bolder">Salon Today's Service Appointment</h2></center><br>
        <table style="border: 1px black solid">
            <tr style="color:#F8BE5B;background: #000000">
  <th>Service Name</th>
  <th>Customer Name</th>
  <th>Contact NO</th>
  <th>Appointment Date</th>
  <th>Appointment Time</th>
  </tr>
  <?php 
  include './sql_connection.php';
  $show="SELECT tbl_service.service_name,tbl_user.name,contact_no,tbl_appointment_order.Appointment_date,Appointment_time from tbl_service,tbl_user,tbl_appointment_order where tbl_service.service_id=tbl_appointment_order.service_id and tbl_user.user_id=tbl_appointment_order.user_id and Appointment_date='$date'";
  $fire=mysqli_query($con, $show);
  if ($fire) {
  
      while (@$row = mysqli_fetch_array($fire)) {
          echo "<tr style='color:#000000;background: white'>
                <td>$row[0]</td>    
                <td>$row[1]</td>
                <td>$row[2]</td>
                <td>$row[3]</td>
                <td>$row[4]</td>
                
                </tr> ";
      }
  } else {
      echo "error";
}
  ?>
</table>
</div>            

<div style="width: 80%;margin-left: 150px;margin-top: 100px;margin-bottom: 100px;">
    <center><h2 style="font-weight: bolder">Salon Today's Packages Appointment</h2></center><br>
        <table style="border: 1px black solid">
            <tr style="color:#F8BE5B;background: #000000">
  <th>Service Name</th>
  <th>Customer Name</th>
  <th>Contact NO</th>
  <th>Appointment Date</th>
  <th>Appointment Time</th>
  </tr>
  <?php 
  include './sql_connection.php';
  $show="SELECT tbl_package.package_name,tbl_user.name,contact_no,tbl_appointment_order.Appointment_date,Appointment_time from tbl_package,tbl_user,tbl_appointment_order where tbl_package.package_id=tbl_appointment_order.package_id and tbl_user.user_id=tbl_appointment_order.user_id and Appointment_date='$date'";
  $fire=mysqli_query($con, $show);
  if ($fire) {
  
      while (@$row = mysqli_fetch_array($fire)) {
          echo "<tr style='color:#000000;background: white'>
                <td>$row[0]</td>    
                <td>$row[1]</td>
                <td>$row[2]</td>
                <td>$row[3]</td>
                <td>$row[4]</td>
                
                </tr> ";
      }
  } else {
      echo "error";
}
  ?>
</table>
</div> 
            
</body>
  </html>  						
								
<?php }
 else{
     header("location:login.php");
 }
?>