<?php require_once("../inc/config.php");?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" class="opacity-0" lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - Admin</title>
    <!-- BEGIN: CSS Assets-->
    <!-- END: CSS Assets-->
    <link rel="stylesheet" href="dist/css/app.css">
</head>
<!-- END: Head -->
<body>
<?php
        // ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL); 
  $message="Admin Login";
    if(isset($_POST['login']))
	{
	    $rand = rand();
		$username = trim($_POST['username']);
		$password = $_POST['password'];
		try
		{	
            $stmt = $db_con->prepare("SELECT * FROM admin WHERE username=:username");
			$stmt->execute(array(":username"=>$username));
			$row = $stmt->fetch(PDO::FETCH_ASSOC);
			$count = $stmt->rowCount();
			if($row['password']==$password){
			    	$_SESSION['admin_session'] = $row['id'];
     echo "<script>
alert('Login Successful');
window.location.href='home.php';
</script>";
	
}
			else{
	$message = "<p style='color:red;'>Invalid login data</p>";
	}
		}
		catch(PDOException $e){
			echo $e->getMessage();
		}
	}
?>
    <div class="before:fixed before:top-0 before:z-[-1] before:h-screen before:w-screen before:bg-gradient-to-b before:from-theme-1 before:to-theme-2 before:transition-[opacity,height] before:duration-300 before:ease-in-out before:content-['']">
        <div class="container relative">
            <div class="flex min-h-screen w-full items-center justify-center p-5 md:p-20">
                <div class="intro-y w-96">
                    <img class="mx-auto w-16" src="<?php echo LOGO_URL?>" alt="<?php echo BLOG_NAME?>">
                    <div class="mt-8 text-center text-2xl font-medium text-white dark:text-slate-300">
                        <?php echo $message?>
                    </div>
                    <div class="box box--stacked relative mt-14 max-w-[450px] px-5 py-8">
                        <form action="" method="post">
                        <input data-tw-merge="" type="text" placeholder="Username" name="username" class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 [&[type='file']]:border file:mr-4 file:py-2 file:px-4 file:rounded-l-md file:border-0 file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 block px-4 py-3">
                        <input data-tw-merge="" type="password" placeholder="Password" name="password" class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 [&[type='file']]:border file:mr-4 file:py-2 file:px-4 file:rounded-l-md file:border-0 file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 mt-4 block px-4 py-3">
  
                        <div class="mt-5 text-center xl:mt-8 xl:text-left">
                           <input name="login" type="submit" value="Login" class="transition duration-200 border shadow-sm inline-flex items-center justify-center px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-primary border-primary text-white dark:border-primary w-full py-3 xl:mr-3">
                         </div>
                         </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BEGIN: Vendor JS Assets-->
    <script src="dist/js/vendors/dom.js"></script>
    <script src="dist/js/vendors/tailwind-merge.js"></script>
    <script src="dist/js/vendors/lucide.js"></script>
    <script src="dist/js/vendors/modal.js"></script>
    <script src="dist/js/components/base/theme-color.js"></script>
    <script src="dist/js/components/base/lucide.js"></script> <!-- END: Vendor JS Assets-->
    <!-- BEGIN: Pages, layouts, components JS Assets-->
    <!-- END: Pages, layouts, components JS Assets-->
</body>
</html>