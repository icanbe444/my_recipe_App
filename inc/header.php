<header id="header">

<!-- Container -->
<div class="container">

	<!-- Logo / Mobile Menu -->
	<div class="three columns">
		<div id="logo">
			<h1><a href="index.php"><img src="<?php echo LOGO_URL?>" alt="<?php echo BLOG_NAME?>" /></a></h1>
		</div>
	</div>


<!-- Navigation
================================================== -->
<div class="sixteen columns navigation">

	<nav id="navigation" class="menu alternative nav-collapse ">
		<ul>
			<li><a href="index.php">Home</a></li>

	<li><a href="all-recipe.php">All Recipe</a></li>

<?php if (isset($_SESSION['user_id'])) {?>

<li><a href="add-recipe.php">Hi, <?php echo $_SESSION['store_name'];?> Logout</a></li>

<?php  }else{?>

	<li><a href="register.php">Signup</a></li>
	
	<li><a href="login.php">Login</a></li>
	
<?php }?>

		</ul>
	</nav>

</div>

</div>
<!-- Container / End -->
</header>