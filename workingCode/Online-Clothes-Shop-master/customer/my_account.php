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
			<?php
				if(isset($_GET['my_order']))
				{
					include("my_order.php");
				}
			?>
		
			<!-- Including payOffline.php page Start-->
			<?php
				if( isset($_GET['pay_offline']))
				{
					include("pay_offline.php");
				}
			?>
			<!-- Including payOffline.php page End-->

			<!-- Including Edit Account.php page Start-->
		<?php
			if( isset($_GET['edit_act']))
			{
				include("edit_act.php");
			}

		?>
		<!-- Including Edit Account.php page End-->
<!-- Including Change Password.php page Start-->
		<?php
			if( isset($_GET['change_pass']))
			{
				include("change_password.php");
			}

		?>
<!-- Including Change Password.php page End-->

<!-- Including delete.php page Start-->
		<?php
			if( isset($_GET['delete_act']))
			{
				include("delete_ac.php");
			}

		?>
<!-- Including delete.php page End-->
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
