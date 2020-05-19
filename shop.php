<?php include './index.php';?>

<?php 
include './sql_connection.php';

$select="SELECT tbl_company.company_name,tbl_product_category.product_name,tbl_subproduct_catergory.subproduct_id,subproduct_name,price,qty,image  from tbl_company,tbl_product_category,tbl_subproduct_catergory where tbl_company.company_id=tbl_subproduct_catergory.company_id AND tbl_product_category.product_id=tbl_subproduct_catergory.product_id";
$fire= mysqli_query($con, $select);
$male="SELECT tbl_company.company_name,tbl_product_category.product_name,tbl_subproduct_catergory.subproduct_id,subproduct_name,price,qty,image  from tbl_company,tbl_product_category,tbl_subproduct_catergory where tbl_company.company_id=tbl_subproduct_catergory.company_id AND tbl_product_category.product_id=tbl_subproduct_catergory.product_id and tbl_subproduct_catergory.type='m'";
$firemale= mysqli_query($con, $male);
$female="SELECT tbl_company.company_name,tbl_product_category.product_name,tbl_subproduct_catergory.subproduct_id,subproduct_name,price,qty,image  from tbl_company,tbl_product_category,tbl_subproduct_catergory where tbl_company.company_id=tbl_subproduct_catergory.company_id AND tbl_product_category.product_id=tbl_subproduct_catergory.product_id and tbl_subproduct_catergory.type='f'";
$firefemale= mysqli_query($con, $female);
?>
<section id="pricing" class="container our-pricing">
         <div class="row">
             <form method="POST">

             <input type="submit" style="border-radius: 20px;height: 30px; width: 90px;background: #000;color: #E9C36A;margin-left: 30px;cursor: pointer;border: 1px whitesmoke solid;" value="Male" name="male">
             <input type="submit" style="border-radius: 20px;height: 30px; width: 90px;background: #000;color: #E9C36A;margin-left: 30px;cursor: pointer;border: 1px whitesmoke solid;" value="Female" name="female">
             <input type="submit" style="border-radius: 20px;height: 30px; width: 90px;background: #000;color: #E9C36A;margin-left: 30px;cursor: pointer;border: 1px whitesmoke solid;" value="All" name="all">
             
             
             </form><br><br>
              
              
              <div class="our-pricing-wrapper clearfix">
                  
                   <?php 
                   if (isset($_POST['male'])) {
                   while ($row = mysqli_fetch_array($firemale)) {?>
                   <div class="our-price-box">                    
                        <div class="our-price-box-inner clearfix">
                             <div class="our-price-box-left">
                                  <div class="our-price-ic">
                                     <img src="<?php echo $row[6];?>" alt="" style="height: 40px;">
                                  </div>
                                  <div class="our-price-text">
                                      <a href="productinfo.php?id=<?php echo $row[2];?>"><h4><?php echo $row[0]." ".$row[3]." ".$row[1];?></h4></a>               
                                  </div>
                             </div>
                             <div class="our-price-box-right"> 
                                  <div class="start-price">
                                       <span></span>
                                       <b><?php echo "Rs.$row[4]";?> </b>
                                       <a href="cart.php?id=<?php echo $row[2];?>"> <img src="basket.png"  style="padding-top: 10px;width: 50px;height: 50px;cursor: grab"> </a>
                                       
                                  </div>
                             </div>
                        </div>                   
                    </div>
                   <?php }
                    } 
                   else if (isset($_POST['female'])) {
                   while ($row = mysqli_fetch_array($firefemale)) {?>
                   <div class="our-price-box">                    
                        <div class="our-price-box-inner clearfix">
                             <div class="our-price-box-left">
                                  <div class="our-price-ic">
                                      <img src="<?php echo $row[6];?>" alt="" style="height: 40px;">
                                  </div>
                                  <div class="our-price-text">
                                       <a href="productinfo.php?id=<?php echo $row[2];?>"><h4><?php echo $row[0]." ".$row[3]." ".$row[1];?></h4></a>                                  
                                  </div>
                             </div>
                             <div class="our-price-box-right"> 
                                  <div class="start-price">
                                       <span></span>
                                       <b><?php echo "Rs.$row[4]";?> </b>
                                        <a href="cart.php?id=<?php echo $row[2]?>"> <img src="basket.png"  style="padding-top: 10px;width: 50px;height: 50px;cursor: grab"> </a>
                                  </div>
                             </div>
                        </div>                   
                    </div>
                   <?php }
                    }
                    else {
                   while ($row = mysqli_fetch_array($fire)) {?>
                   <div class="our-price-box">                    
                        <div class="our-price-box-inner clearfix">
                             <div class="our-price-box-left">
                                  <div class="our-price-ic">
                                       <img src="<?php echo $row[6];?>" alt="">
                                  </div>
                                  <div class="our-price-text">
                                      <a href="productinfo.php?id=<?php echo $row[2];?>"><h4><?php echo $row[0]." ".$row[3]." ".$row[1];?></h4></a>                              
                                  </div>
                             </div>
                             <div class="our-price-box-right"> 
                                  <div class="start-price">
                                       <span></span>
                                       <b><?php echo "Rs.$row[4]";?> </b>
                                       <a href="cart.php?id=<?php echo $row[2]?>"> <img src="basket.png"  style="padding-top: 10px;width: 50px;height: 50px;cursor: grab"> </a>
                                  </div>
                             </div>
                        </div>
                    </div>
                   <?php }
                    }?>
                   
              </div>
         </div>
</section>
<?php include './footer.php';

 if (@$_GET['i']==1) {
    echo "<script>alert('Successfully Added in Cart');</script>";
}


 if (@$_GET['i']==2) {
    echo "<script>alert('Successfully Updated in Cart');</script>";
}


?>
