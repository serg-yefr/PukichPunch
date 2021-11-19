<?php
include("includes/db.php");
include("admin/functions/functions.php")
?>

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
	</div>
	<!-- Page info end -->


	<!-- Category section -->
	<section class="category-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 order-2 order-lg-1">
					
	<div class="filter-widget">
						<h2 class="fw-title">Product Categories</h2>
						<ul class="category-menu">
							
							<?php
								getPCats()
							?>

<!--
							<li><a href="category.php">JACKETS</a>
								<!- -<ul class="sub-menu">
									<li><a href="#">Midi Dresses <span>(2)</span></a></li>
									<li><a href="#">Maxi Dresses<span>(56)</span></a></li>
									<li><a href="#">Prom Dresses<span>(36)</span></a></li>
									<li><a href="#">Little Black Dresses <span>(27)</span></a></li>
									<li><a href="#">Mini Dresses<span>(19)</span></a></li>
								</ul> - ->
							</li>
							<li><a href="category.php">ACCESSORIES</a>
								<!- -<ul class="sub-menu">
									<li><a href="#">Midi Dresses <span>(2)</span></a></li>
									<li><a href="#">Maxi Dresses<span>(56)</span></a></li>
									<li><a href="#">Prom Dresses<span>(36)</span></a></li>
								</ul> - ->
								</li>
							<li><a href="category.php">SHOES</a></li>
							<li><a href="category.php">COATS</a></li>
							<li><a href="category.php">T-SHIRTS</a></li>
-->
						</ul>

					</div>
					<div class="filter-widget">
						<h2 class="fw-title">Categories</h2>
						<ul class="category-menu">
							<?php
								getCat()
							?>
						</ul>
					</div>
				</div>

				
				<div class="col-lg-9  order-1 order-lg-2 mb-5 mb-lg-0">
					<?php
						if( !isset($_GET['p_cat']) )
						{
							if( !isset( $_GET['cat_id']) )
								echo"
									<div class='box'>
									
										<h3>Shop</h3>
										<p> If you want domain name and shared hosting plan in low price then please visit www.teehosting.com or shared/ reseller hosting with cPanel
										</p>
									</div>
								";
						}


					?>
					<div class="row">
						<?php
							if( !isset($_GET['p_cat']) && !isset( $_GET['cat_id']) )
							{
								
									getAllPro();
							}

							else
							{
								getPcatPro();
								getCatPro();
							}

						?>




<!--					#	<?php
					#	if( !isset($_GET['p_cat']) )
					#	{
					#		if( !isset( $_GET['cat_id']) )
					#		{
		#			#			<?php
								#getAllPro();
					#			$per_page = 6;
					#			if( isset($_GET['page']))
					#			{
					#				$page = $_GET['page'];
					#			}
					#			else
					#				$page = 1;

					#			$start_from = ($page-1) + $per_page;
					#			$get_product = "select * from products order by 1 DESC LIMIT $start_from, $per_page";
					#			$run_pro = mysqli_query( $con, $get_product);

					#			while ($row = mysqli_fetch_array( $run_pro ) ) 
					#			{
					#					$pro_id = $row['product_id'];
					#					$pro_title = $row['product_title'];
					#					$pro_price = $row['product_price'];
					#					$pro_img1 = $row['product_img1'];

					#					echo"
					#						<div class='col-md-3 col=sm-6'>
					#							<div class='product-item'>
					#								<div class='pi-pic'>
					#									<a href='product.php?pro_id=$pro_id'>
					#										<img src='admin/product_images/single-product/$pro_img1' alt='' class='img-responsive'>
					#									</a>
					#									<div class='pi-links'>
					#										<a href='product.php?pro_id=$pro_id' class='add-card'><i class='flaticon-bag'></i><span>ADD TO CART</span></a>
					#										<a href='product.php?pro_id=$pro_id' class='wishlist-btn'><i class='flaticon-heart'></i></a>
					#									</div>
					#								</div>
					#								<div class='pi-text'>
					#									<h6 class='price'> INR $pro_price </h6>
					#									<p>$pro_title</a> </p>

					#								</div>
					#							</div>
					#						</div>

					#						";
					#			}
							

						?>

						<center>
							<ul class="pagination">
								#<?php
								#	$query = "select * from products";
								#	$result = mysqli_query($con, $query);
								#	$total_record = mysqli_num_rows($result);
								#	$total_pages = ceil( $total_record/ $per_page );

								#	echo"
								#		<li><a href='category.php?page=1'> ".'First Page'."</a> </li>

								#	";

								#	for( $i=1; $i <= $total_pages; $i++)
								#	{
								#		echo"
								#		<li><a href='category.php?page=".$i."'>".$i."</a></li>
								#		";
								#	}
								#	echo"

								#		<li><a href='category.php?page=$total_pages'> ".'Last Page'."</a> </li>
								#	";
								#	}	

								#}
								#?>
							</ul>
						</center>
					-->
						<div class="text-center w-100 pt-3">
							<button class="site-btn sb-line sb-dark">LOAD MORE</button>
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
