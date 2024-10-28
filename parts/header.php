<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; 
}

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
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico">
    <?php wp_head(); ?>
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
            
            <a class="logo" href="/">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-dark.png" height="50" class="logo-light-mode" alt="">
                <img src="images/logo-light.png" height="26" class="logo-dark-mode" alt="">
            </a>
            
            <div class="menu-extras">
                <div class="menu-item">
                    <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                </div>
            </div>

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
                    <a href="/cart" id="connectCart" class="btn btn-icon btn-pills btn-primary"><i class="uil uil-shopping-cart-alt fs-6"></i></a>
                </li>

                <li class="list-inline-item mb-0">
                    <?php if (is_user_logged_in()) :
                        $current_user = wp_get_current_user();
                        $avatar_url = get_avatar_url($current_user->ID);
                    ?>
                        <a href="/account"><img src="<?php echo esc_url($avatar_url); ?>" class="rounded-pill avatar avatar-sm-sm" alt=""></a>
                    <?php else : ?>
                        <a href="/login" id="connectCart" class="btn btn-icon btn-pills btn-primary"><i class="uil uil-user fs-6"></i></a>

                    <?php endif; ?>
                </li>
            </ul>


            <div id="navigation">
                <ul class="navigation-menu nav-left">

                    <?php
                    $menu_name = 'header-menu';
                    $menu_items = wp_get_nav_menu_items(get_nav_menu_locations()[$menu_name]);

                    $menu_tree = array();

                    foreach ($menu_items as $item) {
                        if ($item->menu_item_parent == 0) {
                            $menu_tree[$item->ID] = array('item' => $item, 'children' => array());
                        } else {
                            $menu_tree[$item->menu_item_parent]['children'][] = $item;
                        }
                    }

                    foreach ($menu_tree as $menu_item) {
                        if (!empty($menu_item['children'])) {
                        ?> 
                            <li class="has-submenu parent-parent-menu-item"><a href="<?php echo esc_url($menu_item['item']->url); ?>" class="sub-menu-item"><?php echo esc_html($menu_item['item']->title); ?></a><?php
                                echo '<ul class="submenu ">';
                                foreach ($menu_item['children'] as $child) {
                                    ?>
                                    <li><a href="<?php echo esc_url($child->url); ?>" class="sub-menu-item"> <?php echo esc_html($child->title); ?></a></li> <?php
                                }
                                echo '</ul> </li> ';
                        } 
                        else {
                            ?> <li><a href="<?php echo esc_url($menu_item['item']->url); ?>" class="sub-menu-item"><?php echo esc_html($menu_item['item']->title); ?></a></li> <?php
                        }
                        echo '</li>';
                    }
                    ?>
                </ul>
            </div>
        </div>
    </header>