<?php
ob_start();
session_start();
@$b=$_GET['bill'];
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link href="apple-touch-icon.png" rel="apple-touch-icon">
    <link href="favicon.png" rel="icon">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Unisex Salon </title>
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script%7CLora:400,700" rel="stylesheet">
    <link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="plugins/bakery-icon/style.css">
    <link rel="stylesheet" href="plugins/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="plugins/owl-carousel/assets/owl.carousel.css">
    <link rel="stylesheet" href="plugins/jquery-bar-rating/dist/themes/fontawesome-stars.css">
    <link rel="stylesheet" href="plugins/bootstrap-select/dist/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="plugins/jquery-ui/jquery-ui.min.css">
    <link rel="stylesheet" href="plugins/slick/slick/slick.css">
    <link rel="stylesheet" href="plugins/lightGallery-master/dist/css/lightgallery.min.css">
    <link rel="stylesheet" href="css/style.css">
        </head>
    </head>
    <body>
        
        <div class="container" style="border: 2px solid black;width: 900px;margin-top: 40px;margin-left: 280px;background-color: silver" >
            <div class="ps-container"><a class="ps-logo"><img style="height: 130px;width:170px;padding-left: 30px;" src="download.png" alt=""></a></div>
        <div style="float: right;margin-top:-130px;margin-right: 100px; "> 
            <table>
                 <tr>
                    <td>
                        <h3 ><b style="font-family:comic ;">INVOICE NO :<?php echo $b; ?></b></h3>
                    </td>
                    
                </tr>
                <tr>
                    <td>
                        <h3><b>Thank You for your Order!!!</b></h3>
                    </td>
                    
                </tr>
                <tr>
                    <td>
                        <p><b>460,2th floor,Vr mall, Vesu</b></p>
                    </td>
                   
                    
                </tr>
                <tr>
                    <td>
                        <b> Phone:  &nbsp; 804-399-3580</b>
                    </td>
                    <td>
                        
                    </td>
                </tr>
                <tr>
                    <td>
                        <b> Email:  &nbsp; Unisexsalon@gmail.com</b>
                    </td>
                
              </tr>
             
            </table>
        </div>
          <?php
                include './sql_connection.php';
                  echo "<form action='#' method='post'>";
                  $email=$_SESSION['email'];
                  
                  
                      $sql="select * from tbl_user where email='$email'";
                        $result= mysqli_query($con, $sql);

                        $row= mysqli_fetch_assoc($result);
                        $id=$row['user_id'];
                        
                                
         ?>
        
        <div style="margin-top: 90px;margin-left: 10px;width: 1000px; ">
            <p> <b> Sold to:  </b>  <?php echo strtoupper($row['name']); ?> </p>
            

        </div>
        
            
        <div style="margin-top: 50px;">
             <table class="table ps-table ">
              <thead>
                  <?php 
                  $order="SELECT tbl_order.bill_id,subproduct_id,qty,amount from tbl_order,tbl_bill WHERE tbl_order.bill_id=tbl_bill.bill_id AND tbl_bill.bill_id=$b";
echo "<center>";
echo "<table style='color:black;margin-top:20px' class='table table-striped table-hover' id='myTable'>\n";
echo "<thead style='color:black'><tr><th>Product Name</th><th>Image</th><th>Price</th><th>Qty</th><th>Total Amount</th></tr></thead>";
if($res=mysqli_query($con, $order))
{
    while($row= mysqli_fetch_array($res))
    {
         $id=$row[1];
          $cart="SELECT subproduct_name,image FROM tbl_subproduct_catergory where subproduct_id=$id";
            $fire= mysqli_query($con, $cart);
            $row1= mysqli_fetch_array($fire);
           
        ?>
<tbody>
    <tr>
        <td><?php echo "$row1[0]" ?></td>
         <td> <img src="<?php echo $row1[1] ?>" style="height: 50px;width: 80px;"/> </td>
        <td><?php echo "$row[3]" ?></td>
        <td><?php echo "$row[2]" ?></td>
        <td><?php echo $row[2]*$row[3]; ?></td>
        
         

       <?php 
    }
}
echo "</table></center>";?>
                <hr>
          
             
        </div>
          
    </body>
    
</html>

<form method="post" ><center>
        <input type="submit"  name="dow"  class="ps-btn ps-btn--gray" style="color: black; "value="Download Bill" onclick="p()">

                       
                    </center>
                   
             <script>
             function p(){
                window.print();
            }
        </script>
            
        </form>

