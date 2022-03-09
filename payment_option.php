<?php
include('dbconn.php');
?>
<!DOCTYPE html>
<html>
<head>
<title></title>
<link rel="stylesheet" href="biulded_files/font awesome/css/all.min.css">
<link rel="stylesheet" href="biulded_files/bootstrap/css/bootstrap.min.css">
<script src="biulded_files/bootstrap/js/bootstrap.min.js"></script>
<script src="biulded_files/bootstrap/js/jqry.js"></script>

</head>
<body>
	<div class="col-md-2"></div>
	<div align="center" class="col-md-8">
		<div class="panel panel-success">
			<div class="panel-heading">
				<h4>Payment Option for You</h4>
				<?php
				$ip= getIPaddress();
				$get_customer= "select * from customers where customer_ip='$ip'";
				$run_customer= mysqli_query($con, $get_customer);
				$customer= mysqli_fetch_array($run_customer);

				$customer_id= $customer['customer_id'];
				?>
			</div>
			<div class="panel-body">
				<b>Pay With</b><img src="image/PayPal-Credit-Cards-Logo-1.png" width="60%">OR  <a href="order.php?c_id=<?php echo $customer_id;?>">Pay Offline</a>
			</div>
			<div class="panel-footer alert-danger">
				If you selected "Pay Offline" option then please check your email or account to find the invoice No for your Order.... Thank You!!
			</div>
		</div>
	</div>
</body>
</html>