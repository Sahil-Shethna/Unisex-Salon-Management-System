<?php 
include './index.php';
include './sql_connection.php';

$select="SELECT * FROM tbl_package ";
$fire= mysqli_query($con, $select);

?>
<section id="pricing" class="container our-pricing">
         <div class="row">
              <h2 class="heading-title">Our Packages</h2>
              <?php while ($row = mysqli_fetch_array($fire)) {
                  ?>
              
              <div class="our-pricing-wrapper clearfix">
                   <div class="our-price-box">
                        <div class="our-price-box-inner clearfix">
                             <div class="our-price-box-left">
                                  <div class="our-price-ic">
                                       <img src="images/price-ic1.png" alt="">
                                  </div>
                                  <div class="our-price-text">
                                      <h4><?php echo "$row[1]"; ?></h4>
                                      <p><?php 
                                              $arr = explode(",", $row[2]);
                                              for($i = 0; $i < sizeof($arr) ; $i++)
                                              {
                                                  echo "$arr[$i]"."<br>";
                                                  
                                              }
                                              
                                              ?></p>
                                      
                                  </div>
                             </div>
                             <div class="our-price-box-right">
<!--                                  <div class="price-discount">
                                       <span></span>
                                  </div> -->
                                  <div class="start-price">
                                       <span>Package Price</span>
                                       <b><?php echo "&#8377 $row[3]/-"?></b>
                                  </div>
                             </div>
                        </div>
                    </div>
                     <?php }?>
              </div>
         </div>
</section>

<?php include './footer.php';?>