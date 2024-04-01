<?php require_once("inc/config.php");?>
<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<title>Add Recipe - <?php BLOG_NAME?></title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/colors/green.css" id="colors">


</head>

<body class="overflow-reset">

<!-- Wrapper -->
<div id="wrapper">

<?php require_once("inc/header.php");?>

<section id="titlebar">
	<!-- Container -->
	<div class="container">

		<div class="eight columns">
			<h2>Submit Recipe</h2>
		</div>

		<div class="eight columns">
			<nav id="breadcrumbs">
				<ul>
					<li>You are here:</li>
					<li><a href="#">Home</a></li>
					<li>Submit Recipe</li>
					 <?php echo $_SESSION['store_name'];?>
				</ul>
			</nav>
		</div>

	</div>
	<!-- Container / End -->
</section>



<!-- Content
================================================== -->
<div class="container">
	<div class="sixteen columns">
		<div class="submit-recipe-form">


			<!-- Recipe Title -->
			<h4>Recipe Title</h4>
			<nav class="title">
				<input class="search-field" type="text" name="title" placeholder="" value=""/>
			</nav>
			<div class="clearfix"></div>


			<div class="margin-top-25"></div>

			<!-- Short Summary -->
			<h4>Descrip</h4>
			<textarea class="WYSIWYG" name="summary" name="description" cols="40" rows="3" id="summary" spellcheck="true"></textarea>


			<div class="margin-top-25"></div>


			<!-- Upload Photos -->
			<h4>Upload your photos</h4>

			<label class="upload-btn">
			    <input type="file"  />
			    <i class="fa fa-upload"></i> Upload
			</label>


			<div class="clearfxix"></div>

			<div class="margin-top-30"></div>
			<a href="" class="button color big">Submit Recipe</a>

		</div>
	</div>
</div>
<!-- Container / End -->


<div class="margin-top-50"></div>

</div>
<!-- Wrapper / End -->



<!-- Footer Bottom / Start -->
<div id="footer-bottom">

	<!-- Container -->
	<div class="container">

	<div class="eight columns">© Copyright <?php echo date("Y");?> by <a href="#"><?php echo BLOG_NAME?></a>. All Rights Reserved.</div>

	</div>
	<!-- Container / End -->

</div>
<!-- Footer Bottom / End -->

<!-- Back To Top Button -->
<div id="backtotop"><a href="#"></a></div>



<!-- Java Script
================================================== -->
<script src="scripts/jquery-1.11.0.min.js"></script>
<script src="scripts/jquery-migrate-1.2.1.min.js"></script>
<script src="scripts/jquery.superfish.js"></script>
<script src="scripts/jquery.royalslider.min.js"></script>
<script src="scripts/responsive-nav.js"></script>
<script src="scripts/hoverIntent.js"></script>
<script src="scripts/isotope.pkgd.min.js"></script>
<script src="scripts/chosen.jquery.min.js"></script>
<script src="scripts/jquery.tooltips.min.js"></script>
<script src="scripts/jquery.magnific-popup.min.js"></script>
<script src="scripts/jquery.pricefilter.js"></script>
<script src="scripts/jquery-ui.min.js"></script>
<script src="scripts/custom.js"></script>


<!-- WYSIWYG Editor -->
<script type="text/javascript" src="scripts/jquery.sceditor.bbcode.min.js"></script>
<script type="text/javascript" src="scripts/jquery.sceditor.js"></script>



</body>
</html>