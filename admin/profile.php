<?php require_once("check-login.php");?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" class="opacity-0" lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profile - Admin</title>
    <!-- BEGIN: CSS Assets-->
    <link rel="stylesheet" href="dist/css/vendors/simplebar.css">
    <link rel="stylesheet" href="dist/css/themes/waveform.css">
    <link rel="stylesheet" href="dist/css/app.css"> <!-- END: CSS Assets-->
</head>
<!-- END: Head -->
<body>
<?php
if(isset($_POST['update'])){
	    $fullname = $_POST['fullname'];
	    $username = $_POST['username'];
	    $email = $_POST['email'];
$db_con->exec("update admin set fullname='$fullname',username='$username',email='$email' where id='$adminID'");
     echo "<script>
alert('Profile Updated');
window.location.href='profile.php';
</script>";
	}?>
    <div class="waveform before:content-[''] before:h-screen before:w-screen before:bg-gradient-to-b before:from-theme-1 before:to-theme-2 before:top-0 before:fixed">
        <div class="relative loading-page loading-page--before-hide [&.loading-page--before-hide]:before:block [&.loading-page--hide]:before:opacity-0 before:content-[''] before:transition-opacity before:duration-300 before:hidden before:h-screen before:w-screen before:fixed before:bg-gradient-to-b before:from-theme-1 before:to-theme-2 before:z-[60] [&.loading-page--before-hide]:after:block [&.loading-page--hide]:after:opacity-0 after:content-[''] after:transition-opacity after:duration-300 after:hidden after:h-16 after:w-16 after:animate-pulse after:fixed after:opacity-50 after:inset-0 after:m-auto after:bg-loading-puff after:bg-cover after:z-[61]">
            <div class="xl:ml-0 shadow-xl transition-[margin] duration-300 xl:shadow-none fixed top-0 left-0 z-50 side-menu group after:content-[''] after:fixed after:inset-0 after:bg-black/80 after:xl:hidden side-menu--collapsed [&.side-menu--mobile-menu-open]:ml-0 [&.side-menu--mobile-menu-open]:after:block -ml-[275px] after:hidden">
                <div class="close-mobile-menu fixed ml-[275px] w-10 h-10 items-center justify-center xl:hidden z-50 [&.close-mobile-menu--mobile-menu-open]:flex hidden">
                    <a class="mt-5 ml-5" href="">
                        <i data-tw-merge="" data-lucide="x" class="stroke-[1] w-8 h-8 text-white"></i>
                    </a>
                </div>
          <?php require_once("menu.php");?></div>
            <div class="content relative transition-[margin,width] duration-100 pl-5 xl:pl-0 pr-5 pt-[66px] pb-5 content--compact xl:ml-[275px] [&.content--compact]:xl:ml-[91px]">
                <div class="relative z-10 mt-[35px] rounded-3xl bg-slate-100 px-5 pt-px pb-5 min-h-screen before:content-[''] before:rounded-3xl before:bg-slate-100/30 before:inset-x-0 before:h-20 before:top-0 before:absolute before:z-[-1] before:-mt-3.5 before:mx-5 after:content-[''] after:rounded-3xl after:bg-slate-100/20 after:inset-x-0 after:h-20 after:top-0 after:absolute after:z-[-2] after:-mt-7 after:mx-12">
                    <div class="intro-y mt-8 flex flex-col items-center sm:flex-row">
                        <h2 class="mr-auto flex items-center text-lg font-medium">
                            Profile
                        </h2>
                    </div>
                    <div class="mt-5 grid grid-cols-12 gap-5">
                        <!-- BEGIN: Profile Cover -->
                        <div class="col-span-12">
                            <div class="box intro-y px-3 pb-5 pt-3">
                                <div class="image-fit h-80 from-black/20 to-black before:absolute before:z-10 before:h-full before:w-full before:rounded-md before:bg-gradient-to-b before:content-['']">
                                    <img class="rounded-md md:object-[0px_-170px]" src="<?php echo LOGO_URL?>" >
                                </div>
                                <div class="flex flex-col items-center justify-center text-center 2xl:flex-row 2xl:text-left">
                                    <div class="z-20 -mt-20 2xl:-mt-10 2xl:ml-10">
                                        <div class="image-fit h-40 w-40 overflow-hidden rounded-full border-4 border-white shadow-md">
                                            <img src="<?php echo LOGO_URL?>" >
                                        </div>
                                    </div>
                                    <div class="2xl:ml-5">
                                        <h2 class="mt-5 text-2xl font-medium"><?php echo $adminname?></h2>
 
                                    </div>
                                    <div class="mx-auto mb-6 mt-5 grid h-20 grid-cols-2 gap-x-5 gap-y-2 border-dashed border-slate-200 px-10 md:gap-y-0 2xl:mb-0 2xl:border-l 2xl:border-r">
                                        <div class="col-span-2 flex items-center justify-center md:col-span-1 2xl:justify-start">
                                            <i data-tw-merge="" data-lucide="mail" class="stroke-[1] mr-2 h-4 w-4"></i>
                                           <?php echo $adminemail?>
                                        </div>
                                        <div class="col-span-2 flex items-center justify-center md:col-span-1 2xl:justify-start">
                                            <i data-tw-merge="" data-lucide="instagram" class="stroke-[1] mr-2 h-4 w-4"></i>
                                            @ <?php echo $username?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END: Profile Cover -->
                        <!-- BEGIN: Profile Content -->
                        <div class="col-span-12 xl:col-span-8">
                            <div class="box intro-y p-5">
                                <div class="mb-5 flex items-center border-b border-slate-200/60 pb-5 dark:border-darkmode-400">
                                    <div class="truncate text-base font-medium">Profile</div>
                                    <i data-tw-merge="" data-lucide="edit" class="stroke-[1] ml-auto h-4 w-4 text-slate-500"></i>
                                </div>
                                <div class="leading-relaxed">
<form action="" method="post">
<div style="margin-top:10px;">
<label data-tw-merge for="regular-form-1" class="inline-block mb-2 group-[.form-inline]:mb-2 group-[.form-inline]:sm:mb-0 group-[.form-inline]:sm:mr-5 group-[.form-inline]:sm:text-right">
    Fullname</label>
<input data-tw-merge id="regular-form-1" name="fullname" type="text" value="<?php echo $adminname?>" class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 [&amp;[type='file']]:border file:mr-4 file:py-2 file:px-4 file:rounded-l-md file:border-0 file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&amp;:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10" required>
                            </div>

   <div style="margin-top:10px;">
<label data-tw-merge for="regular-form-1" class="inline-block mb-2 group-[.form-inline]:mb-2 group-[.form-inline]:sm:mb-0 group-[.form-inline]:sm:mr-5 group-[.form-inline]:sm:text-right">
    Username</label>
<input data-tw-merge id="regular-form-1" name="username" type="text" value="<?php echo $username?>" class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 [&amp;[type='file']]:border file:mr-4 file:py-2 file:px-4 file:rounded-l-md file:border-0 file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&amp;:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10" required>
                            </div>
<div style="margin-top:10px;">
<label data-tw-merge for="regular-form-1" class="inline-block mb-2 group-[.form-inline]:mb-2 group-[.form-inline]:sm:mb-0 group-[.form-inline]:sm:mr-5 group-[.form-inline]:sm:text-right">
    Email</label>
<input data-tw-merge id="regular-form-1" type="text" name="email" value="<?php echo $adminemail?>" class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 [&amp;[type='file']]:border file:mr-4 file:py-2 file:px-4 file:rounded-l-md file:border-0 file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&amp;:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10" required>
                            </div>
                            
<div class="mt-5 text-right">
<input type="submit" name="update" value="Save" class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;:hover:not(:disabled)]:bg-opacity-90 [&amp;:hover:not(:disabled)]:border-opacity-90 [&amp;:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-primary border-primary text-white dark:border-primary w-24">
</div>
</form>
                                
                                
                                </div>
                            </div>

                        </div>
                        <!-- END: Profile Content -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BEGIN: Vendor JS Assets-->
    <script src="dist/js/vendors/dom.js"></script>
    <script src="dist/js/vendors/tailwind-merge.js"></script>
    <script src="dist/js/vendors/lucide.js"></script>
    <script src="dist/js/vendors/simplebar.js"></script>
    <script src="dist/js/vendors/modal.js"></script>
    <script src="dist/js/vendors/dropdown.js"></script>
    <script src="dist/js/vendors/popper.js"></script>
    <script src="dist/js/vendors/transition.js"></script>
    <script src="dist/js/components/base/theme-color.js"></script>
    <script src="dist/js/components/base/lucide.js"></script>
    <script src="dist/js/themes/waveform.js"></script>
    <script src="dist/js/components/quick-search.js"></script> <!-- END: Vendor JS Assets-->
    <!-- BEGIN: Pages, layouts, components JS Assets-->
    <!-- END: Pages, layouts, components JS Assets-->
</body>
</html>