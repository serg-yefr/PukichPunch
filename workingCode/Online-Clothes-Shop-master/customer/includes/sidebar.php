<div class="panel panel-default sidebar-menu">
	<div class = "panel-heading">
		<center>
			<img src="customer_images/pooja.jpg" class="img-responsive">
		</center>
		<br>
		<h6 align="center" class="panel-title">Name : Pooja</h6>
	</div> <!--panel-heading End-->

	<div class="panel-body">
		<ul class="nav nav-pills nav-stacked">
			<li class="<?php if(isset($_GET['my_order'])){echo "active";} ?> ">
				<a href="my_account.php?my_order">
					<i class="fa fa-list"></i>My Order
				</a>
			</li>
			<li class="<?php if(isset($_GET['pay_offline'])) { echo("active");} ?>">
				<br>
				<a href="my_account.php?pay_offline">
					<i class="fa fa-bolt"></i>Pay Offline
				</a>
			</li>
		<!--	<li class="<?php if(isset($_GET['my_address'])) { echo("active");} ?>">
				<br>
				<a href="my_account.php?my_address">
					<i class="fa fa-bolt"></i>My Address
				</a>
			</li>
		-->
			<li class="<?php if(isset($_GET['edit_act'])) { echo("active");} ?>">
				<br>
				<a href="my_account.php?edit_act">
					<i class="fa fa-bolt"></i>Edit Account
				</a>
			</li>
			<li class="<?php if(isset($_GET['change_pass'])) { echo("active");} ?>">
				<br>
				<a href="my_account.php?change_pass">
					<i class="fa fa-bolt"></i>Change Password
				</a>
			</li>
			<li class="<?php if(isset($_GET['my_wishlist'])) { echo("active");} ?>">
				<br>
				<a href="my_account.php?my_wishlist">
					<i class="fa fa-bolt"></i>My Wishlist
				</a>
			</li>
			<li class="<?php if(isset($_GET['delete_act'])) { echo("active");} ?>">
				<br>
				<a href="my_account.php?delete_act">
					<i class="fa fa-bolt"></i>Delete Account
				</a>
			</li>
			<li class="<?php if(isset($_GET['logout'])) { echo("active");} ?>">
				<br>
				<a href="my_account.php?logout">
					<i class="fa fa-bolt"></i>Log Out
				</a>
			</li>
		</ul>
	</div>
</div>