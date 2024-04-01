<?php require_once("inc/config.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>All Recipe -<?php echo BLOG_NAME?></title>

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/colors/green.css" id="colors">
 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
        $(document).ready(function() {
            // Fetch products using AJAX
            $.ajax({
                url: 'api/index.php?action=view_recipes',
                method: 'GET',
                dataType: 'json',
                success: function(response) {
                    // Process the products
                    if (response.length > 0) {
                        var productList = $('#product-list');

                        // Iterate over each product
                        $.each(response, function(index, product) {
                            var recipeBox = $('<div class="four recipe-box columns">');
                            var thumbnailHolder = $('<div class="thumbnail-holder">');
                            var thumbnailLink = $('<a>').attr('href', 'view_recipe.php?id=' + product.r_id);
                            var thumbnailImage = $('<img>').attr('src', product.image).attr('alt', product.title);
                            var hoverCover = $('<div class="hover-cover"></div>');
                            var hoverIcon = $('<div class="hover-icon">').text('View Recipe');
                            var recipeBoxContent = $('<div class="recipe-box-content">');
                            var recipeLink = $('<a>').attr('href', 'view_recipe.php?id=' + product.r_id).text(product.title);
                            var ratingStars = $('<div class="rating five-stars">');
                            var starRating = $('<div class="star-rating"></div>');
                            var starBg = $('<div class="star-bg"></div>');

                            thumbnailLink.append(thumbnailImage, hoverCover, hoverIcon);
                            thumbnailHolder.append(thumbnailLink);
                            recipeBoxContent.append(recipeLink, ratingStars.append(starRating, starBg));
                            recipeBox.append(thumbnailHolder, recipeBoxContent);
                            productList.append(recipeBox);
                        });
                    } else {
                        $('#product-list').html('<p>No products found</p>');
                    }
                },
                error: function() {
                    console.log('Error fetching products');
                }
            });
        });
    </script>
</head>

<body>

<!-- Wrapper -->
<div id="wrapper">
<?php require_once("inc/header.php");?>


<!-- Titlebar
================================================== -->
<section id="titlebar" class="browse-all">
	<!-- Container -->
	<div class="container">


	</div>
	<!-- Container / End -->
</section>


<!-- Container -->


<div class="margin-top-35"></div>


<!-- Container -->
<div class="container">

	<!-- Headline -->
	<div class="sixteen columns">
 		<h3 class="headline">All Recipes</h3>
		<span class="line margin-bottom-35"></span>
		<div class="clearfix"></div>
	</div>
	<div class="clearfix"></div>


		<!-- Isotope -->
		<div class="isotope">

<div id="product-list"></div>

		</div>
		<div class="clearfix"></div>



</div>


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
<script src="scripts/custom.js"></script>


<!-- Style Switcher
================================================== -->
<script src="scripts/switcher.js"></script>

<div id="style-switcher">
	<h2>Style Switcher <a href="#"></a></h2>
	
	<div>
		<h3>Predefined Colors</h3>
		<ul class="colors" id="color1">
			<li><a href="#" class="green" title="Green"></a></li>
			<li><a href="#" class="blue" title="Blue"></a></li>
			<li><a href="#" class="orange" title="Orange"></a></li>
			<li><a href="#" class="navy" title="Navy"></a></li>
			<li><a href="#" class="yellow" title="Yellow"></a></li>
			<li><a href="#" class="peach" title="Peach"></a></li>
			<li><a href="#" class="beige" title="Beige"></a></li>
			<li><a href="#" class="purple" title="Purple"></a></li>
			<li><a href="#" class="celadon" title="Celadon"></a></li>
			<li><a href="#" class="pink" title="Pink"></a></li>
			<li><a href="#" class="red" title="Red"></a></li>
			<li><a href="#" class="brown" title="Brown"></a></li>
			<li><a href="#" class="cherry" title="Cherry"></a></li>
			<li><a href="#" class="cyan" title="Cyan"></a></li>
			<li><a href="#" class="gray" title="Gray"></a></li>
			<li><a href="#" class="darkcol" title="Dark"></a></li>
		</ul>
		
	</div>
	
	<div id="reset"><a href="#" class="button color">Reset</a></div>
		
</div>


</body>
</html>