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
  border: 1px solid ;
  margin-bottom: 10px;
  border-radius: 50px;
}

#myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 18px;
}
</style>
<style>
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
    td = tr[i].getElementsByTagName("td")[1];
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
        <center><h2>The World Famous Salon Employees Details</h2></center><br>
        <input  type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for Names.." title="Type in a name">

        <table style="border: 1px black solid" id='myTable'>
  <tr>
  <th>Employee Id</th>
  <th>Name</th>
  <th>Email</th>
  <th>Contact No</th>
  <th>Gender</th>
  <th>Address</th>
  <th>Salary</th>
  </tr>
  <?php 
  include './sql_connection.php';
  $show="select * from tbl_employee";
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
                <td>$row[6]</td>    
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
