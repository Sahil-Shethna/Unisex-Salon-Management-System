<?php
session_start();
$usr=$_SESSION['userid'];
header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");

// following files need to be included
require_once("./lib/config_paytm.php");
require_once("./lib/encdec_paytm.php");

$paytmChecksum = "";
$paramList = array();
$isValidChecksum = "FALSE";

$paramList = $_POST;
$paytmChecksum = isset($_POST["CHECKSUMHASH"]) ? $_POST["CHECKSUMHASH"] : ""; //Sent by Paytm pg

//Verify all parameters received from Paytm pg to your application. Like MID received from paytm pg is same as your application�s MID, TXN_AMOUNT and ORDER_ID are same as what was sent by you to Paytm PG for initiating transaction etc.
$isValidChecksum = verifychecksum_e($paramList, PAYTM_MERCHANT_KEY, $paytmChecksum); //will return TRUE or FALSE string.


if($isValidChecksum == "TRUE") {
	echo "<b>Checksum matched and following are the transaction details:</b>" . "<br/>";
	if ($_POST["STATUS"] == "TXN_SUCCESS") {
		echo "<b>Transaction status is success</b>" . "<br/>";
		//Process your transaction here as success transaction.
		//Verify amount & order id received from Payment gateway with your application's order id and amount.
                include './sql_connection.php';
                $c="SELECT COUNT(*) FROM tbl_temp_cart where user_id=$usr";
                $cf= mysqli_query($con, $c);
                $crow= mysqli_fetch_row($cf);
                $count=$crow[0];
                
                $cart="SELECT * FROM tbl_temp_cart where user_id=$usr";
                @$firecart= mysqli_query($con,$cart);
                $i=0;
                while ($row1 = mysqli_fetch_array($firecart)) {

                        $sid[$i]=$row1[1];  
                        $qty[$i]=$row1[3];
                        $i++;

                }
                 for ($i = 0;$i < $count; $i++) {
      
                     $fatchqty="select qty from tbl_subproduct_catergory where subproduct_id=$sid[$i]";
                     $fire= mysqli_query($con, $fatchqty);
                     $r = mysqli_fetch_array($fire);
                     $oldqty=$r[0];
                     $totalqty=$oldqty-$qty[$i];
                   
                     $updateqty="update tbl_subproduct_catergory set qty=$totalqty where subproduct_id=$sid[$i]";
                    $updatefire=mysqli_query($con, $updateqty);    
                    
                    if ($updatefire) {

                    } else {
                        echo mysqli_error($con);
                    }
                }
                for ($i = 0;$i < $count; $i++) {
      
                    $feedback="insert into tbl_feedback(user_id,subproduct_id) values ($usr,$sid[$i])";
                    $feed= mysqli_query($con, $feedback);
                    if ($feed) {

                    } else {
                        echo mysqli_error($con);
                    }
                }
                $delete="delete from tbl_temp_cart where user_id=$usr";
                $del= mysqli_query($con, $delete);
                if ($del) {
                    header("Location:home.php?a=0");
                }
	}
	else {
		echo "<b>Transaction status is failure</b>" . "<br/>";
                include './sql_connection.php';
   
                
                $show="select max(bill_id) from tbl_bill where user_id=$usr";
                @$fire= mysqli_query($con,$show);
                @$row1 = mysqli_fetch_row($fire);
                $billid=$row1[0];
                
                $order="delete from tbl_order where bill_id=$billid";
                $delorder= mysqli_query($con, $order);
                
                $bill="delete from tbl_bill where bill_id=$billid";
                $delbill= mysqli_query($con, $bill);
                
                if ($delbill) {
                    header("Location:buynow.php?a=2");
                }
        }

	if (isset($_POST) && count($_POST)>0 )
	{ 
		foreach($_POST as $paramName => $paramValue) {
				echo "<br/>" . $paramName . " = " . $paramValue;
		}
	}
	

}
else {
	echo "<b>Checksum mismatched.</b>";
	//Process transaction as suspicious.
}

?>