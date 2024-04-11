<?php require_once("inc/config.php");?>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Search - <?php echo BLOG_NAME?></title>
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
                        var productId = response[i].r_id; // Get the product ID
                        var productUrl = 'view_recipe.php?id=' + productId; // Create the product URL

                        html += '<div class="product">' +
                            '<a href="' + productUrl + '">' +
                            '<h3>' + response[i].title + '</h3>' +
                            '<img src="' + response[i].image + '" alt="' + response[i].title + '" style="width:500px;">' +
                            '</a>' +
                            '<p>' + response[i].description + '</p>' +
                            '<p>Price: ' + response[i].price + '</p>' +
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
            border: 1px solid black;
            padding: 10px;
            margin-bottom: 10px;
        }
    </style>
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



    <div id="searchResults"></div>



		<div class="clearfix"></div>

	</div>

<div class="four columns">

			        <form id="searchForm">
        <input type="text" class="" id="searchTerm" placeholder="Enter search term">
        
        <button type="submit">Search</button>
    </form>

</div>

<div class="margin-top-5"></div>

</div>


</div>



<?php require_once("inc/footer.php");?>
</body>
</html>