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
			<h4>Category Page</h4>
			<div class="site-pagination">
				<a href="./index.php">Home</a> /
				<a href="./category.php">Shop</a> /
			</div>
		</div>
	</div>to
	<!-- Page info end -->

	<!-- Category section -->
	<section class="category-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 order-2 order-lg-1">

				<?php
				include("includes/sidebar.php")
				?>

				<div class="col-lg-9 order-1 order-lg-2 mb-5 mb-lg-0">
					<div class="row" id="productmain">
						<div class="col-sm-6">
							<div class="mainimage">
								<div id="mycoursel" class="carousel slide" data-ride="carousel">
									<ol class="carousel-indicators">
										<li data-target="#mycarousel" data-slide-to="0" class="active"></li>
										<li data-target="#mycarousel" data-slide-to="1"></li>
										<li data-target="#mycarousel" data-slide-to="2"></li>
									</ol>								
									<div class="carousel-inner"><!--carousel-inner start -->
										<div class="item active">
											<center>
												<img src="admin/product_images/single-product/1.jpg" class="img-responsive">
											</center>
										</div>

										<div class="item">
											<center>
												<img src="admin/product_images/single-product/2.jpg" class="img-responsive">
											</center>
										</div>

										<div class="item">
											<center>
												<img src="admin/product_images/single-product/3.jpg" class="img-responsive">
											</center>
										</div>

									</div><!--carousel-inner End -->

									<a href="#mycarousel" class="left carousel-control" data-slide="prev">
										<span class="glyphicon glyphicon-chevron-left"></span>
										<span class="sr-only">Previous</span>
									</a>

									<a href="#mycarousel" class="right carousel-control" data-slide="next">
										<span class="glyphicon glyphicon-chevron-right "></span>
										<span class="sr-only">Next</span>
									</a>
								</div>
							</div>
						</div>

					</div>

					</div>
				</div>
			</div>
		</div>
	</section>



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
