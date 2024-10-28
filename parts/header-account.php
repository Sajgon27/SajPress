<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; 
}
// FILE TO CHANGE
?>

<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <title>Superex - NFT Marketplace HTML Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="NFT Marketplace Website Template" />
        <meta name="keywords" content="blockchain nft, collectibles, crypto, crypto art, crypto asset, crypto marketplace, digital, item, NFT, NFT assets, NFT Gaming, nft marketplace, token, wallet" />
        <meta content="Shreethemes" name="author" />
        <meta content="support@shreethemes.in" name="Email" />
        <meta content="https://shreethemes.in/" name="Website" />
        <!-- favicon -->
        <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico">
        <?php wp_head(); ?> <!-- This function calls all enqueued styles and other head elements --> 
    </head>
    <body>
        <header id="topnav" class="defaultscroll sticky">

            <div class="py-5 bg-primary top-header-bar">
                <div class="container bg-primary">
                    <ul class="navigation-menu nav-right">
                        <li><a href="activity.html" class="sub-menu-item">Start selling</a></li>
                        <li><a href="activity.html" class="sub-menu-item">AI Tools</a></li>
                        <li><a href="activity.html" class="sub-menu-item">Forum</a></li>
                    </ul>
                </div>
            </div>


            <div class="container">
                <!-- Logo Start-->
                <a class="logo" href="/">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-dark.png" height="26" class="logo-light-mode" alt="">
                    <img src="images/logo-light.png" height="26" class="logo-dark-mode" alt="">
                </a>
                <!-- Logo end-->

                <!-- Mobile -->
                <div class="menu-extras">
                    <div class="menu-item">
                        <!-- Mobile menu toggle-->
                        <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                        <!-- End mobile menu toggle-->
                    </div>
                </div>
                <!-- Mobile -->

                <!--Login button Start-->
                <ul class="buy-button list-inline mb-0">
                    <li class="list-inline-item mb-0 me-1">
                        <div class="dropdown">
                            <button type="button" class="btn dropdown-toggle p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="uil uil-search text-dark fs-5 align-middle"></i>
                            </button>
                            <div class="dropdown-menu dd-menu dropdown-menu-end bg-white shadow rounded border-0 mt-3 p-0" style="width: 300px;">
                                <div class="search-bar">
                                    <div id="itemSearch" class="menu-search mb-0">
                                        <form role="search" method="get" id="searchItemform" class="searchform">
                                            <input type="text" class="form-control border rounded" name="s" id="searchItem" placeholder="Search...">
                                            <input type="submit" id="searchItemsubmit" value="Search">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="list-inline-item mb-0 me-1">
                        <a id="connectCart" class="btn btn-icon btn-pills btn-primary"><i class="uil uil-shopping-cart-alt fs-6"></i></a>
                    </li>
                    
                    <li class="list-inline-item mb-0">
                       
                            <?php if ( is_user_logged_in() ) : 
                                $current_user = wp_get_current_user();
                                $avatar_url = get_avatar_url( $current_user->ID );
                                ?>

                                <a href="/account"><img src="<?php echo esc_url( $avatar_url ); ?>" class="rounded-pill avatar avatar-sm-sm" alt=""></a>
 
                            <?php else : ?>
                                <a href="/login" id="connectCart" class="btn btn-icon btn-pills btn-primary"><i class="uil uil-user fs-6"></i></a>
                                            
                            <?php endif; ?>
                        
                       
                    </li>
                </ul>
                <!--Login button End-->

                <div id="navigation">
                    <!-- Navigation Menu-->   
                    <ul class="navigation-menu nav-left">
                        <li class="has-submenu parent-parent-menu-item">
                            <a href="javascript:void(0)">Themes</a><span class="menu-arrow"></span>
                            <ul class="submenu megamenu">
                                <li>
                                    <ul>
                                        <li class="megamenu-head">LTR Home Pages</li>
                                        <li><a href="index.html" class="sub-menu-item">Home One</a></li>
                                        <li><a href="index-two.html" class="sub-menu-item">Home Two</a></li>
                                        <li><a href="index-three.html" class="sub-menu-item">Home Three</a></li>
                                        <li><a href="index-four.html" class="sub-menu-item">Home Four</a></li>
                                        <li><a href="index-five.html" class="sub-menu-item">Home Five</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <ul>
                                        <li class="megamenu-head">LTR Dark Home Pages</li>
                                        <li><a href="index-dark.html" class="sub-menu-item">Home One Dark</a></li>
                                        <li><a href="index-two-dark.html" class="sub-menu-item">Home Two Dark</a></li>
                                        <li><a href="index-three-dark.html" class="sub-menu-item">Home Three Dark</a></li>
                                        <li><a href="index-four-dark.html" class="sub-menu-item">Home Four Dark</a></li>
                                        <li><a href="index-five-dark.html" class="sub-menu-item">Home Five Dark</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <ul>
                                        <li class="megamenu-head">RTL Home Pages</li>
                                        <li><a href="index-rtl.html" class="sub-menu-item">Home One RTL</a></li>
                                        <li><a href="index-two-rtl.html" class="sub-menu-item">Home Two RTL</a></li>
                                        <li><a href="index-three-rtl.html" class="sub-menu-item">Home Three RTL</a></li>
                                        <li><a href="index-four-rtl.html" class="sub-menu-item">Home Four RTL</a></li>
                                        <li><a href="index-five-rtl.html" class="sub-menu-item">Home Five RTL</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <ul>
                                        <li class="megamenu-head">RTL Dark Home Pages</li>
                                        <li><a href="index-dark-rtl.html" class="sub-menu-item">Home One Dark RTL</a></li>
                                        <li><a href="index-two-dark-rtl.html" class="sub-menu-item">Home Two Dark RTL</a></li>
                                        <li><a href="index-three-dark-rtl.html" class="sub-menu-item">Home Three Dark RTL</a></li>
                                        <li><a href="index-four-dark-rtl.html" class="sub-menu-item">Home Four Dark RTL</a></li>
                                        <li><a href="index-five-dark-rtl.html" class="sub-menu-item">Home Five Dark RTL</a></li>
                                    </ul>
                                </li>
                                
                                <li class="d-none d-lg-block">
                                    <ul>
                                        <li><img src="images/character.png" class="img-fluid" alt=""></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        
                        <li class="has-submenu parent-parent-menu-item">
                            <a href="javascript:void(0)">Elementor templates</a><span class="menu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="explore-one.html" class="sub-menu-item"> Explore One</a></li>
                                <li><a href="explore-two.html" class="sub-menu-item"> Explore Two</a></li>
                                <li><a href="explore-three.html" class="sub-menu-item"> Explore Three</a></li>
                                <li><a href="explore-four.html" class="sub-menu-item"> Explore Four</a></li>
                                <li><a href="auction.html" class="sub-menu-item">Live Auction</a></li>
                                <li><a href="item-detail-one.html" class="sub-menu-item"> Item Detail One</a></li>
                                <li><a href="item-detail-two.html" class="sub-menu-item"> Item Detail Two</a></li>
                            </ul>
                        </li>
                        
                        <li><a href="activity.html" class="sub-menu-item">Plugins</a></li>

                        <li><a href="wallet.html" class="sub-menu-item">Hosting</a></li>

                        <li class="has-submenu parent-parent-menu-item">
                            <a href="javascript:void(0)">Domain</a><span class="menu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="aboutus.html" class="sub-menu-item">About Us</a></li>
                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Creator </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="creators.html" class="sub-menu-item"> Creators</a></li>
                                        <li><a href="creator-profile.html" class="sub-menu-item"> Creator Profile</a></li>
                                        <li><a href="creator-profile-edit.html" class="sub-menu-item"> Profile Edit</a></li>
                                        <li><a href="become-creator.html" class="sub-menu-item"> Become Creator</a></li>
                                    </ul>
                                </li>
                                <li><a href="collections.html" class="sub-menu-item">Collections</a></li>
                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Blog </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="blogs.html" class="sub-menu-item"> Blogs</a></li>
                                        <li><a href="blog-sidebar.html" class="sub-menu-item"> Blog with sidebar</a></li>
                                        <li><a href="blog-detail.html" class="sub-menu-item"> Blog Detail</a></li>
                                    </ul> 
                                </li>
                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Auth Pages </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="login.html" class="sub-menu-item"> Login</a></li>
                                        <li><a href="signup.html" class="sub-menu-item"> Signup</a></li>
                                        <li><a href="reset-password.html" class="sub-menu-item"> Forgot Password</a></li>
                                        <li><a href="lock-screen.html" class="sub-menu-item"> Lock Screen</a></li>
                                    </ul> 
                                </li>
                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Special</a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="comingsoon.html" class="sub-menu-item"> Coming Soon</a></li>
                                        <li><a href="maintenance.html" class="sub-menu-item"> Maintenance</a></li>
                                        <li><a href="error.html" class="sub-menu-item"> 404!</a></li>
                                    </ul> 
                                </li>
                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Help Center</a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="helpcenter-overview.html" class="sub-menu-item"> Overview</a></li>
                                        <li><a href="helpcenter-faqs.html" class="sub-menu-item"> FAQs</a></li>
                                        <li><a href="helpcenter-guides.html" class="sub-menu-item"> Guides</a></li>
                                        <li><a href="helpcenter-support-request.html" class="sub-menu-item"> Support</a></li>
                                    </ul> 
                                </li>
                                <li><a href="upload-work.html" class="sub-menu-item">Upload Works</a></li>
                                <li><a href="terms.html" class="sub-menu-item">Terms Policy</a></li>
                                <li><a href="privacy.html" class="sub-menu-item">Privacy Policy</a></li>
                                <li><a href="changelog.html" class="sub-menu-item">Changelog</a></li>
                            </ul>
                        </li>
                        

                        <li><a href="contact.html" class="sub-menu-item">Stock content</a></li>
                    </ul><!--end navigation menu-->
                </div><!--end navigation-->
            </div><!--end container-->
        </header><!--end header-->




