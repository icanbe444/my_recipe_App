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
                        var productList = $('#recipe-list');

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
                        $('#recipe-list').html('<p>No products found</p>');
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

<div id="recipe-list"></div>

		</div>
		<div class="clearfix"></div>



</div>


</div>
<!-- Wrapper / End -->


<?php require_once("inc/footer.php");?>

</body>
</html>