<?php

/**
 * Template Name: Account Page
 */
if (! defined('ABSPATH')) {
    exit;
}

get_template_part('parts/header'); ?>

<section class="bg-creator-profile">
    <div class="container">
        <div class="profile-banner">
            <input id="pro-banner" name="profile-banner" type="file" class="d-none" onchange="loadFile(event)" />
            <div class="position-relative d-inline-block">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/background/dark-background.jpg" class="rounded-md shadow-sm img-fluid" id="profile-banner" alt="">

            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col">
                <div class="text-center mt-n80">
                    <div class="profile-pic">
                        <input id="pro-img" name="profile-image" type="file" class="d-none" onchange="loadFile(event)" />
                        <div class="position-relative d-inline-block">
                            <?php
                            $current_user = wp_get_current_user();
                            $avatar_url = get_avatar_url($current_user->ID);
                            ?>
                            <img src="<?php echo esc_url($avatar_url); ?>" class="avatar avatar-medium img-thumbnail rounded-pill shadow-sm" id="profile-image" alt="">
                            <label class="icons position-absolute bottom-0 end-0" for="pro-img"><span class="btn btn-icon btn-sm btn-pills btn-primary"><i data-feather="camera" class="icons"></i></span></label>
                        </div>
                    </div>

                    <div class="content mt-3">
                        <h5 class="mb-3"><?php echo esc_html($current_user->user_login); ?></h5>
                        <small class="text-muted px-2 py-1 rounded-lg shadow">*Link to the account* <a href="javascript:void(0)" class="text-primary h5 ms-1"><i class="uil uil-copy"></i></a></small>

                        <h6 class="mt-3 mb-0">Artist, UX / UI designer, and Entrepreneur</h6>

                        <div class="mt-4">
                            <a href="creator-profile-edit.html" class="btn btn-pills btn-outline-primary mx-1">Edit Profile</a>
                            <button id="logout-btn" class="btn btn-pills btn-outline-primary mx-1">Logout</button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-50 mt-60">
        <div class="row">
            <div class="col-12">
                <ul class="nav center-flex nav-tabs border-bottom account-menu" id="myTab" role="tablist">
                    <li class="nav-item " role="presentation">
                        <button class="nav-link account-btn active" data-section="section-1" id="Create-tab" data-bs-toggle="tab" data-bs-target="#CreateItem" type="button" role="tab" aria-controls="CreateItem" aria-selected="true">Downloads</button>
                    </li>

                    <li class="nav-item " role="presentation">
                        <button class="nav-link account-btn" data-section="section-2" id="Liked-tab" data-bs-toggle="tab" data-bs-target="#Liked" type="button" role="tab" aria-controls="Liked" aria-selected="false">Become an author</button>
                    </li>
                </ul>

                <div id="loader" class="text-center" style="display:none;">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/loader.gif" class="img-fluid pd-50" alt="">
                </div>
                <div class="account-content " id="account-content">
                    <div class="row mt-2 center-flex align-items-center">
                        <div class="col-lg-5 col-md-6">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/announcement.png" class="img-fluid pd-50" alt="">
                        </div>

                        <div class="col-lg-5 col-md-6 mt-4 pt-2 mt-sm-0 pt-sm-0">
                            <div class="title-heading">
                                <h6>Join with Superex!</h6>
                                <h5 class="heading fw-bold title-dark mb-4">No <span class="text-gradient-primary">Items</span></h5>
                                <p class="text-muted mb-0 para-desc">You haven't downloaded any products yet.</p>
                                <button type="submit" id="submit" name="send" class="btn mt-3 btn-primary rounded-md">Browse the market</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<div class="modal " id="modal-logout" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content justify-content-center border-0 shadow-md rounded-md position-relative">
            <div class="position-absolute top-0 start-100 translate-middle z-index-1">
                <button type="button" class="btn btn-icon btn-pills btn-sm btn-light btn-close opacity-10" data-bs-dismiss="modal" id="close-logout"><i class="uil uil-times fs-4 text-muted"></i></button>
            </div>

            <div class="modal-body p-4 text-center">
                <img src="images/wallet/MetaMask_Fox.svg" class="avatar avatar-md-md rounded-circle shadow-sm " alt="">

                <div class="content mt-4">
                    <h5 class="text-danger mb-4">Are you sure you wanan logout?</h5>

                    <P class="text-muted">Please Download MetaMask and create your profile and wallet in MetaMask. Please click and check the details,</P>

                    <a href="<?php echo wp_logout_url(home_url()); ?>" class="btn btn-link primary text-primary fw-bold" target="_blank">Logout</a>
                    <button id="cancel-logout" class="btn btn-link primary text-primary fw-bold" target="_blank">Get back</butotn>
                </div>
            </div>
        </div>
    </div>
</div>


<?php get_template_part('parts/footer'); ?>