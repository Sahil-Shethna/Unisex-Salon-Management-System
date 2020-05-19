<!DOCTYPE html>
<?php include './adminmaster.php';?>
<html>
<head>
    <style>
#myInput {
  background-image: url('img/search-magnifier-interface-symbol.png');
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

th {
    background: #000000;
    color: #F8BE5B;
  text-align: left;
  padding: 8px;
}
td {
  text-align: left;
  padding: 8px;
  font-weight: bolder;
}

tr:nth-child(even) {background-color: #f2f2f2;}
</style>
<script>
function myFunction() {
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
    <div style="width: 70%;margin-left: 300px;">
        <center><h2>The World Famous Salon Admin Details</h2></center><br>
        <input  type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for Names.." title="Type in a name">

        <table style="border: 1px black solid" id='myTable'>
  <tr>
  <th>Service Name</th>
  <th>Package Name</th>
  <th>Customer Name</th>
  <th>Contact NO</th>
  <th>Appointment Date</th>
  <th>Appointment Time</th>
  </tr>
  <?php 
  include './sql_connection.php';
  $date= date('Y-m-d');
  $show="SELECT tbl_service.service_name,tbl_package.package_name,tbl_user.name,contact_no,tbl_appointment_order.Appointment_date,Appointment_time from tbl_service,tbl_package,tbl_user,tbl_appointment_order where tbl_service.service_id=tbl_appointment_order.service_id and tbl_package.package_id=tbl_appointment_order.package_id and tbl_user.user_id=tbl_appointment_order.user_id and Appointment_date >= '$date'";
  $fire=mysqli_query($con, $show);
  if ($fire) {
  
      while (@$row = mysqli_fetch_array($fire)) {
          echo "<tr>
                <td>$row[0]</td>    
                <td>$row[1]</td>
                <td>$row[2]</td>    
                <td>$row[3]</td>
                <td>$row[4]</td>
                <td>$row[5]</td>
                   
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
