<?php include './index.php';
?>
<html>
    <head>
        <style>
            @import url(//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css);

fieldset, label { margin: 0; padding: 0; }
body{ margin: 20px; }
h1 { font-size: 1.5em; margin: 10px; }

/****** Style Star Rating Widget *****/

.rating { 
  border: none;
  float: left;
}

.rating > input { display: none; } 
.rating > label:before { 
  margin: 5px;
  font-size: 1.25em;
  font-family: FontAwesome;
  display: inline-block;
  content: "\f005";
}

.rating > .half:before { 
  content: "\f089";
  position: absolute;
}

.rating > label { 
  color: #ddd; 
 float: right; 
}

/***** CSS Magic to Highlight Stars on Hover *****/

.rating > input:checked ~ label, /* show gold star when clicked */
.rating:not(:checked) > label:hover, /* hover current star */
.rating:not(:checked) > label:hover ~ label { color: #FFD700;  } /* hover previous stars in list */

.rating > input:checked + label:hover, /* hover current star when changing rating */
.rating > input:checked ~ label:hover,
.rating > label:hover ~ input:checked ~ label, /* lighten current selection */
.rating > input:checked ~ label:hover ~ label { color: #FFED85;  } 
        </style>
    </head>
    <body style="background-image: url(images/price-banner.jpg)">
    <?php
$id=$_GET['id'];
include './sql_connection.php';

$select="SELECT tbl_company.company_name,tbl_product_category.product_name,tbl_subproduct_catergory.subproduct_name,subproduct_info,price,image  from tbl_company,tbl_product_category,tbl_subproduct_catergory where tbl_company.company_id=tbl_subproduct_catergory.company_id AND tbl_product_category.product_id=tbl_subproduct_catergory.product_id AND tbl_subproduct_catergory.subproduct_id=$id";
$fire= mysqli_query($con, $select);
while ($row = mysqli_fetch_array($fire)) {
    ?>
        <div style="padding-top: 50px">
        <div style="float: left;height: 500px;width: 550px;padding-left: 150px;">
            <img src="<?php echo $row[5];?>" alt="img" height="500px" width="400px">
        </div>
        <div style="float: right;height: 400px;width: 800px;">
            <h1 style="color: white"><?php echo "$row[0] $row[1] $row[2]";?></h1><br>
            
            <h3 style="color: white"><?php echo "$row[3]";?></h3><br>
            <h2>Rs.<?php echo "$row[4]";?></h2>
            <a href="cart.php?id=<?php echo $id;?>"> <img src="basket.png"  style="padding-top: 10px;width: 70px;height: 80px;cursor: grab"> </a>
        </div>
            </div>  
         <?PHP
  if (@$_SESSION['userid'])
  {
      $uid= $_SESSION['userid'];
      
      $givefeed="SELECT * from tbl_feedback where subproduct_id=$id and status='pending' and user_id=$uid";
$check= mysqli_query($con, $givefeed);
?>
        <form action="feedback.php" method="POST">
       
<div style="padding-top: 500px;padding-left: 150px;">
<?php while ($row = mysqli_fetch_array($check)) {
    ?>
         <h1 style="color: white">Rate this product</h1>
         
            <input type="hidden" value="<?php echo "$row[0]";?>" name="fid">
         <input type="hidden" value="<?php echo "$id";?>" name="id">
    <fieldset class="rating">
    <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
    <input type="radio" id="star4half" name="rating" value="4.5" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
    <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
    <input type="radio" id="star3half" name="rating" value="3.5" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
    <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
    <input type="radio" id="star2half" name="rating" value="2.5" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
    <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
    <input type="radio" id="star1half" name="rating" value="1.5" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
    <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
    <input type="radio" id="starhalf" name="rating" value="0.5" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
</fieldset>
         <br>
         <hr>
          <h1 style="color: white">Review this product</h1>
         
          <textarea name="feedback" rows="4" cols="40"> <?php echo "$row[4]";?> </textarea><br>
            <input type="submit" value="Submit" name="submit" style="margin-left: 1100px;height: 40px;width: 180px;background-color: #FEC865;color: black;border: 0px;cursor: pointer"/>
            <br>
            <hr>
      
        
    <?php
}
    ?>
              </div>
        
 </form>
         <?php
}
    ?>
<?php
}
$query="SELECT * from tbl_feedback where subproduct_id=$id and status='complete'";
$fire1= mysqli_query($con, $query);
?>
        <br><br>        
<div style="padding-left: 150px;">
    <h1 style="color: white">Customer's Feedbacks</h1><br>
<?php while ($row = mysqli_fetch_array($fire1)) {
    ?>
        
            <label>
                <?php 
                $name="select name from tbl_user where user_id=$row[1]";
                $query1= mysqli_query($con, $name);
                $row1 = mysqli_fetch_array($query1);
                echo "<h3 style=color:white>$row1[0]</h3>";
                ?>
            </label>
    <?php 
    $star=$row[3];
if ($star==4) {?>
    <fieldset class="rating">
    <input type="radio" id="star5" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
    <input type="radio" id="star4half" value="4.5" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
    <input type="radio" id="star4" value="4" checked="checked"/><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
    <input type="radio" id="star3half" value="3.5" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
    <input type="radio" id="star3"  value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
    <input type="radio" id="star2half"  value="2.5" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
    <input type="radio" id="star2"  value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
    <input type="radio" id="star1half"  value="1.5" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
    <input type="radio" id="star1" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
    <input type="radio" id="starhalf" value="0.5" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
</fieldset> 

    <?php
    
}
if ($star==3) {?>
    <fieldset class="rating">
    <input type="radio" id="star5"  value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
    <input type="radio" id="star4half"  value="4.5" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
    <input type="radio" id="star4" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
    <input type="radio" id="star3half"  value="3.5" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
    <input type="radio" id="star3" value="3" checked="checked" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
    <input type="radio" id="star2half" value="2.5" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
    <input type="radio" id="star2" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
    <input type="radio" id="star1half" value="1.5" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
    <input type="radio" id="star1"  value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
    <input type="radio" id="starhalf" value="0.5" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
</fieldset> 

    <?php
    
}
if ($star==5) {?>
    <fieldset class="rating">
    <input type="radio" id="star5"  value="5" checked="checked"  /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
    <input type="radio" id="star4half"  value="4.5" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
    <input type="radio" id="star4" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
    <input type="radio" id="star3half"  value="3.5" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
    <input type="radio" id="star3" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
    <input type="radio" id="star2half" value="2.5" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
    <input type="radio" id="star2" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
    <input type="radio" id="star1half" value="1.5" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
    <input type="radio" id="star1"  value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
    <input type="radio" id="starhalf" value="0.5" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
</fieldset> 

    <?php
    
}
if ($star==2) {?>
    <fieldset class="rating">
    <input type="radio" id="star5"  value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
    <input type="radio" id="star4half"  value="4.5" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
    <input type="radio" id="star4" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
    <input type="radio" id="star3half"  value="3.5" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
    <input type="radio" id="star3" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
    <input type="radio" id="star2half" value="2.5" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
    <input type="radio" id="star2" value="2" checked="checked" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
    <input type="radio" id="star1half" value="1.5" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
    <input type="radio" id="star1"  value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
    <input type="radio" id="starhalf" value="0.5" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
</fieldset> 

    <?php
    
}
if ($star==1) {?>
    <fieldset class="rating">
    <input type="radio" id="star5"  value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
    <input type="radio" id="star4half"  value="4.5" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
    <input type="radio" id="star4" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
    <input type="radio" id="star3half"  value="3.5" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
    <input type="radio" id="star3" value="3"  /><label class = "full" for="star3" title="Meh - 3 stars"></label>
    <input type="radio" id="star2half" value="2.5" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
    <input type="radio" id="star2" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
    <input type="radio" id="star1half" value="1.5" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
    <input type="radio" id="star1"  value="1" checked="checked"/><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
    <input type="radio" id="starhalf" value="0.5" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
</fieldset> 

    <?php
    
}
?>
            <textarea name="feedback" rows="4" cols="40"disabled="disable"> <?php echo "$row[4]";?> </textarea>
            <br>
      
        
    <?php
}
    ?>
              </div>
        
     
        
</body>
</html>

<?php
include './footer.php';
    ?>