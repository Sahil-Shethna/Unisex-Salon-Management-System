<?php include './index.php';?>
<?php

$user=$_SESSION['userid'];
 include './sql_connection.php';
 if (@$_GET['a']==2) {
     echo "<script>alert('Transaction fail Please Try Again');</script>";
}
 ?>
<html>
<head>
    <title>Buy Now</title>
    <link rel="stylesheet" href="fontawesome-free-5.7.0-web/css/all.css" type="text/css" >
  <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    
<!--    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">
    <link href="css/main.css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="css/style.css">
   <script src='//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js'></script>
   <script src="js/incrementing.js"></script>-->
    <style>
            #myInput {
                background-image: url('search-magnifier-interface-symbol.png');
                background-position:10px 3px;
                background-repeat: no-repeat;
                background-size: 20px;
                width: 100%;
                font-size: 20px;
                padding: 12px 10px 15px 40px;
                border: 1px solid #ddd;
                margin-bottom: 10px;
            }

            #myTable {
                border-collapse: collapse;
                width: 100%;
                border: 1px solid #ddd;
                font-size: 18px;
            }
        </style>
       </head>
<body>
    <br>
<br>
<?php
        if (isset($_SESSION['name'])) {
            
        
$show = "SELECT tbl_subproduct_catergory.subproduct_name,price,image,tbl_temp_cart.Sub_product_id,tbl_temp_cart.qty,tbl_company.company_name,tbl_product_category.product_name FROM tbl_subproduct_catergory,tbl_temp_cart,tbl_company,tbl_product_category WHERE tbl_subproduct_catergory.subproduct_id=tbl_temp_cart.Sub_product_id and tbl_subproduct_catergory.company_id=tbl_company.company_id AND tbl_subproduct_catergory.product_id=tbl_product_category.product_id";
$result = mysqli_query($con, $show);
echo "<form action='deledata.php' method='post' class='sahil'>";
echo "<center>";
echo "<table style='color:black;margin-top:20px' class='table table-striped table-hover' id='myTable'>\n";
echo "<thead style='color:white'><tr><th>Product Name</th><th>Image</th><th>Price</th><th>Qty</th><th>Remove</th><th>Sub Total</th></tr></thead>";
$total=0;
while ($row = mysqli_fetch_array($result)) {
    ?>
<tbody>
    <tr style="color:black;background: white">
        
        <td><?php echo "$row[0] $row[5] $row[6]" ?></td>
        
        <td style="padding-left: 40px;"> <img src="<?php echo $row[2] ?>" style="height: 50px;width: 80px;"/> </td>
        <td style="padding-left: 10px;"><?php echo $row[1] ?></td>
        <input type="hidden" value="<?php echo $row[3] ?>" id="prodid">
        <?php $id=$row[3] ?>
        <?php
        $max="select qty from tbl_subproduct_catergory where subproduct_id=$id";
        $firemax= mysqli_query($con, $max);
        @$r=mysqli_fetch_array($firemax);
        $qty=$r[0];
        
                ?>
       
        <td style="padding-left: 15px;"><div><input  type="number" name="qty" value="<?php echo $row[4]; ?>" max="<?php echo "$qty";?>" style="width: 50px;background: #ddd" min="1" id="quantity" onchange="changedata(<?php echo $row[3] ?>,this.value)"></div><?php echo "($qty Qty left only)" ?></td>  
       
        <td style="padding-left: 30px;"><a onclick="return confirm('Are You Sure');"href='deletecart.php?id=<?php echo $row[3] ?>'><i style='color:red' class='fa fa-times'></i></a></td>
        <td style="padding-left: 20px;"> <?php echo $subtotal=$row[1]*$row[4];
            $total=$total+$subtotal;
            
        ?>
            
        </td>
    </tr>
    </tbody >
    <?php
}
echo "</table></center></form>";
     
} else {
    echo "<script>location.href='login.php';</script>";
}

?>
    
    <table border="1" cellspacing="2" cellpadding="2">
        <thead>
            <tr>
                <th></th>
            </tr>
        </thead>
        
        <form action="#" method="POST">
        <tbody>
            <tr>
                <td><h1 style="color: white;padding-left: 1050px;">Grand Total : <?php echo $total;?></h1></td>   
            </tr>
           <tr>
               <td> <input type="submit" value="Pay With Paytm" name="buynow" style="margin-left: 1100px;height: 40px;width: 180px;background-color: #FEC865;color: black" />  </td>
            </tr>
        </tbody>
        </form>
    </table>

    <script type="text/javascript">
    
    function changedata(data,qty)
    {
        
        $.ajax
        ({
            url:'changeqty.php',
            type:'POST',
            data:{quantity:qty,pid:data},
            
            success : function (result){
                location.href='buynow.php';
            },
            error : function (result){
              alert('Error in update qty');  
            }
        });
        
    }
    </script>
</body>

</html>

<?php 
include './sql_connection.php';
if (isset($_POST['buynow'])) {
    date_default_timezone_set('Asia/Kolkata');
    $uid=$_SESSION['userid'];
    $datetime= date('d-m-Y-h-i');
    
    $bill="insert into tbl_bill(user_id,order_date_time,total_amount) values ($uid,'$datetime',$total)";
    $f1= mysqli_query($con, $bill);
   
    $c="SELECT COUNT(*) FROM tbl_temp_cart where user_id=$uid";
    $cf= mysqli_query($con, $c);
    $crow= mysqli_fetch_row($cf);
    $count=$crow[0];
    
    $cart="SELECT * FROM tbl_temp_cart where user_id=$user";
    @$firecart= mysqli_query($con,$cart);
    $i=0;
    while ($row1 = mysqli_fetch_array($firecart)) {
        
            $sid[$i]=$row1[1]; 
            $qty[$i]=$row1[3];  
            $i++;
        
    }
    
    $show="select max(bill_id) from tbl_bill where user_id=$user";
            @$fire= mysqli_query($con,$show);
            @$row = mysqli_fetch_row($fire);
            $billid=$row[0];
            
     for ($i = 0;$i < $count; $i++) {
         
            $price="select price from tbl_subproduct_catergory where subproduct_id=$sid[$i]";
            $fprice= @mysqli_query($con, $price);
            $row2= @mysqli_fetch_row($fprice);
            $prodprice[$i]=$row2[0];
           
          
            $order="insert into tbl_order(bill_id,subproduct_id,qty,amount) values ($billid,$sid[$i],$qty[$i],$prodprice[$i])";
            $f11= mysqli_query($con, $order);
            if ($f11) {
                echo "<script>location.href='txnTest.php'</script>";
            } else {
                echo mysqli_error($con);
            }
            
            
        }    
}
?>
<?php include './footer.php';?>