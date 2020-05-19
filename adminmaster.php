<?php 
session_start();
if (isset($_SESSION['is_admin'])){?>
<!DOCTYPE html>
<html lang="zxx">
<head>
<title>An Admin Panel | Home</title>
<!-- custom-theme -->

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/component.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/export.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/flipclock.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/circles.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style_grid.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

<!-- font-awesome-icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome-icons -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
</head>
<body style="background: gainsboro">
<!-- banner -->
<div class="wthree_agile_admin_info">
		  
		  <div class="w3_agileits_top_nav">
			<ul id="gn-menu" class="gn-menu-main">
			  		
				<li class="gn-trigger">
					<a class="gn-icon gn-icon-menu"><i class="fa fa-bars" aria-hidden="true"></i><span>Menu</span></a>
					<nav class="gn-menu-wrapper">
						<div class="gn-scroller scrollbar1">
							<ul class="gn-menu agile_menu_drop">
                                                            <li><a href="dashboard.php"> <i class="fa fa-tachometer"></i> Dashboard</a></li>
                                                                <li><a href="viewappointment.php"> <i class="fa fa-tachometer"></i>VIew Appointments </a></li>
                                                                <li class="page">
									<a><i class="fa fa-files-o" aria-hidden="true"></i> Employee <i class="fa fa-angle-down" aria-hidden="true"></i></a>
										 <ul class="gn-submenu">
                                                                                     
                                                                                     <li class="mini_list_agile"> <a href="addemployee.php"> <i class="fa fa-caret-right" aria-hidden="true"></i> Add Employee</a></li>
                                                                                     <li class="mini_list_w3"><a href="updateemployee.php"> <i class="fa fa-caret-right" aria-hidden="true"></i> Update Employee Profile</a></li>
                                                                                     <li class="mini_list_w3"><a href="viewemployee.php"> <i class="fa fa-caret-right" aria-hidden="true"></i> View Employee Details</a></li>	
									</ul>
								</li>
                                                               <li class="page">
									<a><i class="fa fa-files-o" aria-hidden="true"></i> Admin <i class="fa fa-angle-down" aria-hidden="true"></i></a>
										 <ul class="gn-submenu">
                                                                                     <li><a href="addadmin.php"><i class="fa fa-caret-right" aria-hidden="true"></i> Add Admin</a> </li>
                                                                                     <li><a href="viewadmin.php"><i class="fa fa-caret-right" aria-hidden="true"></i> View All Admin</a> </li>                      
									</ul>
								</li>
                                                                <li><a href="addservicepackage.php"> <i class="fa fa-plus" aria-hidden="true"></i> Add Services/Package</a></li>
                                                                <li><a href="managestock.php"> <i class="fa fa-plus" aria-hidden="true"></i> Manage Stock</a></li>
                                                                <li><a href="viewservicepackage.php"> <i class="fa fa-plus" aria-hidden="true"></i> View Services/Package</a></li>
                                                                <li><a href="addproduct.php"><i class="fa fa-map-o" aria-hidden="true"></i> Add Product</a></li>
                                                                <li><a href="viewproduct.php"><i class="fa fa-map-o" aria-hidden="true"></i> View Product</a></li>
								<li class="page">
									<a href="#"><i class="fa fa-files-o" aria-hidden="true"></i> My Profile <i class="fa fa-angle-down" aria-hidden="true"></i></a>
										 <ul class="gn-submenu">
                                                                                     
                                                                                    <li class="mini_list_agile"> <a href="logout.php"> <i class="fa fa-caret-right" aria-hidden="true"></i> Logout</a></li>
                                                                                     
                                                                           <li class="mini_list_agile error"><a href="changepassword.php"> <i class="fa fa-caret-right" aria-hidden="true"></i> Change Password </a></li>
	
										
									</ul>
								</li>
								
							</ul>
						</div><!-- /gn-scroller -->
					</nav>
				</li>
				<!-- //nav_agile_w3l -->
                                <a href="home.php" target="_blank"><img src="img/download.png" height="58px" width="150px"></a>
					
				

			</ul>
			<!-- //nav -->
			
		</div>
		<div class="clearfix"></div>
		<!-- //w3_agileits_top_nav-->
		<!-- /inner_content-->
				<div class="inner_content">
				    <!-- /inner_content_w3_agile_info-->
					<div class="inner_content_w3_agile_info">
					<!-- /agile_top_w3_grids-->
					   
				    </div>
					<!-- //inner_content_w3_agile_info-->
				</div>
		<!-- //inner_content-->
	</div>
<!-- banner -->
<!--copy rights start here-->

<!--copy rights end here-->
<!-- js -->

<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>

	<!-- /amcharts -->
				<script src="js/amcharts.js"></script>
		       <script src="js/serial.js"></script>
				<script src="js/export.js"></script>	
				<script src="js/light.js"></script>
	

	<!-- //amcharts -->
		<script src="js/chart1.js"></script>
				<script src="js/Chart.min.js"></script>
		<script src="js/modernizr.custom.js"></script>
		
		<script src="js/classie.js"></script>
		<script src="js/gnmenu.js"></script>
		<script>
			new gnMenu( document.getElementById( 'gn-menu' ) );
		</script>
			<!-- script-for-menu -->

<!-- /circle-->
	 <script type="text/javascript" src="js/circles.js"></script>
					         <script>
								var colors = [
										['#ffffff', '#fd9426'], ['#ffffff', '#fc3158'],['#ffffff', '#53d769'], ['#ffffff', '#147efb']
									];
								for (var i = 1; i <= 7; i++) {
									var child = document.getElementById('circles-' + i),
										percentage = 30 + (i * 10);
										
									Circles.create({
										id:         child.id,
										percentage: percentage,
										radius:     80,
										width:      10,
										number:   	percentage / 1,
										text:       '%',
										colors:     colors[i - 1]
									});
								}
						
				</script>
	<!-- //circle -->
	<!--skycons-icons-->
<script src="js/skycons.js"></script>
<script>
									 var icons = new Skycons({"color": "#fcb216"}),
										  list  = [
											"partly-cloudy-day"
										  ],
										  i;

									  for(i = list.length; i--; )
										icons.set(list[i], list[i]);
									  icons.play();
								</script>
								<script>
									 var icons = new Skycons({"color": "#fff"}),
										  list  = [
											"clear-night","partly-cloudy-night", "cloudy", "clear-day", "sleet", "snow", "wind","fog"
										  ],
										  i;

									  for(i = list.length; i--; )
										icons.set(list[i], list[i]);
									  icons.play();
								</script>
<!--//skycons-icons-->
<!-- //js -->
<script src="js/screenfull.js"></script>
		<script>
		$(function () {
			$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

			if (!screenfull.enabled) {
				return false;
			}

			

			$('#toggle').click(function () {
				screenfull.toggle($('#container')[0]);
			});	
		});
		</script>
		<script src="js/flipclock.js"></script>
	
	<script type="text/javascript">
		var clock;
		
		$(document).ready(function() {
			
			clock = $('.clock').FlipClock({
		        clockFace: 'HourlyCounter'
		    });
		});
	</script>
<script src="js/bars.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>

<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>


</body>

</html><?php 
}
 else {
    header("Location:login.php");
}?>