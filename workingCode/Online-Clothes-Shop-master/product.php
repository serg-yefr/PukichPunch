<?php
include("includes/db.php");
include("admin/functions/functions.php")
?>


<?php
	if( isset($_GET['pro_id']) )
	{
		$pro_id = $_GET['pro_id'];
		$get_product = "select * from products where product_id = '$pro_id' ";
		$run_product = mysqli_query( $con, $get_product);
		$row_product = mysqli_fetch_array( $run_product);

		$p_cat_id = $row_product['p_cat_id'];
		$p_title = $row_product['product_title'];
		$p_price = $row_product['product_price'];
		$p_desc = $row_product['product_desc'];
		$p_img1 = $row_product['product_img1'];
		$p_img2 = $row_product['product_img2'];
		$p_img3 = $row_product['product_img3'];

		$get_p_cat = "select * from product_categories where p_cat_id = '$p_cat_id' ";
		$run_p_cat = mysqli_query( $con, $get_p_cat);
		$row_p_cat = mysqli_fetch_array($run_p_cat);
		
		$p_cat_id = $row_p_cat['p_cat_id'];
		$p_cat_title = $row_p_cat['p_cat_title'];
		#$p_cat_desc = $row_p_cat['product_desc'];




	}


?>



<?php
	if( isset($_GET['pro_id']))
	{
		$pro_id = $_GET['pro_id'];
		$get_product = "Select * from products where product_id = '$pro_id'";
		$run_product = mysqli_query($con, $get_product);
		$row = mysqli_fetch_array( $run_product);

		$p_cat_id = $row['p_cat_id'];
		$ca_cid = $row['cat_id'];
		$date = $row['date'];
		$product_title = $row['product_title'];
		$product_img1 = $row['product_img1'];
		$product_price = $row['product_price'];
		$product_desc = $row['product_desc'];
		$product_keyword = $row['product_keyword'];
	}
	else
	{	$pro_id = 1;
		$get_product = "Select * from products where product_id = '$pro_id'";
		$run_product = mysqli_query($con, $get_product);
		$row = mysqli_fetch_array( $run_product);

		$p_cat_id = $row['p_cat_id'];
		$ca_cid = $row['cat_id'];
		$date = $row['date'];
		$product_title = $row['product_title'];
		$product_img1 = $row['product_img1'];
		$product_price = $row['product_price'];
		$product_desc = $row['product_desc'];
		$product_keyword = $row['product_keyword'];
	

	}





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
				<a href="category.php?p_cat=<?php echo $p_cat_id;?>"><?php echo $p_cat_title; ?></a> /
				<?php echo $p_title;?>
			</div>
		</div>
	</div>
	<!-- Page info end -->




<!--<?php
	#addCart();
?>-->


	<!-- product section product.php?add_cart=<?php #echo $pro_id ?> -->

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method = "POST" class="form-horizontal">	

	<section class="product-section">
		<div class="container">
			<div class="back-link">
				<a href="./category.php"> &lt;&lt; Back to Category</a>
			</div>
			<div class="row">
				<div class="col-lg-6">
					<div class="product-pic-zoom">
						<img class="product-big-img" src="admin/product_images/single-product/<?php echo "$product_img1" ?>" alt="">
					</div>
					<div class="product-thumbs" tabindex="1" style="overflow: hidden; outline: none;">
						<div class="product-thumbs-track">
							<div class="pt active" data-imgbigurl="admin/product_images/single-product/<?php echo "$product_img1" ?>"><img src="admin/product_images/single-product/<?php echo "$product_img1" ?>" alt=""></div>
							<div class="pt" data-imgbigurl="admin/product_images/single-product/<?php echo "$product_img1" ?>"><img src="admin/product_images/single-product/<?php echo "$product_img1" ?>" alt=""></div>
							<div class="pt" data-imgbigurl="admin/product_images/single-product/<?php echo "$product_img1" ?>"><img src="admin/product_images/single-product/<?php echo "$product_img1" ?>" alt=""></div>
							<div class="pt" data-imgbigurl="admin/product_images/single-product/<?php echo "$product_img1" ?>"><img src="admin/product_images/single-product/<?php echo "$product_img1" ?>" alt=""></div>
						</div>
					</div>
				</div>


				<div class="col-lg-6 product-details">
					<h2 class="p-title"><?php echo $product_title ?></h2>
					<h3 class="p-price">INR <?php echo $product_price ?></h3>
					<h4 class="p-stock">Available: <span>In Stock</span></h4>
					<div class="p-rating">
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o fa-fade"></i>
					</div>
					<div class="p-review">
						<a href="">3 reviews</a>|<a href="">Add your review</a>
					</div>



					<div class="fw-size-choose">
						<p>Size</p>
						<div class="sc-item">
							<input type="radio" name = "product_size" id="xs-size">
							<label for="xs-size">32</label>
							<?php  if( isset($product_size) && $product_size == 32 ) echo "checked";  ?>
						</div>
						<div class="sc-item">
							<input type="radio" name = "product_size" id="s-size">
							<label for="s-size">34</label>
							<?php  if( isset($product_size) && $product_size == 34 ) echo "checked";  ?>							
						</div>
						<div class="sc-item">
							<input type="radio" name = "product_size" id="m-size" checked="">
							<label for="m-size">36</label>
							<?php  if( isset($product_size) && $product_size == 36 ) echo "checked";  ?>							
						</div>
						<div class="sc-item">
							<input type="radio" name = "product_size" id="l-size">
							<label for="l-size">38</label>
							<?php  if( isset($product_size) && $product_size == 38 ) echo "checked";  ?>							
						</div>
						<div class="sc-item disable">
							<input type="radio" name = "product_size" id="xl-size" disabled>
							<label for="xl-size">40</label>
							<?php  if( isset($product_size) && $product_size == 40 ) echo "checked";  ?>							
						</div>
						<div class="sc-item">
							<input type="radio" name = "product_size" id="xxl-size">
							<label for="xxl-size">42</label>
							<?php  if( isset($product_size) && $product_size == 42 ) echo "checked";  ?>							
						</div>
					</div>

		<input type="hidden" name="add_cart" value="<?php echo $pro_id; ?>">

					<div class="quantity">
					
					<p>Quantity</p>
                        <div class="pro-qty"><input type="text" name="product_qty" value="1"></div>
                    </div>
					<!--<a href="<?php #addCart() ?>" class="site-btn">SHOP NOW</a>-->
					<button type="submit" class="site-btn"><i class="fa fa-shoppint-cart"></i>Shop Now</button>
					<div id="accordion" class="accordion-area">
						<div class="panel">
							<div class="panel-header" id="headingOne">
								<button class="panel-link active" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">information</button>
							</div>
							<div id="collapse1" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
								<div class="panel-body">
									<p><?php echo $product_desc ?></p>
									<p>Approx length 66cm/26" (Based on a UK size 8 sample)</p>
									<p>Mixed fibres</p>
									<p>The Model wears a UK size 8/ EU size 36/ US size 4 and her height is 5'8"</p>
								</div>
							</div>
						</div>
						<div class="panel">
							<div class="panel-header" id="headingTwo">
								<button class="panel-link" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">care details </button>
							</div>
							<div id="collapse2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
								<div class="panel-body">
									<img src="./img/cards.png" alt="">
									<p><?php echo $product_desc ?></p>
								</div>
							</div>
						</div>
						<div class="panel">
							<div class="panel-header" id="headingThree">
								<button class="panel-link" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">shipping & Returns</button>
							</div>
							<div id="collapse3" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
								<div class="panel-body">
									<h4>7 Days Returns</h4>
									<p>Cash on Delivery Available<br>Home Delivery <span>3 - 4 days</span></p>
									<p><?php echo $product_desc ?></p>
								</div>
							</div>
						</div>
					</div>
					<div class="social-sharing">
						<a href=""><i class="fa fa-google-plus"></i></a>
						<a href=""><i class="fa fa-pinterest"></i></a>
						<a href=""><i class="fa fa-facebook"></i></a>
						<a href=""><i class="fa fa-twitter"></i></a>
						<a href=""><i class="fa fa-youtube"></i></a>
					</div>
				</div>
			</div>
		</div>
	</section>
</form>
	<!-- product section end -->

<?php

if(isset($_POST['add_cart']))  
{
echo $_POST['add_cart'];
echo $_POST['product_qty']; 
echo $_POST['pro_title'];
$ip_add=getUserIp();    

			$p_id=$_POST['add_cart'];
			$p_title=$_POST['pro_title'];
			$product_qty=$_POST['product_qty'];

			$check_product="select * from cart where ip_add='$ip_add' AND p_id='$p_id'";
			$run_check=mysqli_query($connection,$check_product);
			$num=mysqli_num_rows($run_check);
			
			if($num!=0)
			{
				echo "<script>alert('This product is already added in the cart')</script>";
				echo "<script>window.open('product.php?pro_id=$p_id','_self')</script>";
			}
			if($num==0){
				$query="insert into cart(c_id,ip_add,quantity) values('$pro_id','$ip_add','$product_qty')";
				echo "jj";
				$run_query=mysqli_query($connection,$query);
				echo "<script>window.open('product.php?pro_id=$p_id','_self')</script>";	
			}
			else{
				echo "<script>alert('This product is already added in the cart')</script>";
				echo "<script>window.open('product.php?pro_id=$pro_id','_self')</script>";
			}
}  
?>

	<!-- RELATED PRODUCTS section -->
	<section class="related-product-section">
		<div class="container">
			<div class="section-title">
				<h2>RELATED PRODUCTS</h2>
			</div>
			<div class="product-slider owl-carousel">
				<?php
					getPro();

/*  trying to bring category related products 

					$get_product = "select * from products where pro_id = '$p_cat_id' " ;
					$run_product = mysqli_query($get_product);

					while( $row = mysqli_fetch_array( $run_product))
					{
						$pro_id = $row['product_id'];

						$p_cat_id = $row['cat_id'];

					}

					echo"



Gender:
<input type="radio" name="gender"
<?php if (isset($gender) && $gender=="female") echo "checked";?>
value="female">Female
<input type="radio" name="gender"
<?php if (isset($gender) && $gender=="male") echo "checked";?>
value="male">Male
<input type="radio" name="gender"
<?php if (isset($gender) && $gender=="other") echo "checked";?>
value="other">Other


					";
*/
				?>				
			</div>
		</div>
	</section>
	<!-- RELATED PRODUCTS section end -->


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
