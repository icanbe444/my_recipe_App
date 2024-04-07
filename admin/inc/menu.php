   <?php
function active($currect_page){
  $url_array =  explode('/', $_SERVER['REQUEST_URI']) ;
  $url = end($url_array);  
  if($currect_page == $url){
      echo 'active'; //class name in css 
  } 
}
$role = ""; // Initialize the role variable

if (isset($_SESSION['admin_session'])) {
    // Admin role
    $role = "admin";
} elseif (isset($_SESSION['chef_session'])) {
    // Chef role
    $role = "chef";
}
?>

<?php if ($role === "admin") {?>
                <div class="side-menu__content pr-1 z-20 relative w-[275px] border-slate-200/80 duration-300 transition-[width] group-[.side-menu--collapsed]:xl:w-[91px] group-[.side-menu--collapsed.side-menu--on-hover]:xl:shadow-[6px_0_12px_-4px_#0000000f] group-[.side-menu--collapsed.side-menu--on-hover]:xl:w-[275px] h-screen flex flex-col after:content-[''] after:absolute after:inset-0 after:bg-gradient-to-b after:from-theme-1 after:to-theme-2/30  after:border-slate-200/80 after:group-[.side-menu--collapsed.side-menu--on-hover]:xl:shadow-[6px_0_12px_-4px_#0000000f] before:content-[''] before:absolute before:inset-0 before:bg-[275px_auto] before:bg-fixed before:bg-no-repeat before:bg-waveform before:bg-theme-2">
                    <div class="relative z-10 hidden h-[65px] w-[275px] flex-none items-center overflow-hidden px-5 duration-300 xl:flex group-[.side-menu--collapsed.side-menu--on-hover]:xl:w-[275px] group-[.side-menu--collapsed]:xl:w-[91px]">
                        <a class="flex items-center transition-[margin] duration-300 group-[.side-menu--collapsed.side-menu--on-hover]:xl:ml-0 group-[.side-menu--collapsed]:xl:ml-4" href="">
                            <div class="ml-3 font-medium text-white transition-opacity group-[.side-menu--collapsed.side-menu--on-hover]:xl:opacity-100 group-[.side-menu--collapsed]:xl:opacity-0">
                                <?php echo BLOG_NAME?>
                            </div>
                        </a>
                        <a class="toggle-compact-menu ml-auto hidden h-[20px] w-[20px] items-center justify-center rounded-full border border-white/40 text-white transition-[opacity,transform] hover:bg-white/5 group-[.side-menu--collapsed]:xl:rotate-180 group-[.side-menu--collapsed.side-menu--on-hover]:xl:opacity-100 group-[.side-menu--collapsed]:xl:opacity-0 3xl:flex" href="">
                            <i data-tw-merge="" data-lucide="arrow-left" class="h-3.5 w-3.5 stroke-[1.3]"></i>
                        </a>
                    </div>
                    <div class="scrollable-ref w-full h-full z-20 pl-5 pr-4 overflow-y-auto overflow-x-hidden pb-3 [-webkit-mask-image:-webkit-linear-gradient(top,rgba(0,0,0,0),black_30px)] [&:-webkit-scrollbar]:w-0 [&:-webkit-scrollbar]:bg-transparent [&_.simplebar-content]:p-0 [&_.simplebar-track.simplebar-vertical]:w-[10px] [&_.simplebar-track.simplebar-vertical]:mr-0.5 [&_.simplebar-track.simplebar-vertical_.simplebar-scrollbar]:before:bg-slate-400/30">
                        <ul class="scrollable">
                            <!-- BEGIN: First Child -->
                            <li class="side-menu__divider">
                                START MENU
                            </li>
                            
                              <li>  
                                <a href="home.php" class="side-menu__link side-menu__link--<?php active('home.php');?>">
                                    <i data-tw-merge="" data-lucide="layout-dashboard" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                    <div class="side-menu__link__title">Dashboard</div>
                                </a>
                                <!-- BEGIN: Second Child -->
                                <!-- END: Second Child -->
                            </li>
                            
                            
                            <li>  
                                <a href="recipe.php" class="side-menu__link side-menu__link--<?php active('recipe.php');?>">
                                    <i data-tw-merge="" data-lucide="drumstick" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                    <div class="side-menu__link__title">Recipe</div>
                                </a>
                                <!-- BEGIN: Second Child -->
                                <!-- END: Second Child -->
                            </li>
                            <li>
                                <a href="chef.php" class="side-menu__link side-menu__link--<?php active('chef.php');?>">
                                    <i data-tw-merge="" data-lucide="chef-hat" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                    <div class="side-menu__link__title">Chef</div>
                                </a>
                                <!-- BEGIN: Second Child -->
                                <!-- END: Second Child -->
                            </li>
                       <li>
                                <a href="users.php" class="side-menu__link side-menu__link--<?php active('users.php');?>">
                                    <i data-tw-merge="" data-lucide="users" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                    <div class="side-menu__link__title">Users</div>
                                </a>
                                <!-- BEGIN: Second Child -->
                                <!-- END: Second Child -->
                            </li>
                            
                            <li class="side-menu__divider">
                                Add 
                            </li>
                                                  <li>
                                <a href="add-user.php" class="side-menu__link side-menu__link--<?php active('add-user.php');?>">
                                    <i data-tw-merge="" data-lucide="user-plus" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                    <div class="side-menu__link__title">Add User</div>
                                </a>
                                <!-- BEGIN: Second Child -->
                                <!-- END: Second Child -->
                            </li>
                                                   <li>
                                <a href="add-recipe.php" class="side-menu__link side-menu__link--<?php active('add-recipe.php');?>">
                                    <i data-tw-merge="" data-lucide="package-plus" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                    <div class="side-menu__link__title">Add Recipe</div>
                                </a>
                                <!-- BEGIN: Second Child -->
                                <!-- END: Second Child -->
                            </li>
                                                   <li>
                                <a href="add-chef.php" class="side-menu__link side-menu__link--<?php active('add-chef.php');?>">
                                    <i data-tw-merge="" data-lucide="smile-plus" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                    <div class="side-menu__link__title">Add Chef</div>
                                </a>
                                <!-- BEGIN: Second Child -->
                                <!-- END: Second Child -->
                            </li>
                                      
                                                                                    <li>
                                <a href="add-admin.php" class="side-menu__link side-menu__link--<?php active('add-admin.php');?>">
                                    <i data-tw-merge="" data-lucide="shield-x" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                    <div class="side-menu__link__title">Add Admin</div>
                                </a>
                                <!-- BEGIN: Second Child -->
                                <!-- END: Second Child -->
                            </li>   
                                              <li>
                                <a href="logout.php" class="side-menu__link side-menu__link--<?php active('add-recipe.php');?>">
                                    <i data-tw-merge="" data-lucide="log-out" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                    <div class="side-menu__link__title">Logout</div>
                                </a>
                                <!-- BEGIN: Second Child -->
                                <!-- END: Second Child -->
                            </li>     
                            
                        </ul>
                    </div>
                </div>
<?php } elseif ($role === "chef") {?>

                <div class="side-menu__content pr-1 z-20 relative w-[275px] border-slate-200/80 duration-300 transition-[width] group-[.side-menu--collapsed]:xl:w-[91px] group-[.side-menu--collapsed.side-menu--on-hover]:xl:shadow-[6px_0_12px_-4px_#0000000f] group-[.side-menu--collapsed.side-menu--on-hover]:xl:w-[275px] h-screen flex flex-col after:content-[''] after:absolute after:inset-0 after:bg-gradient-to-b after:from-theme-1 after:to-theme-2/30  after:border-slate-200/80 after:group-[.side-menu--collapsed.side-menu--on-hover]:xl:shadow-[6px_0_12px_-4px_#0000000f] before:content-[''] before:absolute before:inset-0 before:bg-[275px_auto] before:bg-fixed before:bg-no-repeat before:bg-waveform before:bg-theme-2">
                    <div class="relative z-10 hidden h-[65px] w-[275px] flex-none items-center overflow-hidden px-5 duration-300 xl:flex group-[.side-menu--collapsed.side-menu--on-hover]:xl:w-[275px] group-[.side-menu--collapsed]:xl:w-[91px]">
                        <a class="flex items-center transition-[margin] duration-300 group-[.side-menu--collapsed.side-menu--on-hover]:xl:ml-0 group-[.side-menu--collapsed]:xl:ml-4" href="">
                            <div class="ml-3 font-medium text-white transition-opacity group-[.side-menu--collapsed.side-menu--on-hover]:xl:opacity-100 group-[.side-menu--collapsed]:xl:opacity-0">
                                <?php echo BLOG_NAME?>
                            </div>
                        </a>
                        <a class="toggle-compact-menu ml-auto hidden h-[20px] w-[20px] items-center justify-center rounded-full border border-white/40 text-white transition-[opacity,transform] hover:bg-white/5 group-[.side-menu--collapsed]:xl:rotate-180 group-[.side-menu--collapsed.side-menu--on-hover]:xl:opacity-100 group-[.side-menu--collapsed]:xl:opacity-0 3xl:flex" href="">
                            <i data-tw-merge="" data-lucide="arrow-left" class="h-3.5 w-3.5 stroke-[1.3]"></i>
                        </a>
                    </div>
                    <div class="scrollable-ref w-full h-full z-20 pl-5 pr-4 overflow-y-auto overflow-x-hidden pb-3 [-webkit-mask-image:-webkit-linear-gradient(top,rgba(0,0,0,0),black_30px)] [&:-webkit-scrollbar]:w-0 [&:-webkit-scrollbar]:bg-transparent [&_.simplebar-content]:p-0 [&_.simplebar-track.simplebar-vertical]:w-[10px] [&_.simplebar-track.simplebar-vertical]:mr-0.5 [&_.simplebar-track.simplebar-vertical_.simplebar-scrollbar]:before:bg-slate-400/30">
                        <ul class="scrollable">
                            <!-- BEGIN: First Child -->
                            <li class="side-menu__divider">
                               CHEF DASHBOARD
                            </li>
                            
                              <li>  
                                <a href="home.php" class="side-menu__link side-menu__link--<?php active('home.php');?>">
                                    <i data-tw-merge="" data-lucide="layout-dashboard" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                    <div class="side-menu__link__title">Dashboard</div>
                                </a>
                                <!-- BEGIN: Second Child -->
                                <!-- END: Second Child -->
                            </li>
                            
                            
                            <li>  
                                <a href="recipe.php" class="side-menu__link side-menu__link--<?php active('recipe.php');?>">
                                    <i data-tw-merge="" data-lucide="drumstick" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                    <div class="side-menu__link__title">Recipe</div>
                                </a>
                                <!-- BEGIN: Second Child -->
                                <!-- END: Second Child -->
                            </li>
                            
                            <li class="side-menu__divider">
                                Add 
                            </li>
                                                   <li>
                                <a href="add-recipe.php" class="side-menu__link side-menu__link--<?php active('add-recipe.php');?>">
                                    <i data-tw-merge="" data-lucide="package-plus" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                    <div class="side-menu__link__title">Add Recipe</div>
                                </a>
                                <!-- BEGIN: Second Child -->
                                <!-- END: Second Child -->
                            </li>
                            
                                                <li>
                                <a href="logout.php" class="side-menu__link side-menu__link--<?php active('add-recipe.php');?>">
                                    <i data-tw-merge="" data-lucide="log-out" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                    <div class="side-menu__link__title">Logout</div>
                                </a>
                                <!-- BEGIN: Second Child -->
                                <!-- END: Second Child -->
                            </li>   
                        </ul>
                    </div>
                </div>


<?php } ?>    

