<?php require_once("inc/config.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title><?php echo BLOG_NAME?></title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/colors/green.css" id="colors">
 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
 <script>
$(document).ready(function() {
    $('#searchForm').submit(function(event) {
        event.preventDefault(); // Prevent form submission

        var searchTerm = $('#searchTerm').val(); // Get the search term

        // Perform Ajax request to searchProducts.php
        $.ajax({
            url: 'api/index.php?action=search_recipe',
            type: 'POST',
            data: { term: searchTerm },
            dataType: 'json',
            success: function(response) {
                // Handle the response
                if (response.length > 0) {
                    var html = '';
                    for (var i = 0; i < response.length; i++) {
                        var productId = response[i].r_id; // Get the recipe ID
                        var productUrl = 'view_recipe.php?id=' + productId; // Create the recipe URL

                        html += '<div class="product">' +
                            '<a href="' + productUrl + '">' +
                            '<img src="' + response[i].image + '" alt="' + response[i].title + '" style="width:300px;">' +
                             '<center><h2 style="font-size:15px;color:#ed9031;">' + response[i].title + '</h2></center>' +
                            '</a>' +
                            '</div>';
                    }
                    $('#searchResults').html(html);
                } else {
                    $('#searchResults').html('<p>No products found.</p>');
                }
            },
            error: function() {
                $('#searchResults').html('<p>Error occurred while searching.</p>');
            }
        });
    });
});
    </script>
    <style>
        .product {
            border: 1px solid darkred;
            border-radius: 25px;
            width:300px;
            padding: 10px;
            margin-bottom: 10px;
        }
    </style>
<script>
        $(document).ready(function() {
            // Fetch recipes using AJAX
            $.ajax({
                url: 'api/index.php?action=view_recipes',
                method: 'GET',
                dataType: 'json',
                success: function(response) {
                    // Process the products
                    if (response.length > 0) {
                        var productList = $('#product-list');

                        // Iterate over each recipe
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
                        $('#product-list').html('<p>No recipe found</p>');
                    }
                },
                error: function() {
                    console.log('Error fetching recipes');
                }
            });
        });
    </script>
</head>

<body class="boxed">

<!-- Wrapper -->
<div id="wrapper">

<?php require_once("inc/header.php");?>


<div class="clearfix"></div>

<div class="margin-top-45"></div>


<!-- Content
================================================== -->
<div class="container">

	<!-- Masonry -->
	<div class="twelve columns">
<div class="widget search-form">
		<nav class="search">
			<form id="searchForm">
				<button><i class="fa fa-search"></i></button>
				<input class="search-field" id="searchTerm" type="text" placeholder="Search for recipes" value="">
			</form>
		</nav>
		<div class="clearfix"></div>
	</div>
		<!-- Isotope -->
		<div class="isotope">
		    
		    <div id="searchResults"></div>
		    
	    <h3 class="headline">Top Recipes</h3>
	    <span class="line rb margin-bottom-35"></span>
	    <div class="clearfix"></div>



<div id="product-list"></div>
			
	



		</div>
		<div class="clearfix"></div>

	</div>

<div class="four columns">


</div>

<div class="margin-top-5"></div>

</div>


</div>


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



<!-- my Script -->
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



</body>
</html>