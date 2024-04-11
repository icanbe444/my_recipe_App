<?php require_once("check-login.php");?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" class="opacity-0" lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home - <?php echo BLOG_NAME?></title>
<?php require_once("inc/style.php");?>
</head>
<!-- END: Head -->
<body>
    <div class="waveform before:content-[''] before:h-screen before:w-screen before:bg-gradient-to-b before:from-theme-1 before:to-theme-2 before:top-0 before:fixed">
        <div class="relative loading-page loading-page--before-hide [&.loading-page--before-hide]:before:block [&.loading-page--hide]:before:opacity-0 before:content-[''] before:transition-opacity before:duration-300 before:hidden before:h-screen before:w-screen before:fixed before:bg-gradient-to-b before:from-theme-1 before:to-theme-2 before:z-[60] [&.loading-page--before-hide]:after:block [&.loading-page--hide]:after:opacity-0 after:content-[''] after:transition-opacity after:duration-300 after:hidden after:h-16 after:w-16 after:animate-pulse after:fixed after:opacity-50 after:inset-0 after:m-auto after:bg-loading-puff after:bg-cover after:z-[61]">
            <div class="xl:ml-0 shadow-xl transition-[margin] duration-300 xl:shadow-none fixed top-0 left-0 z-50 side-menu group after:content-[''] after:fixed after:inset-0 after:bg-black/80 after:xl:hidden side-menu--collapsed [&.side-menu--mobile-menu-open]:ml-0 [&.side-menu--mobile-menu-open]:after:block -ml-[275px] after:hidden">
                <div class="close-mobile-menu fixed ml-[275px] w-10 h-10 items-center justify-center xl:hidden z-50 [&.close-mobile-menu--mobile-menu-open]:flex hidden">
                    <a class="mt-5 ml-5" href="">
                        <i data-tw-merge="" data-lucide="x" class="stroke-[1] w-8 h-8 text-white"></i>
                    </a>
                </div>
<?php require_once("inc/menu.php");?>
                <div class="top-bar group fixed inset-x-0 top-0 h-[65px] transition-[margin] duration-300 ease-in-out xl:ml-[275px] group-[.side-menu--collapsed]:xl:ml-[90px] [&.top-bar--active]:mt-3.5">
                    <div class="absolute inset-x-0 h-full xl:mr-5 transition-[padding] duration-300 ease-in-out group-[.top-bar--active]:px-5 before:content-[''] before:mx-5 before:xl:mx-5 before:absolute before:top-0 before:inset-x-0 before:-mt-[15px] before:h-[20px] before:backdrop-blur">
                        <div class="box group-[.top-bar--active]:box flex h-full w-full items-center border-transparent bg-transparent px-5 shadow-none transition-[padding,background-color,border-color] duration-300 ease-in-out group-[.top-bar--active]:border-transparent group-[.top-bar--active]:bg-theme-2/80 group-[.top-bar--active]:backdrop-blur">
                            <div class="flex items-center gap-1 xl:hidden">
                                <a class="p-2 text-white rounded-full open-mobile-menu hover:bg-white/5" href="">
                                    <i data-tw-merge="" data-lucide="align-justify" class="stroke-[1] h-[18px] w-[18px]"></i>
                                </a>

                            </div>
                            <!-- BEGIN: Search -->


                            <!-- END: Search -->
                            <!-- BEGIN: Notification & User Menu -->
                            <div class="flex items-center flex-1">
                                <div class="flex items-center gap-1 ml-auto">
   

                                    </div>
                                </div>
                                <div data-tw-merge="" data-tw-placement="bottom-end" class="dropdown relative ml-5"><button data-tw-toggle="dropdown" aria-expanded="false" class="cursor-pointer image-fit h-[36px] w-[36px] overflow-hidden rounded-full border-[3px] border-white/[0.15]"><img src="dist/images/fakers/profile-1.jpg" alt="Rocketman - Admin Dashboard Template">
                                    </button>
                                    <div data-transition="" data-selector=".show" data-enter="transition-all ease-linear duration-150" data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1" data-enter-to="!mt-1 visible opacity-100 translate-y-0" data-leave="transition-all ease-linear duration-150" data-leave-from="!mt-1 visible opacity-100 translate-y-0" data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1" class="dropdown-menu absolute z-[9999] hidden">
                                        <div data-tw-merge="" class="dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 w-56 mt-1">
                                           <a href="profile.php" class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i data-tw-merge="" data-lucide="users" class="stroke-[1] w-4 h-4 mr-2"></i>
                                                Profile</a>
                                            <a href="logout.php" class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i data-tw-merge="" data-lucide="power" class="stroke-[1] w-4 h-4 mr-2"></i>
                                                Logout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END: Notification & User Menu -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="content relative transition-[margin,width] duration-100 pl-5 xl:pl-0 pr-5 pt-[66px] pb-5 content--compact xl:ml-[275px] [&.content--compact]:xl:ml-[91px]">
                <div class="relative z-10 mt-[35px] rounded-3xl bg-slate-100 px-5 pt-px pb-5 min-h-screen before:content-[''] before:rounded-3xl before:bg-slate-100/30 before:inset-x-0 before:h-20 before:top-0 before:absolute before:z-[-1] before:-mt-3.5 before:mx-5 after:content-[''] after:rounded-3xl after:bg-slate-100/20 after:inset-x-0 after:h-20 after:top-0 after:absolute after:z-[-2] after:-mt-7 after:mx-12">
                    <div class="-mb-5 -mt-px grid grid-cols-12 gap-6">
                        <div class="col-span-12 2xl:col-span-9">
                            <div class="grid grid-cols-12 gap-6 pb-6">
                                <!-- BEGIN: General Report -->
                                <div class="col-span-12 mt-6">
                                    <div class="intro-y block h-10 items-center sm:flex">
                                        <h2 class="mr-5 truncate text-lg font-medium">General Report</h2>
                                        <div class="relative mt-3 text-slate-500 sm:ml-auto sm:mt-0">
                                            <i data-tw-merge="" data-lucide="calendar" class="stroke-[1] absolute inset-y-0 left-0 z-10 my-auto ml-3 h-4 w-4"></i>
                                            <input data-tw-merge="" type="text" class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 [&[type='file']]:border file:mr-4 file:py-2 file:px-4 file:rounded-l-md file:border-0 file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 datepicker box pl-10 sm:w-56">
                                        </div>
                                    </div>
                                    <div class="intro-y mt-12 sm:mt-4">
                                        <div class="box box--stacked grid grid-cols-12 gap-0 divide-x divide-y divide-dashed divide-slate-200 py-0 dark:divide-white/5 xl:divide-y-0 xl:py-5">
                                          <?php if ($role === "admin") {?>
                                            <div class="relative col-span-12 px-5 py-5 sm:col-span-6 xl:col-span-3 xl:py-0 [&:not(:last-child)]:xl:before:content-[''] [&:not(:last-child)]:xl:before:w-[13px] [&:not(:last-child)]:xl:before:h-[12px] [&:not(:last-child)]:xl:before:absolute [&:not(:last-child)]:xl:before:rounded-full [&:not(:last-child)]:xl:before:bg-slate-200 [&:not(:last-child)]:xl:before:top-0 [&:not(:last-child)]:xl:before:right-0 [&:not(:last-child)]:xl:before:-mr-[7px] [&:not(:last-child)]:xl:before:-mt-[25px] [&:not(:last-child)]:xl:before:dark:bg-darkmode-500 [&:not(:last-child)]:xl:after:content-[''] [&:not(:last-child)]:xl:after:w-[11px] [&:not(:last-child)]:xl:after:h-[14px] [&:not(:last-child)]:xl:after:absolute [&:not(:last-child)]:xl:after:rounded-full [&:not(:last-child)]:xl:after:bg-slate-100 [&:not(:last-child)]:xl:after:top-0 [&:not(:last-child)]:xl:after:right-0 [&:not(:last-child)]:xl:after:-mr-[6px] [&:not(:last-child)]:xl:after:-mt-[28px] [&:not(:last-child)]:xl:after:dark:bg-darkmode-700 [&:not(:last-child)&gt;div]:xl:before:content-[''] [&:not(:last-child)&gt;div]:xl:before:w-[13px] [&:not(:last-child)&gt;div]:xl:before:h-[12px] [&:not(:last-child)&gt;div]:xl:before:absolute [&:not(:last-child)&gt;div]:xl:before:rounded-full [&:not(:last-child)&gt;div]:xl:before:bg-slate-200 [&:not(:last-child)&gt;div]:xl:before:bottom-0 [&:not(:last-child)&gt;div]:xl:before:right-0 [&:not(:last-child)&gt;div]:xl:before:-mr-[7px] [&:not(:last-child)&gt;div]:xl:before:-mb-[25px] [&:not(:last-child)&gt;div]:xl:before:dark:bg-darkmode-700/60 [&:not(:last-child)&gt;div]:xl:after:content-[''] [&:not(:last-child)&gt;div]:xl:after:w-[11px] [&:not(:last-child)&gt;div]:xl:after:h-[14px] [&:not(:last-child)&gt;div]:xl:after:absolute [&:not(:last-child)&gt;div]:xl:after:rounded-full [&:not(:last-child)&gt;div]:xl:after:bg-slate-50 [&:not(:last-child)&gt;div]:xl:after:bottom-0 [&:not(:last-child)&gt;div]:xl:after:right-0 [&:not(:last-child)&gt;div]:xl:after:-mr-[6px] [&:not(:last-child)&gt;div]:xl:after:-mb-[28px] [&:not(:last-child)&gt;div]:xl:after:dark:bg-darkmode-600">
                                                <div>
                                                    <div class="flex">
                                                        <div class="flex h-[2.2rem] w-[2.2rem] items-center justify-center rounded-full border border-theme-1/20 bg-theme-1/20 text-theme-1">
                                                            <i data-tw-merge="" data-lucide="chef-hat" class="stroke-[1] w-5 h-5"></i>
                                                        </div>
                                                    </div>
                                                    <div class="mt-6 text-2xl font-medium leading-7"><?php 

$sQuery = "SELECT * FROM chefs"; 
$rResult = $db_con->query($sQuery)->fetchAll(); 
echo count($rResult); 
?></div>
                                                    <div class="mt-1 text-slate-500">Total Chefs</div>
                                                </div>
                                            </div>
                                            <div class="relative col-span-12 px-5 py-5 sm:col-span-6 sm:!border-t-0 xl:col-span-3 xl:py-0 [&:not(:last-child)]:xl:before:content-[''] [&:not(:last-child)]:xl:before:w-[13px] [&:not(:last-child)]:xl:before:h-[12px] [&:not(:last-child)]:xl:before:absolute [&:not(:last-child)]:xl:before:rounded-full [&:not(:last-child)]:xl:before:bg-slate-200 [&:not(:last-child)]:xl:before:top-0 [&:not(:last-child)]:xl:before:right-0 [&:not(:last-child)]:xl:before:-mr-[7px] [&:not(:last-child)]:xl:before:-mt-[25px] [&:not(:last-child)]:xl:before:dark:bg-darkmode-500 [&:not(:last-child)]:xl:after:content-[''] [&:not(:last-child)]:xl:after:w-[11px] [&:not(:last-child)]:xl:after:h-[14px] [&:not(:last-child)]:xl:after:absolute [&:not(:last-child)]:xl:after:rounded-full [&:not(:last-child)]:xl:after:bg-slate-100 [&:not(:last-child)]:xl:after:top-0 [&:not(:last-child)]:xl:after:right-0 [&:not(:last-child)]:xl:after:-mr-[6px] [&:not(:last-child)]:xl:after:-mt-[28px] [&:not(:last-child)]:xl:after:dark:bg-darkmode-700 [&:not(:last-child)&gt;div]:xl:before:content-[''] [&:not(:last-child)&gt;div]:xl:before:w-[13px] [&:not(:last-child)&gt;div]:xl:before:h-[12px] [&:not(:last-child)&gt;div]:xl:before:absolute [&:not(:last-child)&gt;div]:xl:before:rounded-full [&:not(:last-child)&gt;div]:xl:before:bg-slate-200 [&:not(:last-child)&gt;div]:xl:before:bottom-0 [&:not(:last-child)&gt;div]:xl:before:right-0 [&:not(:last-child)&gt;div]:xl:before:-mr-[7px] [&:not(:last-child)&gt;div]:xl:before:-mb-[25px] [&:not(:last-child)&gt;div]:xl:before:dark:bg-darkmode-700/60 [&:not(:last-child)&gt;div]:xl:after:content-[''] [&:not(:last-child)&gt;div]:xl:after:w-[11px] [&:not(:last-child)&gt;div]:xl:after:h-[14px] [&:not(:last-child)&gt;div]:xl:after:absolute [&:not(:last-child)&gt;div]:xl:after:rounded-full [&:not(:last-child)&gt;div]:xl:after:bg-slate-50 [&:not(:last-child)&gt;div]:xl:after:bottom-0 [&:not(:last-child)&gt;div]:xl:after:right-0 [&:not(:last-child)&gt;div]:xl:after:-mr-[6px] [&:not(:last-child)&gt;div]:xl:after:-mb-[28px] [&:not(:last-child)&gt;div]:xl:after:dark:bg-darkmode-600">
                                                <div>
                                                    <div class="flex">
                                                        <div class="flex h-[2.2rem] w-[2.2rem] items-center justify-center rounded-full border border-pending/20 bg-pending/20 text-pending">
                                                            <i data-tw-merge="" data-lucide="drumstick" class="stroke-[1] w-5 h-5"></i>
                                                        </div>
                                                        <div class="ml-auto">
                                                        </div>
                                                    </div>
                                                    <div class="mt-6 text-2xl font-medium leading-7"><?php 

$sQuery = "SELECT * FROM recipes"; 
$rResult = $db_con->query($sQuery)->fetchAll(); 
echo count($rResult); 
?></div>
                                                    <div class="mt-1 text-slate-500">Total Recipies</div>
                                                </div>
                                            </div>
                                            <div class="relative col-span-12 px-5 py-5 sm:col-span-6 xl:col-span-3 xl:py-0 [&:not(:last-child)]:xl:before:content-[''] [&:not(:last-child)]:xl:before:w-[13px] [&:not(:last-child)]:xl:before:h-[12px] [&:not(:last-child)]:xl:before:absolute [&:not(:last-child)]:xl:before:rounded-full [&:not(:last-child)]:xl:before:bg-slate-200 [&:not(:last-child)]:xl:before:top-0 [&:not(:last-child)]:xl:before:right-0 [&:not(:last-child)]:xl:before:-mr-[7px] [&:not(:last-child)]:xl:before:-mt-[25px] [&:not(:last-child)]:xl:before:dark:bg-darkmode-500 [&:not(:last-child)]:xl:after:content-[''] [&:not(:last-child)]:xl:after:w-[11px] [&:not(:last-child)]:xl:after:h-[14px] [&:not(:last-child)]:xl:after:absolute [&:not(:last-child)]:xl:after:rounded-full [&:not(:last-child)]:xl:after:bg-slate-100 [&:not(:last-child)]:xl:after:top-0 [&:not(:last-child)]:xl:after:right-0 [&:not(:last-child)]:xl:after:-mr-[6px] [&:not(:last-child)]:xl:after:-mt-[28px] [&:not(:last-child)]:xl:after:dark:bg-darkmode-700 [&:not(:last-child)&gt;div]:xl:before:content-[''] [&:not(:last-child)&gt;div]:xl:before:w-[13px] [&:not(:last-child)&gt;div]:xl:before:h-[12px] [&:not(:last-child)&gt;div]:xl:before:absolute [&:not(:last-child)&gt;div]:xl:before:rounded-full [&:not(:last-child)&gt;div]:xl:before:bg-slate-200 [&:not(:last-child)&gt;div]:xl:before:bottom-0 [&:not(:last-child)&gt;div]:xl:before:right-0 [&:not(:last-child)&gt;div]:xl:before:-mr-[7px] [&:not(:last-child)&gt;div]:xl:before:-mb-[25px] [&:not(:last-child)&gt;div]:xl:before:dark:bg-darkmode-700/60 [&:not(:last-child)&gt;div]:xl:after:content-[''] [&:not(:last-child)&gt;div]:xl:after:w-[11px] [&:not(:last-child)&gt;div]:xl:after:h-[14px] [&:not(:last-child)&gt;div]:xl:after:absolute [&:not(:last-child)&gt;div]:xl:after:rounded-full [&:not(:last-child)&gt;div]:xl:after:bg-slate-50 [&:not(:last-child)&gt;div]:xl:after:bottom-0 [&:not(:last-child)&gt;div]:xl:after:right-0 [&:not(:last-child)&gt;div]:xl:after:-mr-[6px] [&:not(:last-child)&gt;div]:xl:after:-mb-[28px] [&:not(:last-child)&gt;div]:xl:after:dark:bg-darkmode-600">
                                                <div>
                                                    <div class="flex">
                                                        <div class="flex h-[2.2rem] w-[2.2rem] items-center justify-center rounded-full border border-warning/20 bg-warning/20 text-warning">
                                                            <i data-tw-merge="" data-lucide="users" class="stroke-[1] w-5 h-5"></i>
                                                        </div>
                                                        <div class="ml-auto">
                                                        </div>
                                                    </div>
                                                    <div class="mt-6 text-2xl font-medium leading-7"><?php 

$sQuery = "SELECT * FROM users"; 
$rResult = $db_con->query($sQuery)->fetchAll(); 
echo count($rResult); 
?></div>
                                                    <div class="mt-1 text-slate-500">Total Users</div>
                                                </div>
                                            </div>
                                        <?php } elseif ($role === "chef") {?>
  <div class="relative col-span-12 px-5 py-5 sm:col-span-6 sm:!border-t-0 xl:col-span-3 xl:py-0 [&:not(:last-child)]:xl:before:content-[''] [&:not(:last-child)]:xl:before:w-[13px] [&:not(:last-child)]:xl:before:h-[12px] [&:not(:last-child)]:xl:before:absolute [&:not(:last-child)]:xl:before:rounded-full [&:not(:last-child)]:xl:before:bg-slate-200 [&:not(:last-child)]:xl:before:top-0 [&:not(:last-child)]:xl:before:right-0 [&:not(:last-child)]:xl:before:-mr-[7px] [&:not(:last-child)]:xl:before:-mt-[25px] [&:not(:last-child)]:xl:before:dark:bg-darkmode-500 [&:not(:last-child)]:xl:after:content-[''] [&:not(:last-child)]:xl:after:w-[11px] [&:not(:last-child)]:xl:after:h-[14px] [&:not(:last-child)]:xl:after:absolute [&:not(:last-child)]:xl:after:rounded-full [&:not(:last-child)]:xl:after:bg-slate-100 [&:not(:last-child)]:xl:after:top-0 [&:not(:last-child)]:xl:after:right-0 [&:not(:last-child)]:xl:after:-mr-[6px] [&:not(:last-child)]:xl:after:-mt-[28px] [&:not(:last-child)]:xl:after:dark:bg-darkmode-700 [&:not(:last-child)&gt;div]:xl:before:content-[''] [&:not(:last-child)&gt;div]:xl:before:w-[13px] [&:not(:last-child)&gt;div]:xl:before:h-[12px] [&:not(:last-child)&gt;div]:xl:before:absolute [&:not(:last-child)&gt;div]:xl:before:rounded-full [&:not(:last-child)&gt;div]:xl:before:bg-slate-200 [&:not(:last-child)&gt;div]:xl:before:bottom-0 [&:not(:last-child)&gt;div]:xl:before:right-0 [&:not(:last-child)&gt;div]:xl:before:-mr-[7px] [&:not(:last-child)&gt;div]:xl:before:-mb-[25px] [&:not(:last-child)&gt;div]:xl:before:dark:bg-darkmode-700/60 [&:not(:last-child)&gt;div]:xl:after:content-[''] [&:not(:last-child)&gt;div]:xl:after:w-[11px] [&:not(:last-child)&gt;div]:xl:after:h-[14px] [&:not(:last-child)&gt;div]:xl:after:absolute [&:not(:last-child)&gt;div]:xl:after:rounded-full [&:not(:last-child)&gt;div]:xl:after:bg-slate-50 [&:not(:last-child)&gt;div]:xl:after:bottom-0 [&:not(:last-child)&gt;div]:xl:after:right-0 [&:not(:last-child)&gt;div]:xl:after:-mr-[6px] [&:not(:last-child)&gt;div]:xl:after:-mb-[28px] [&:not(:last-child)&gt;div]:xl:after:dark:bg-darkmode-600">
                                                <div>
                                                    <div class="flex">
                                                        <div class="flex h-[2.2rem] w-[2.2rem] items-center justify-center rounded-full border border-pending/20 bg-pending/20 text-pending">
                                                            <i data-tw-merge="" data-lucide="drumstick" class="stroke-[1] w-5 h-5"></i>
                                                        </div>
                                                        <div class="ml-auto">
                                                        </div>
                                                    </div>
                                                    <div class="mt-6 text-2xl font-medium leading-7"><?php 

$sQuery = "SELECT * FROM recipes WHERE owner='$adminID'"; 
$rResult = $db_con->query($sQuery)->fetchAll(); 
echo count($rResult); 
?></div>
                                                    <div class="mt-1 text-slate-500">Total Recipies</div>
                                                </div>
                                            </div>
                                            
                                            
                                        <?php } ?>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BEGIN: Vendor JS Assets-->
    <script src="dist/js/vendors/dom.js"></script>
    <script src="dist/js/vendors/tailwind-merge.js"></script>
    <script src="dist/js/vendors/lucide.js"></script>
    <script src="dist/js/vendors/dayjs.js"></script>
    <script src="dist/js/vendors/litepicker.js"></script>
    <script src="dist/js/vendors/tippy.js"></script>
    <script src="dist/js/vendors/tab.js"></script>
    <script src="dist/js/vendors/popper.js"></script>
    <script src="dist/js/vendors/dropdown.js"></script>
    <script src="dist/js/vendors/simplebar.js"></script>
    <script src="dist/js/vendors/chartjs.js"></script>
    <script src="dist/js/vendors/transition.js"></script>
    <script src="dist/js/vendors/modal.js"></script>
    <script src="dist/js/components/base/theme-color.js"></script>
    <script src="dist/js/components/base/lucide.js"></script>
    <script src="dist/js/components/base/litepicker.js"></script>
    <script src="dist/js/components/base/tippy.js"></script>
    <script src="dist/js/utils/colors.js"></script>
    <script src="dist/js/utils/helper.js"></script>
    <script src="dist/js/components/report-line-chart-1.js"></script>
    <script src="dist/js/components/report-bar-chart-1.js"></script>
    <script src="dist/js/components/report-line-chart-2.js"></script>
    <script src="dist/js/components/report-donut-chart-1.js"></script>
    <script src="dist/js/themes/waveform.js"></script>
    <script src="dist/js/components/quick-search.js"></script> <!-- END: Vendor JS Assets-->
    <!-- BEGIN: Pages, layouts, components JS Assets-->
    <!-- END: Pages, layouts, components JS Assets-->
</body>
</html>