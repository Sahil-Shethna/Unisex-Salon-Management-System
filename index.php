<!DOCTYPE html>
<html>
<head>
    <title>The World Famous -Barbershop</title>
    <link rel="shortcut icon" href="logo1.2-1.png" type="image/x-icon" />
    <link rel="stylesheet" href="css/smoothslides.theme.css" type="text/css" />	                            	<!--Main slider css-->
    <link rel="stylesheet" href="css/slick.css" type="text/css" />												<!--Service slider css-->
    <link rel="stylesheet" href="css/jquery.fancybox.css" type="text/css" />									<!--fancybox css-->
    <link rel="stylesheet" href="css/styles.css" type="text/css" />												<!--custom css-->
    <link rel="stylesheet" href="css/icofont.css" type="text/css" />											<!--Icofont css-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
</head>
<body>
            <div class="row">
             <div class="header">
                   <div class="mobile-ic">
                        <span></span>
                        <span></span>
                        <span></span>
                   </div>
                   
                   <div class="table-cell">
                        <ul>
                            <li><a href="home.php" title="Home">Home</a></li>
                          <li><a href="about.php" title="Aboutus">Aboutus</a></li>
                          <li><a href="services.php" title="Services">Services</a></li>
                          <li><a href="packages.php" title="Packages">Packages</a></li>
                          <li><a href="appointment.php" title="Appointment">Appointment</a></li>
                        </ul>
                   </div>
                   <div class="logo">
                       <a href="home.php" title="Barber Shop"><img src="download.png" alt="logo"></a>
                   </div>
                   <div class="table-cell">
                        <ul>  
                          
                          <li><a href="gallery.php" title="Gallery">Gallery</a></li>
                          <li><a href="shop.php" title="Shop">Shop</a></li>
                          
                          <?php
                           @session_start();
                           if (isset($_SESSION['is_customer'])) {
                               $uname=$_SESSION['name'];                            
//                              echo "<li><a href='myprofile.php' title='my profile'>$uname</a></li>";
                              echo "<li><a href='myprofile.php' title='my profile'>Edit Profile</a></li>";
                              echo "<li><a href='buynow.php' title='Cart'>Cart</a></li>";
                               echo "<li><a href='myorder.php' title='MYORDER'>Myorder</a></li>";
                                echo "<li><a href='logout.php' title='Logout'>Logout</a></li>";
                            }
                            else{
                                echo "<li><a href='location.php' title='Location'>Location</a></li>";
                                echo "<li><a href='login.php' title='Login'>Login</a></li>";
                            }                          
                          ?>
                        </ul>
                   </div>
               </div>
           </div>
</section>

<script type="text/javascript" src="js/jquery1.12.4.min.js"></script>     <!--jquery Reference-->
<script type="text/javascript" src="js/jquery.fancybox.js"></script>      <!--fancybox jquery-->
<script type="text/javascript" src="js/smoothslides-2.2.1.min.js"></script>     <!--smooth slider js-->
<script type="text/javascript" src="js/slick.min.js"></script>          <!--Service slider jquery-->
<script type="text/javascript" src="js/custom.js"></script>           <!--custom jquery Reference-->


</body>
</html>