<?php include './index.php';
 if (isset($_GET['a'])) {
     $a=$_GET['a'];
 if (@$a==0) {
     echo "<script>alert('Transaction Successfully Done');</script>";
}
}
if (@$_GET['b']) {
    echo "<script>alert('Appointment Book Successfully')</script>";
}
?>
<div class="se-pre-con"></div>

<!--banner slider section -->
<section id="home" class="banner-slider-initial">
		<!--slider-->
        <div class="banner-slide-show-wrapper">
            <div class="banner-slider" id="banner-slide-show">
                 <div class="banner-slider-item">
                      <div class="banner-slider-item-img" style="background-image: url(images/3.jpg);">
                           <div class="banner-text">
                             <span>we make your hair</span>
                             <h1>Look Perfect</h1>
                             <p>The best place for your hairstyleLorem Ipsum is simply dummytext.</p>
                             <span class="much-img"><img src="images/much-img.png" alt=""></span>
                          </div>
                      </div>
                      
                 </div>
                 <div class="banner-slider-item">
                      <div class="banner-slider-item-img" style="background-image: url(images/2-1.jpg);">
                           <div class="banner-text">
                             <span>we are Unique</span>
                             <h1>Barber Shop</h1>
                             <p>The best place for your hairstyleLorem Ipsum is simply dummytext.</p>
                             <span class="much-img"><img src="images/much-img.png" alt=""></span>
                          </div>
                      </div>
                      
                 </div>
                 <div class="banner-slider-item">
                      <div class="banner-slider-item-img" style="background-image: url(images/1-3.jpg);">
                           <div class="banner-text">
                             <span>we are professional</span>
                             <h1>Salon </h1>
                             <p>The best place for your hairstyleLorem Ipsum is simply dummytext.</p>
                             <span class="much-img"><img src="images/much-img.png" alt=""></span>
                           </div>
                      </div>
                      
                 </div>
             </div>
             
         </div>
                
</section>

         <?php include './footer.php';?>

