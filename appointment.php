<?php 
include './index.php';
include './sql_connection.php';
if (isset($_SESSION['userid'])) {
    
?>

<!DOCTYPE HTML>
<html>
<head>
<title>Appointment Booking </title>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/font-awesome.css" rel="stylesheet"> 
<link href="css/wickedpicker.css" rel="stylesheet" type='text/css' media="all" />
<link href="css/appointmentstyle.css" rel='stylesheet' type='text/css' />
<!--fonts--> 
<link href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
<!--//fonts--> 
 <script>
    function numberonly(evt){
        var ch=String.fromCharCode(evt.which);
        if (!/[0-9]/.test(ch)) {
            evt.preventDefault();
}
    }
    function charonly(evt){
        var ch=String.fromCharCode(evt.which);
        if (!/[A-z]/.test(ch)) {
            evt.preventDefault();
}
    }
    </script>
</head>
<body>
    <br>
    <br>
    <h1 style="color: white;font-weight: bolder"> Book Your Appointment</h1>
    <div class="bg-agile">
	<div class="book-reservation">
			<form action="#" method="post">
					<div class="form-date-w3-agileits">
						<label><i class="fa fa-user" aria-hidden="true"></i> Name :</label>
                                                <input type="text" name="name" placeholder="Name" required="" onkeypress="charonly(event)"/>
					</div>
					<div class="form-date-w3-agileits">
						<label><i class="fa fa-phone" aria-hidden="true"></i> Contact No :</label>
                                                <input type="text" name="cno" placeholder="Contact No" required="" maxlength="10" onkeypress="numberonly(event)"/>
					</div>
					 
                            <div class="form-left-agileits-w3layouts" >
							<label><i class="fa fa-server" aria-hidden="true"></i> Choose a Service :</label>
                                                        <select class="form-control" name="service">
                                                            <option selected="selected" disabled="disabled">Select Service</option>
								<?php 
                                                                $show="select * from tbl_service";
                                                                $fire= mysqli_query($con, $show);
                                                                if ($fire) {
                                                                    while ($row = mysqli_fetch_array($fire)) {
                                                                         echo "<option value='$row[0]'>$row[1]</option> ";   
                                                                    }
                                                                }                 
                                                                ?>
							</select>
					</div>
					<div class="form-left-agileits-w3layouts">
							<label><i class="fa fa-server" aria-hidden="true"></i>Choose a Package :</label>
                                                        <select class="form-control" name="package">
								<option selected="selected" disabled="disabled">Select Package</option>
								<?php 
                                                                $show="select * from tbl_package";
                                                                $fire= mysqli_query($con, $show);
                                                                if ($fire) {
                                                                    while ($row = mysqli_fetch_array($fire)) {
                                                                         echo "<option value='$row[0]'>$row[1]</option> ";   
                                                                    }
                                                                }                 
                                                                ?>
							</select>
					</div>
					<div class="clear"> </div>
                                        <div class="form-date-w3-agileits" style="padding-top: 30px;">
						<label><i class="fa fa-calendar" aria-hidden="true"></i> Booking Date :</label>
                                                <input name="date" type="date" min="<?php echo date('Y-m-d');?>" onchange="getapdata(this.value)">
					</div>
                                   
                                        <script>
                                        
                                        function getapdata(data)
                                        {
                                            $.ajax({
                                            
                                            url:'getaptime.php',
                                            type:'post',
                                            data:{date:data},
                                            
                                            success:function(result){
                                                $('#aptime').html(result);
                                            }
                                            
                                            });
                                        }
                                        
                                        </script>


					<div class="form-left-agileits-w3layouts" style="padding-top: 30px;" id="aptime">
							<label><i class="fa fa-clock-o" aria-hidden="true"></i> Time : </label>
                                                        
                                                        
                                        </div>
					<div class="make">
                                            <input type="submit" value="Book Appointment" name="book">
					</div>
			</form>
		</div>
   </div>
   <!--copyright-->
			<div class="copy w3ls">
	        </div>
		<!--//copyright-->
		<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
		<script type="text/javascript" src="js/wickedpicker.js"></script>
			<script type="text/javascript">
				$('.timepicker').wickedpicker({twentyFour: false});
			</script>


		<!-- Calendar -->
				<link rel="stylesheet" href="css/jquery-ui.css" />
				<script src="js/jquery-ui.js"></script>
				  <script>
						  $(function() {
							$( "#datepicker,#datepicker1,#datepicker2,#datepicker3").datepicker();
						  });
				  </script>
			<!-- //Calendar -->
</body>
</html>

<?php 
include './footer.php';
?>
<?php 
if (isset($_POST['book'])) {
    @session_start();
    $uid=$_SESSION['userid'];
    @$sid=$_POST['service'];
    @$pid=$_POST['package'];
   
    $date=$_POST['date'];
    $time=$_POST['time'];
    if ($pid=="") {
        $insert="insert into tbl_appointment_order(service_id,user_id,Appointment_date,Appointment_time) values ($sid,$uid,'$date','$time')";
    }
    elseif ($sid=="") {
        $insert="insert into tbl_appointment_order(package_id,user_id,Appointment_date,Appointment_time) values ($pid,$uid,'$date','$time')";
    }
 else {
        $insert="insert into tbl_appointment_order(service_id,package_id,user_id,Appointment_date,Appointment_time) values ($sid,$pid,$uid,'$date','$time')";
    }
    
    $f= mysqli_query($con, $insert);
    if ($f) {
        echo "<script>location.href='home.php?b=1'</script>";
        
    } else {
        echo mysqli_error($con);
    }
}


} else {
    header("Location:login.php?f=1");
}
?>