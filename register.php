<?php require_once("inc/config.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Register - <?php echo BLOG_NAME?></title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script><link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/colors/green.css" id="colors">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $("form").submit(function(event) {
                event.preventDefault();
                var form = $(this);
                var url = form.attr("action");
                var formData = form.serialize();
                var responseContainer = form.find(".response-container");

                $.ajax({
                    type: "POST",
                    url: url,
                    data: formData,
                    dataType: "json",
                    success: function(response) {
                        alert(response.success || response.error);
                        if (response.success) {
                            window.location.href = "login.php";
                        }
                    },
                    error: function() {
                       alert("An error occurred.");
                    }
                });
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

<div style="margin-top:20px;">
    <p style="margin:20px;">Already have an account? <a href="login.php">Login Here</a></p>
    <form action="api/index.php?action=create_account" method="POST">
         <div class="form-group">
              <label for="email">Fullname:</label>
        <input type="text" name="fullname" class="form-control" placeholder="fullname" required>
        </div>
        
         <div class="form-group">
               <label for="email">Business Name</label>
         <input type="text" name="store_name"  class="form-control"placeholder="Business Name" required>
          </div>
          
          <div class="form-group">
                <label for="email">Email:</label>
          <input type="text" name="email" class="form-control" placeholder="email" required>
           </div>
           
           <div class="form-group">
                 <label for="email">Password:</label>
        <input type="password" name="password" class="form-control" placeholder="Password" required>
         </div>
         <div class="form-group">
                 <label for="email">Confirm Password:</label>
        <input type="password" name="password2" class="form-control" placeholder="Password" required>
         </div>
         
         <div class="form-group" style="margin:30px;">
        <input type="submit" class="form-control" value="Create Account">
         </div>
    </form>
</div>

</div>
<!-- Container / End -->


</div>
<!-- Wrapper / End -->




<!-- Java Script
================================================== -->
<!--    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>-->
<!--<script src="scripts/jquery-migrate-1.2.1.min.js"></script>-->