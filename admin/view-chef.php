<?php require_once("check-login.php");?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" class="opacity-0" lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>View Chef - <?php echo BLOG_NAME?></title>
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
                                <a class="p-2 text-white rounded-full hover:bg-white/5" data-tw-toggle="modal" data-tw-target="#quick-search" href="javascript:;">
                                    <i data-tw-merge="" data-lucide="search" class="stroke-[1] h-[18px] w-[18px]"></i>
                                </a>
                            </div>
                            <!-- BEGIN: Search -->

                            <div id="quick-search" aria-hidden="true" tabindex="-1" class="modal group bg-gradient-to-b from-theme-1/50 via-theme-2/50 to-black/50 transition-[visibility,opacity] w-screen h-screen fixed left-0 top-0 overflow-y-hidden z-[60] [&:not(.show)]:duration-[0s,0.2s] [&:not(.show)]:delay-[0.2s,0s] [&:not(.show)]:invisible [&:not(.show)]:opacity-0 [&.show]:visible [&.show]:opacity-100 [&.show]:duration-[0s,0.1s]">
                                <div class="box mx-auto my-2 w-[95%] scale-95 transition-transform group-[.show]:scale-100 sm:mt-40 sm:w-[600px] lg:w-[700px]">


                                </div>
                            </div>
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

<?php if (isset($_GET['id']))
{
$page_id = $_GET['id'];
$run_query =$db_con->prepare("select * from chefs where user_id=?");
$run_query->execute(array($page_id));
while($row=$run_query->fetch())
{
$userID = $row['user_id'];
$fullname = $row['fullname'];
$store_name = $row['store_name'];
$email = $row['email'];
$password = $row['password'];
$reg_date = $row['reg_date'];
}}
?>

<h4 style="padding:20px;">You are viewing : <?php echo $store_name?>'s Profile</h4>

<h3 style="color:darkred;">All Recipes by <?php echo $fullname?> (<?php echo $store_name?>)</h3>

         <div style="margin:20px;">
             
    <table class="w-full text-left border-separate border-spacing-y-[10px]">
                            <tbody>
                <?php
$i = 1;
$run=$db_con->prepare("select * from recipes WHERE owner='$page_id'");
$run->execute();
while ($row=$run->fetch())
{
$title = $row['title'];
$description = $row['description'];
$image = $row['image'];
$added_date = $row['added_date'];
?>
                
                                <tr class="intro-x">
                                    <td class="px-5 py-3 w-40 border border-l-0 border-r-0 border-slate-200 bg-white !py-5 shadow-[20px_3px_20px_#0000000b] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:border-darkmode-600 dark:bg-darkmode-600">
                                        <div class="flex">
                                            <div class="image-fit zoom-in h-10 w-10">
                                                <img data-placement="top" src="<?php echo $image?>" class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-5 py-3 border border-l-0 border-r-0 border-slate-200 bg-white shadow-[20px_3px_20px_#0000000b] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:border-darkmode-600 dark:bg-darkmode-600">
                                        <a class="whitespace-nowrap font-medium" href=""><?php echo $title?></a>
                                        <div class="mt-0.5 whitespace-nowrap text-xs text-slate-500">
                                            <?php echo $description?></div>
                                    </td>
                                    <td class="px-5 py-3 border border-l-0 border-r-0 border-slate-200 bg-white text-center shadow-[20px_3px_20px_#0000000b] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:border-darkmode-600 dark:bg-darkmode-600">
                                      <?php echo $added_date?>
                                    </td>
                                    <td class="px-5 w-56 border border-l-0 border-r-0 border-slate-200 bg-white first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r shadow-[20px_3px_20px_#0000000b] dark:border-darkmode-600 dark:bg-darkmode-600 py-0 relative before:block before:w-px before:h-8 before:bg-slate-200 before:absolute before:left-0 before:inset-y-0 before:my-auto before:dark:bg-darkmode-400">
                                        <div class="flex items-center justify-center">
                                            <a class="mr-3 flex items-center" href="javascript:;">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="check-square" class="lucide lucide-check-square stroke-[1] mr-1 h-4 w-4"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>
                                                Edit
                                            </a>
                                            <a class="flex items-center text-danger" data-tw-toggle="modal" data-tw-target="#delete-confirmation-modal" href="javascript:;">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="trash-2" class="lucide lucide-trash-2 stroke-[1] mr-1 h-4 w-4"><path d="M3 6h18"></path><path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path><path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path><line x1="10" x2="10" y1="11" y2="17"></line><line x1="14" x2="14" y1="11" y2="17"></line></svg>
                                                Delete
                                            </a>
                                        </div>
                                    </td>
                                </tr>
<?php } ?>
                            </tbody>
                        </table>         
             
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