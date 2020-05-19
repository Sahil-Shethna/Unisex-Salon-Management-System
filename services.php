
<?php 
include './index.php';
include './sql_connection.php';

$select="SELECT tbl_service.service_name,tbl_sub_service.* FROM tbl_service,tbl_sub_service WHERE tbl_service.service_id=tbl_sub_service.service_id";
$fire= mysqli_query($con, $select);
$male="SELECT tbl_service.service_name,tbl_sub_service.* FROM tbl_service,tbl_sub_service WHERE tbl_service.service_id=tbl_sub_service.service_id and tbl_sub_service.type='m'";
$firemale= mysqli_query($con, $male);
$female="SELECT tbl_service.service_name,tbl_sub_service.* FROM tbl_service,tbl_sub_service WHERE tbl_service.service_id=tbl_sub_service.service_id and tbl_sub_service.type='f'";
$firefemale= mysqli_query($con, $female);
$hair="SELECT tbl_service.service_name,tbl_sub_service.* FROM tbl_service,tbl_sub_service WHERE tbl_service.service_id=tbl_sub_service.service_id and tbl_sub_service.service_id=1";
$firehair= mysqli_query($con, $hair);
$bleach="SELECT tbl_service.service_name,tbl_sub_service.* FROM tbl_service,tbl_sub_service WHERE tbl_service.service_id=tbl_sub_service.service_id and tbl_sub_service.service_id=2 OR tbl_service.service_id=tbl_sub_service.service_id and tbl_sub_service.service_id=3";
$firebleach= mysqli_query($con, $bleach);
$massage="SELECT tbl_service.service_name,tbl_sub_service.* FROM tbl_service,tbl_sub_service WHERE tbl_service.service_id=tbl_sub_service.service_id and tbl_sub_service.service_id=4";
$firemassage= mysqli_query($con, $massage);
$makeup="SELECT tbl_service.service_name,tbl_sub_service.* FROM tbl_service,tbl_sub_service WHERE tbl_service.service_id=tbl_sub_service.service_id and tbl_sub_service.service_id=5";
$firemakeup= mysqli_query($con, $makeup);
$threading="SELECT tbl_service.service_name,tbl_sub_service.* FROM tbl_service,tbl_sub_service WHERE tbl_service.service_id=tbl_sub_service.service_id and tbl_sub_service.service_id=6";
$firethreading= mysqli_query($con,$threading);
$Pedimedi="SELECT tbl_service.service_name,tbl_sub_service.* FROM tbl_service,tbl_sub_service WHERE tbl_service.service_id=tbl_sub_service.service_id and tbl_sub_service.service_id=7 OR tbl_service.service_id=tbl_sub_service.service_id and tbl_sub_service.service_id=8";
$firePedimedi= mysqli_query($con,$Pedimedi);
?>
<section id="pricing" class="container our-pricing">
         <div class="row">
             <form method="POST">
<!--             <input type="submit" style="border-radius: 20px;height: 30px; width: 90px;background: #000;color: #E9C36A;margin-left: 30px;" value="All" name="all">-->
             <input type="submit" style="border-radius: 20px;height: 30px; width: 90px;background: #000;color: #E9C36A;margin-left: 30px;cursor: pointer;border: 1px whitesmoke solid;" value="Male" name="male">
             <input type="submit" style="border-radius: 20px;height: 30px; width: 90px;background: #000;color: #E9C36A;margin-left: 30px;cursor: pointer;border: 1px whitesmoke solid;" value="Female" name="female">
             <input type="submit" style="border-radius: 20px;height: 30px; width: 90px;background: #000;color: #E9C36A;margin-left: 30px;cursor: pointer;border: 1px whitesmoke solid;" value="Hair" name="hair">
             <input type="submit" style="border-radius: 20px;height: 30px; width: 140px;background: #000;color: #E9C36A;margin-left: 30px;cursor: pointer;border: 1px whitesmoke solid;" value="Bleach & Facials" name="Bleach">
             <input type="submit" style="border-radius: 20px;height: 30px; width: 90px;background: #000;color: #E9C36A;margin-left: 30px;cursor: pointer;border: 1px whitesmoke solid;" value="Massages" name="Massages">
             <input type="submit" style="border-radius: 20px;height: 30px; width: 90px;background: #000;color: #E9C36A;margin-left: 30px;cursor: pointer;border: 1px whitesmoke solid;" value="Make-up" name="Make-up">
             <input type="submit" style="border-radius: 20px;height: 30px; width: 150px;background: #000;color: #E9C36A;margin-left: 30px;cursor: pointer;border: 1px whitesmoke solid;" value="Threading & Waxing " name="Threading">
             <input type="submit" style="border-radius: 20px;height: 30px; width: 150px;background: #000;color: #E9C36A;margin-left: 30px;cursor: pointer;border: 1px whitesmoke solid;" value="Pedicure & Menicure" name="Pedicure">         
             
             </form><br><br>
              <h2 class="heading-title">Our Services</h2>
              
              <div class="our-pricing-wrapper clearfix">
                  
                   <?php 
                   if (isset($_POST['male'])) {
                   while ($row = mysqli_fetch_array($firemale)) {?>
                   <div class="our-price-box">                    
                        <div class="our-price-box-inner clearfix">
                             <div class="our-price-box-left">
                                  <div class="our-price-ic">
                                      <img src="img/icon-male.png" alt="" style="height: 40px;">
                                  </div>
                                  <div class="our-price-text">
                                      <h4><?php echo $row[3];?></h4>                              
                                  </div>
                             </div>
                             <div class="our-price-box-right"> 
                                  <div class="start-price">
                                       <span></span>
                                       <b><?php echo "Rs.$row[4]";?> </b>
                                  </div>
                             </div>
                        </div>                   
                    </div>
                   <?php }
                    }?>
                  <?php 
                   if (isset($_POST['female'])) {
                   while ($row = mysqli_fetch_array($firefemale)) {?>
                   <div class="our-price-box">                    
                        <div class="our-price-box-inner clearfix">
                             <div class="our-price-box-left">
                                  <div class="our-price-ic">
                                      <img src="img/icon-female.png" alt="" style="height: 40px;">
                                  </div>
                                  <div class="our-price-text">
                                      <h4><?php echo $row[3];?></h4>                              
                                  </div>
                             </div>
                             <div class="our-price-box-right"> 
                                  <div class="start-price">
                                       <span></span>
                                       <b><?php echo "Rs.$row[4]";?> </b>
                                  </div>
                             </div>
                        </div>                   
                    </div>
                   <?php }
                    }?>
                  <?php 
                   if (isset($_POST['all'])) {
                   while ($row = mysqli_fetch_array($fire)) {?>
                   <div class="our-price-box">                    
                        <div class="our-price-box-inner clearfix">
                             <div class="our-price-box-left">
                                  <div class="our-price-ic">
                                       <img src="images/price-ic1.png" alt="">
                                  </div>
                                  <div class="our-price-text">
                                      <h4><?php echo $row[3];?></h4>                              
                                  </div>
                             </div>
                             <div class="our-price-box-right"> 
                                  <div class="start-price">
                                       <span></span>
                                       <b><?php echo "Rs.$row[4]";?> </b>
                                  </div>
                             </div>
                        </div>
                    </div>
                   <?php }
                    }?>
                   <?php 
                   if (isset($_POST['hair'])) {
                   while ($row = mysqli_fetch_array($firehair)) {?>
                   <div class="our-price-box">                    
                        <div class="our-price-box-inner clearfix">
                             <div class="our-price-box-left">
                                  <div class="our-price-ic">
                                      <img src="images/price-ic3.png" alt="">
                                  </div>
                                  <div class="our-price-text">
                                      <h4><?php echo $row[3];?></h4>                              
                                  </div>
                             </div>
                             <div class="our-price-box-right"> 
                                  <div class="start-price">
                                       <span></span>
                                       <b><?php echo "Rs.$row[4]";?> </b>
                                  </div>
                             </div>
                        </div>                   
                    </div>
                   <?php }
                    }?>
                  <?php 
                   if (isset($_POST['Bleach'])) {
                   while ($row = mysqli_fetch_array($firebleach)) {?>
                   <div class="our-price-box">                    
                        <div class="our-price-box-inner clearfix">
                             <div class="our-price-box-left">
                                  <div class="our-price-ic">
                                       <img src="images/price-ic1.png" alt="" >
                                  </div>
                                  <div class="our-price-text">
                                      <h4><?php echo $row[3];?></h4>                              
                                  </div>
                             </div>
                             <div class="our-price-box-right"> 
                                  <div class="start-price">
                                       <span></span>
                                       <b><?php echo "Rs.$row[4]";?> </b>
                                  </div>
                             </div>
                        </div>                   
                    </div>
                   <?php }
                    }?>
                   <?php 
                   if (isset($_POST['Massages'])) {
                   while ($row = mysqli_fetch_array($firemassage)) {?>
                   <div class="our-price-box">                    
                        <div class="our-price-box-inner clearfix">
                             <div class="our-price-box-left">
                                  <div class="our-price-ic">
                                       <img src="images/price-ic1.png" alt="">
                                  </div>
                                  <div class="our-price-text">
                                      <h4><?php echo $row[3];?></h4>                              
                                  </div>
                             </div>
                             <div class="our-price-box-right"> 
                                  <div class="start-price">
                                       <span></span>
                                       <b><?php echo "Rs.$row[4]";?> </b>
                                  </div>
                             </div>
                        </div>                   
                    </div>
                   <?php }
                    }?>
                   <?php 
                   if (isset($_POST['Make-up'])) {
                   while ($row = mysqli_fetch_array($firemakeup)) {?>
                   <div class="our-price-box">                    
                        <div class="our-price-box-inner clearfix">
                             <div class="our-price-box-left">
                                  <div class="our-price-ic">
                                       <img src="images/price-ic1.png" alt="">
                                  </div>
                                  <div class="our-price-text">
                                      <h4><?php echo $row[3];?></h4>                              
                                  </div>
                             </div>
                             <div class="our-price-box-right"> 
                                  <div class="start-price">
                                       <span></span>
                                       <b><?php echo "Rs.$row[4]";?> </b>
                                  </div>
                             </div>
                        </div>                   
                    </div>
                   <?php }
                    }?>
                   <?php 
                   if (isset($_POST['Threading'])) {
                   while ($row = mysqli_fetch_array($firethreading)) {?>
                   <div class="our-price-box">                    
                        <div class="our-price-box-inner clearfix">
                             <div class="our-price-box-left">
                                  <div class="our-price-ic">
                                       <img src="images/price-ic1.png" alt="">
                                  </div>
                                  <div class="our-price-text">
                                      <h4><?php echo $row[3];?></h4>                              
                                  </div>
                             </div>
                             <div class="our-price-box-right"> 
                                  <div class="start-price">
                                       <span></span>
                                       <b><?php echo "Rs.$row[4]";?> </b>
                                  </div>
                             </div>
                        </div>                   
                    </div>
                   <?php }
                    }?>
                  <?php 
                   if (isset($_POST['Pedicure'])) {
                   while (@$row = mysqli_fetch_array($firePedimedi)) {?>
                   <div class="our-price-box">                    
                        <div class="our-price-box-inner clearfix">
                             <div class="our-price-box-left">
                                  <div class="our-price-ic">
                                      <img src="images/price-ic2.png.png" alt="">
                                  </div>
                                  <div class="our-price-text">
                                      <h4><?php echo $row[3];?></h4>                              
                                  </div>
                             </div>
                             <div class="our-price-box-right"> 
                                  <div class="start-price">
                                       <span></span>
                                       <b><?php echo "Rs.$row[4]";?> </b>
                                  </div>
                             </div>
                        </div>                   
                    </div>
                   <?php }
                    }?>
              </div>
         </div>
</section>

<?php include './footer.php';?>

        