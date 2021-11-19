<?php
	$db = mysqli_connect("localhost", "root", "", "ecom");



// for getting User IP Start
function getUserIP()
{
	switch (true) 
	{
		case ( !empty($_SERVER['HTTP_X_REAL_IP']) ):
				return $_SERVER['HTTP_X_REAL_IP'];

		case ( !empty($_SERVER['HTPP_CLIENT_IP']) ):
				return $_SERVER['HTTP_CLIENT_IP'];

		case ( !empty($_SERVER['HTTP_X_FORWARDED_FOR']) ):
				return $_SERVER['HTTP_X_FORWARDED_FOR'];

		default : return $_SERVER['REMOTE_ADDR'];
	}
}



function addCart()
{
	global $db;
	if( isset($_POST['add_cart']) )
	{
		$ip_add = getUserIP();
		$p_id = $_POST['add_cart'];

		$product_qty =  $_POST['product_qty'];
		#$product_size = $_POST['product_size'];
		$product_size = 9;
		$check_product = "select * from cart where ip_add = '$ip_add' AND p_id = '$p_id' " ;
		$run_check = mysqli_query( $db, $check_product);

		$num = mysqli_num_rows($run_check);

		if( $num > 0 )
		{
			echo "
				<script> alert('This Product is already added in your cart')
				</script> ;
			";

			echo "
				<script> window.open('product.php?pro_id=$p_id','_self')
				</script>
			";
		}
		else
		{
			$query = "insert into cart(p_id, ip_add, qty, size) values('$p_id', '$ip_add', '$product_qty', '$product_size' )" ;
			$run_query = mysqli_query( $db, $query);

			echo "
				<script>
						<alert( 'This Product is added to your Cart') 
						window.open('product.php?pro_id=$p_id','_self')
				</script>
			"	;
		}

	}
}















	function getPro()
	{
		global $db;

		$get_product = "select * from products order by 1 DESC LIMIT 0,10";
		$run_products = mysqli_query($db, $get_product);

		while ($row_products = mysqli_fetch_array($run_products)) 
		{
			$pro_id = $row_products['product_id'];
			$pro_title = $row_products['product_title'];
			$pro_price = $row_products['product_price'];
			$pro_img1 = $row_products['product_img1'];

			echo "<div class='col-md-4 col=sm-6'>
					<div class='product'>
						<a href='product.php?pro_id=$pro_id'>
							<img src='admin/product_images/single-product/$pro_img1' class='img-responsive'>
						</a>
						<div class='pi-text'>
							<h6><a href='product.php?pro_id=$pro_id'>$pro_title</a><h6>
							<h6 class='price'> INR $pro_price </h6>
							<div class='buttons'>
								<a href= 'product.php?pro_id=$pro_id' class='btn btn-primary'> View </a>
								<a href= 'product.php?pro_id=$pro_id' class='flaticon-heart'></a>
								<a href='product.php?pro_id=$pro_id' class='btn btn-primary' ><i class='flaticon-bag'></i> Add </a>

								
							</div>
						</div>
					</div>
				</div>

			";
		}
	}


/* Product Categories */
	function getPCats()
	{	
		global $db;
		$get_p_cats = "select * from product_categories";
		$run_p_cats = mysqli_query($db, $get_p_cats);

		while ($row_p_cats = mysqli_fetch_array( $run_p_cats) ) 
		{
			$p_cat_id = $row_p_cats['p_cat_id'];
			$p_cat_title = $row_p_cats['p_cat_title'];

			echo "
					<li><a href = 'category.php?p_cat=$p_cat_id' >$p_cat_title </a></li>
			";
		}

	}




/* Categories */
	function getCat()
	{	
		global $db;
		$get_cat = "select * from categories";
		$run_cat = mysqli_query($db, $get_cat);

		while ($row_cat = mysqli_fetch_array( $run_cat) ) 
		{
			$cat_id = $row_cat['cat_id'];
			$cat_title = $row_cat['cat_title'];

			echo "
					<li><a href = 'category.php?cat_id=$cat_id' >$cat_title </a></li>
			";
		}

	}


/* Get Product Categories product */
function getPcatPro()
{
	global $db;
	if( isset( $_GET['p_cat']))
	{
		$p_cat_id = $_GET['p_cat'];
		$get_p_cat = "select * from product_categories where p_cat_id = '$p_cat_id' ";
		$run_p_cat = mysqli_query( $db, $get_p_cat);
		$row_p_cat = mysqli_fetch_array( $run_p_cat);
		$p_cat_title = $row_p_cat['p_cat_title'];
		$p_cat_desc = $row_p_cat['p_cat_desc'];

		$get_products = "select * from products where p_cat_id= '$p_cat_id' " ;
		$run_products = mysqli_query( $db, $get_products);
		$count = mysqli_num_rows( $run_products);

		if( $count == 0)
		{
			echo "
				<div class='box'>
					<h3> No Product Found in this Product Category</h3>
				</div>
			";
		}
		else
		{
			echo "
				<div class='box'>
				<h3> $p_cat_title</h3>
				<p> $p_cat_desc</p>
				</div>
			";
		}

		while( $row_products = mysqli_fetch_array( $run_products ) )
		{
			$pro_id = $row_products['product_id'];
			$pro_title = $row_products['product_title'];
			$pro_price = $row_products['product_price'];;
			$pro_img1 = $row_products['product_img1'];

			echo "
				<div class='col-md-3 col=sm-6'>
					<div class='product-item'>
						<div class='pi-pic'>
							<a href='product.php?pro_id=$pro_id'>
							<img src='admin/product_images/single-product/$pro_img1' alt='' class='img-responsive'>
							</a>
							<div class='pi-links'>
								<a href='product.php?pro_id=$pro_id' class='add-card'><i class='flaticon-bag'></i><span>ADD TO CART</span></a>
								<a href='product.php?pro_id=$pro_id' class='wishlist-btn'><i class='flaticon-heart'></i></a>
							</div>
						</div>
						<div class='pi-text'>
							<h6 class='price'> INR $pro_price </h6>
							<p>$pro_title</a> </p>

						</div>
					</div>
				</div>

			";
		}


	}
}

function getCatPro()
{
	global $db;
	if( isset( $_GET['cat_id']))
	{
		$cat_id = $_GET['cat_id'];
		$get_cat = "select * from categories where cat_id = '$cat_id' ";
		$run_cat = mysqli_query( $db, $get_cat);
		$row_cat = mysqli_fetch_array( $run_cat);
		$cat_title = $row_cat['cat_title'];
		$cat_desc = $row_cat['cat_desc'];

		$get_products = "select * from products where cat_id = '$cat_id' " ;
		$run_products = mysqli_query( $db, $get_products);
		$count = mysqli_num_rows( $run_products);

		if( $count == 0)
		{
			echo "
				<div class='box'>
					<h3> No Product Found in this Product Category</h3>
				</div>
			";
		}
		else
		{
			echo "
				<div class='box'>
				<h3> $cat_title</h3>
				<p> $cat_desc</p>
				</div>
			";
		}

		while( $row_products = mysqli_fetch_array( $run_products ) )
		{
			$pro_id = $row_products['product_id'];
			$pro_title = $row_products['product_title'];
			$pro_price = $row_products['product_price'];;
			$pro_img1 = $row_products['product_img1'];

			echo "
				<div class='col-md-3 col=sm-6'>
					<div class='product-item'>
						<div class='pi-pic'>
							<a href='product.php?pro_id=$pro_id'>
							<img src='admin/product_images/single-product/$pro_img1' alt='' class='img-responsive'>
							</a>
							<div class='pi-links'>
								<a href='product.php?pro_id=$pro_id' class='add-card'><i class='flaticon-bag'></i><span>ADD TO CART</span></a>
								<a href='product.php?pro_id=$pro_id' class='wishlist-btn'><i class='flaticon-heart'></i></a>
							</div>
						</div>
						<div class='pi-text'>
							<h6 class='price'> INR $pro_price </h6>
							<p>$pro_title</a> </p>

						</div>
					</div>
				</div>

			";
		}


	}
}


	function getAllPro()
	{
		global $db;

		$get_product = "select * from products order by 1 DESC LIMIT 0,10";
		$run_products = mysqli_query($db, $get_product);

		while ($row_products = mysqli_fetch_array($run_products)) 
		{
			$pro_id = $row_products['product_id'];
			$pro_title = $row_products['product_title'];
			$pro_price = $row_products['product_price'];
			$pro_img1 = $row_products['product_img1'];

			echo "
				<div class='col-md-3 col=sm-6'>
					<div class='product-item'>
						<div class='pi-pic'>
							<a href='product.php?pro_id=$pro_id'>
							<img src='admin/product_images/single-product/$pro_img1' alt='' class='img-responsive'>
							</a>
							<div class='pi-links'>
								<a href='product.php?pro_id=$pro_id' class='add-card'><i class='flaticon-bag'></i><span>ADD TO CART</span></a>
								<a href='product.php?pro_id=$pro_id' class='wishlist-btn'><i class='flaticon-heart'></i></a>
							</div>
						</div>
						<div class='pi-text'>
							<h6 class='price'> INR $pro_price </h6>
							<p>$pro_title</a> </p>

						</div>
					</div>
				</div>

			";
		
		}
	}

?>