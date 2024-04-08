<?php require_once("inc/config.php");?>

<!DOCTYPE html>
<html lang="en"> 
<head>

<meta charset="utf-8">
<title>View Recipe</title>

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/colors/green.css" id="colors">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <?php  $repid = $_GET['id'];?>

    <script>
        $(document).ready(function() {
            var productId = <?php echo $repid?>; // Replace with the actual recipe ID

            // Fetch recipe details using AJAX
            $.ajax({
                url: 'api/index.php',
                method: 'GET',
                dataType: 'json',
                data: { action: 'get_recipe', id: productId },
                 success: function(response) {
            // Process the recipe details
            if (response !== null) {
                var productDetails = $('#product-details');
                var productHtml = '';

                // Generate HTML markup for the recipe details
                productHtml += '<section class="recipe-header">';
                productHtml += '<div class="title-alignment">';
                productHtml += '<h2>' + response.title + '</h2>';
                productHtml += '<div class="rating five-stars">';
                productHtml += '<div class="star-rating"></div>';
                productHtml += '<div class="star-bg"></div>';
                productHtml += '</div>';
                productHtml += '<span><a href="#reviews">(4 reviews)</a></span>';
                productHtml += '</div>';
                productHtml += '</section>';

                productHtml += '<div class="recipeSlider rsDefault" style="background-color:#f8f8f8;height:100%;">';
                
                    productHtml += '<img itemprop="image" class="rsImg" src="' + response.image + '" alt="" style="width:500px;"/>';
             
                productHtml += '</div>';

                productHtml += '<p itemprop="description" style="margin-top:30px;">' + response.description + '</p>';

                // Update the Recipe details container
                productDetails.html(productHtml);
            } else {
                productDetails.html('<p>Recipe not found</p>');
            }
        },
        error: function() {
            console.log('Error fetching product details');
        }
    });
});
    </script>
</head>

<body>

<!-- Wrapper -->
<div id="wrapper">

<?php require_once("inc/header.php");?>


<!-- Recipe Background -->
<div class="recipeBackground">
	<img src="https://media.istockphoto.com/id/1174341228/photo/nigerian-pounded-yam-served-with-spicy-bitter-leaf-soup.jpg?s=612x612&w=0&k=20&c=QTz4Nygk8f9pcpAiYHnPgzfsIyWdRYhF3U0wg4xBGho=" alt="" />
</div>


<!-- Content
================================================== -->
<div class="container" itemscope itemtype="http://schema.org/Recipe">

	<!-- Recipe -->
	<div class="twelve columns">
	<div class="alignment">

<div id="product-details"></div>


		<div class="margin-top-15"></div>


	</div>
	</div>


<!-- Sidebar
================================================== -->
<div class="four columns">

	<!-- Search Form -->
	<div class="widget search-form">
		<nav class="search">
			<form action="#" method="get">
				<button><i class="fa fa-search"></i></button>
				<input class="search-field" type="text" placeholder="Search for recipes" value=""/>
			</form>
		</nav>
		<div class="clearfix"></div>
	</div>


	<!-- Author Box -->
	<!--<div class="widget">-->
	<!--	<div class="author-box">-->
	<!--		<span class="title">Author</span>-->
	<!--		<span class="name">Sandra <br> Fortin</span>-->
	<!--		<span class="contact"><a href="mailto:sandra@chow.com">sandra@chow.com</a></span>-->
	<!--		<img src="images/author-photo.png" alt="">-->
	<!--</div>-->
	<!--</div>-->


</div>


</div>
<!-- Container / End -->


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

</body>
</html>