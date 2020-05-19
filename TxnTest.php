<?php
	header("Pragma: no-cache");
	header("Cache-Control: no-cache");
	header("Expires: 0");

?>
<?php 
include './sql_connection.php';
session_start();
@$user=$_SESSION['userid'];

$show="select max(bill_id) from tbl_bill where user_id=$user";
@$fire= mysqli_query($con,$show);
@$row = mysqli_fetch_row($fire);
$billid=$row[0];

$show1="select * from tbl_bill where bill_id=$billid";
$fire1= mysqli_query($con, $show1);
while ($row1 = @mysqli_fetch_array($fire1)) {
    @$u=$row1[1];
    @$finaltotal=$row1[3];
}
?>
<html>
<head>
<title>Merchant Check Out Page </title>
</head>
<body style="background-image: url(images/back2.jpg);width: 80%">
    
	<pre>
	</pre>
	<form method="post" action="pgRedirect.php">
            <table border="0.5" cellspacing="3" cellpadding="3" style="margin-left: 600px;margin-top: 150px;color: white"> 
                <center><h1 style="color: white;padding-top: 100px;padding-left: 250px;">Merchant Check Out Page Verify amount </h1></center>	
                <tbody>
				<tr>
					
					<td><h3>ORDER_ID :</h3></td>
                                        <td><input type="hidden" id="ORDER_ID" tabindex="1" maxlength="20" size="20" name="ORDER_ID" autocomplete="off" value="<?php echo  "ORDS" . rand(10000,99999999)?>">
                                            <h3><?php echo  "ORDS" . rand(10000,99999999)?></h3>
                                        </td>
				</tr>
				<tr>
					
					<td><h3>Total Payable Amount :</h3></td>
					<td>
                                            <input type="hidden"  id="CUST_ID" tabindex="2" maxlength="12" size="12" name="CUST_ID" value="<?php echo $u;?>">
                                            <input type="hidden" id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail">
                                            <input type="hidden" id="CHANNEL_ID" tabindex="4" maxlength="12" size="12" name="CHANNEL_ID" autocomplete="off" value="WEB">
                                            <input type="hidden" id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail">
                                            <input title="TXN_AMOUNT" tabindex="10" type="hidden" name="TXN_AMOUNT" value="<?php echo $finaltotal;?>" readonly="readonly">
                                            
                                            <h3><?php echo $finaltotal;?></h3>
                                        </td>
				</tr>
				<tr>
					<td></td>
                                        <td><input value="CheckOut" type="submit" onclick="" style="width: 150px;height: 40px;background-color: #FFC25D;border-color: black;cursor: pointer"></td>
					
				</tr>
			</tbody>
		</table>
	</form>
</body>
</html>