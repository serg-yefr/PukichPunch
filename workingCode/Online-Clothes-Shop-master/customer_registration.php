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
	<?php include('C:\xampp\htdocs\divisima\header.php'); ?>
<!-- Header section End-->
	<!-- Page info -->
	<div class="page-top-info">
		<div class="container">
			<h4>Create Account</h4>
			<div class="site-pagination">
				<a href="./index.php">Home</a> /
				<a href="./customer_registration.php">Registration</a>
			</div>
		</div>
	</div>
	<!-- Page info end -->






	<!-- Category section -->
	<section class="category-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 order-2 order-lg-1">

				<?php
				include("includes/sidebar.php")
				?>

				<div class="col-lg-9  order-1 ">
					<div class="row">
						<div class="col-lg-6 col-sm-12">
									<center>
					<h2>Customer Registration</h2>
				</center>


				<form action="contact_us.php" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label>Customer Name</label>
				<input type="text" name="c_name" required="" class="form-control">
			</div>
			<div class="form-group">
				<label>Customer Email</label>
				<input type="text" name="c_email" required="" class="form-control">
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="Password" name="c_password" required="" class="form-control">
			</div>
			<div class="form-group">
				<label>Confirm Password</label>
				<input type="Password" name="confirm_c_password" required="" class="form-control">
			</div>
			<div class="form-group">
				<label>State</label>
				<input type="text" name="" required="c_state" class="form-control">
			</div>
			<div class="form-group">
				<label>Contact Number</label>
				<input type="text" name="c_number" required="" class="form-control">
			</div>
			<div class="form-group">
				<label>Address</label>
				<input type="text" name="c_address" required="" class="form-control">
			</div>
			<div class="form-group">
				<label>Image</label>
				<input type="file" name="c_image" required="" class="form-control">
			</div>			
			<div class="text-center">
				<button type="submit" name="submit" class="btn-btn-primary">
				<i class="fa fa-user-md"></i>Submit
				</button>
			</div>
				</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Category section end -->


	<!-- Footer section Start -->
	<?php include('C:\xampp\htdocs\divisima\footer.php'); ?>

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
