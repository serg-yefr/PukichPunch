<?php
include("db.php");
include("admin/functions/functions.php")
?>


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
	
	