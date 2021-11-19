<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>ShopDresses | eCommerce Website</title>
	<meta charset="UTF-8">
	<meta name="description" content=" Divisima | eCommerce Template">
	<meta name="keywords" content="divisima, eCommerce, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,700,700i" rel="stylesheet">


	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/flaticon.css"/>
	<link rel="stylesheet" href="css/slicknav.min.css"/>
	<link rel="stylesheet" href="css/jquery-ui.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="css/animate.css"/>
	<link rel="stylesheet" href="css/style.css"/>


	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>
<!-- Header section -->
	<?php include('C:\xampp\htdocs\divisima\customer\c_header.php'); ?>
<!-- Header section End-->
	<!-- Page info -->
	<div class="page-top-info">
		<div class="container">
			<h4>Create Account</h4>
			<div class="site-pagination">
				<a href="../index.php">Home</a> /
				<a href="./my_account.php">My Account</a>
			</div>
		</div>
	</div>
	<!-- Page info end -->





		<div class="container">
			<div class="col-md-3">

				<?php
				include("includes/sidebar.php")
				?>	
			</div>

			<div class="col-md-9">
				<div class="box">
					<h6 align="center">Please confirm your payment</h6>
					<form action="confirm.php" method="post" enctype="multipart/form-data">
						<div class="form-group">
							<label>Invoice Number</label>
							<input type="text" class="form-control" name="invoice_number" required="">
						</div>
					</form>
				</div>
						<div class="form-group">
							<label>Amount</label>
							<input type="text" class="form-control" name="amount" required="">
						</div>
						<div class="form-group">
							<label>Select Payment Mode</label>
							<select class="form-control" name="payment_mode">
								<option>Bank Transfer</option>
								<option>Paypal</option>
								<option>PayuMoney</option>
								<option>PayTm</option>
							</select>
						</div>
						<div class="form-group">
							<label>Transaction Number</label>
							<input type="text" class="form-control" name="trfr_number" required="">
						</div>
						
						<div class="form-group">
							<label>Payment Date</label>
							<input type="Date" class="form-control" name="date" required="">
						</div>
						<div class="text-center">
							<button type="submit" name="confirm_payment" class="btn btn-primary btn-lg">
								Confirm Payment
							</button>
						</div>
					</form>
				</div>

		</div>


	<!-- Footer section Start -->
	<?php include('C:\xampp\htdocs\divisima\customer\c_footer.php'); ?>

	<!-- Footer section end -->

	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.slicknav.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.nicescroll.min.js"></script>
	<script src="js/jquery.zoom.min.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<script src="js/main.js"></script>

	</body>
</html>
