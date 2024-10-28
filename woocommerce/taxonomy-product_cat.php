<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; 
}

get_template_part('parts/header');

if (is_tax('product_cat')) {
    $category = get_queried_object();
}

?>


<section class="bg-half-170 d-table w-100" style="background: url(<?php echo get_template_directory_uri(); ?>/assets/images/background/dark-background.jpg) bottom;">
    <div class="bg-overlay bg-gradient-overlay-2"></div>
    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-12">
                <div class="title-heading text-center">
                    <h5 class="heading fw-semibold sub-heading text-white title-dark"><?php echo esc_html($category->name); ?></h5>
                    <?php if ($category->description) : ?>
                        <p class="text-white-50 para-desc mx-auto mb-0"><?php echo wp_kses_post(wpautop($category->description)); ?></p>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <div class="position-middle-bottom">
            <nav aria-label="breadcrumb" class="d-block">

                <ul class="breadcrumb breadcrumb-muted mb-0 p-0">

                </ul>
            </nav>
        </div>
    </div>
</section>
<div class="position-relative">
    <div class="shape overflow-hidden text-white">
        <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
        </svg>
    </div>
</div>



<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-md-6">
                <div class="sticky-bar">
                    <h5 class="mb-0">NFT Filters</h5>
                    <div class="p-4 rounded-md shadow mt-4">
                        <div>
                            <h6>Orders By:</h6>
                            <form>
                                <div class="form-check align-items-center d-flex mb-0">
                                    <input class="form-check-input" type="checkbox" value="" id="NewOrder">
                                    <label class="form-check-label fw-bold ms-2" for="NewOrder">Newest</label>
                                </div>
                                <div class="form-check align-items-center d-flex mb-0">
                                    <input class="form-check-input" type="checkbox" value="" id="TrendOrder">
                                    <label class="form-check-label fw-bold ms-2" for="TrendOrder">Trending</label>
                                </div>
                                <div class="form-check align-items-center d-flex mb-0">
                                    <input class="form-check-input" type="checkbox" value="" id="OldOrder">
                                    <label class="form-check-label fw-bold ms-2" for="OldOrder">Oldest</label>
                                </div>
                            </form>
                        </div>

                        <div class="mt-4">
                            <h6>Catagories By:</h6>
                            <form>
                                <div class="form-check align-items-center d-flex mb-0">
                                    <input class="form-check-input" type="checkbox" value="" id="GamesCatagory">
                                    <label class="form-check-label fw-bold ms-2" for="GamesCatagory">Games</label>
                                </div>
                                <div class="form-check align-items-center d-flex mb-0">
                                    <input class="form-check-input" type="checkbox" value="" id="ArtCatagory">
                                    <label class="form-check-label fw-bold ms-2" for="ArtCatagory">Art</label>
                                </div>
                                <div class="form-check align-items-center d-flex mb-0">
                                    <input class="form-check-input" type="checkbox" value="" id="MusicCatagory">
                                    <label class="form-check-label fw-bold ms-2" for="MusicCatagory">Music</label>
                                </div>
                                <div class="form-check align-items-center d-flex mb-0">
                                    <input class="form-check-input" type="checkbox" value="" id="VideoCatagory">
                                    <label class="form-check-label fw-bold ms-2" for="VideoCatagory">Video</label>
                                </div>
                                <div class="form-check align-items-center d-flex mb-0">
                                    <input class="form-check-input" type="checkbox" value="" id="MemesCatagory">
                                    <label class="form-check-label fw-bold ms-2" for="MemesCatagory">Memes</label>
                                </div>
                                <div class="form-check align-items-center d-flex mb-0">
                                    <input class="form-check-input" type="checkbox" value="" id="IllustrationCatagory">
                                    <label class="form-check-label fw-bold ms-2" for="IllustrationCatagory">Illustration</label>
                                </div>
                                <div class="form-check align-items-center d-flex mb-0">
                                    <input class="form-check-input" type="checkbox" value="" id="GIFsCatagory">
                                    <label class="form-check-label fw-bold ms-2" for="GIFsCatagory">GIFs</label>
                                </div>
                            </form>
                        </div>

                        <div class="mt-4">
                            <h6>Creators By:</h6>
                            <form>
                                <div class="form-check align-items-center d-flex mb-0">
                                    <input class="form-check-input" type="checkbox" value="" id="AllCreators">
                                    <label class="form-check-label fw-bold ms-2" for="AllCreators">All Creators</label>
                                </div>
                                <div class="form-check align-items-center d-flex mb-0">
                                    <input class="form-check-input" type="checkbox" value="" id="VerifyCreators">
                                    <label class="form-check-label fw-bold ms-2" for="VerifyCreators">Verified Creators</label>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-9 col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                <div class="row ">






                    <?php
                    if (have_posts()) : ?>

                        <?php woocommerce_product_loop_start(); ?>

                        <?php while (have_posts()) : the_post(); ?>
                            <?php
                            get_template_part('parts/loop-product');
                            ?>
                        <?php endwhile; ?>

                        <?php woocommerce_product_loop_end(); ?>

                        <?php woocommerce_pagination(); ?>

                    <?php else : ?>
                        <p><?php esc_html_e('No products found in this category.', 'your-theme-textdomain'); ?></p>
                    <?php endif; ?>



                </div>

                <div class="row justify-content-center mt-4">
                    <div class="col">
                        <div class="text-center">
                            <a href="javascript:void(0)" class="btn btn-primary rounded-md"><i class="uil uil-process mdi-spin me-1"></i> Load More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="section pt-0 pt-sm-5 mt-0 mt-sm-5">
    <div class="container">
        <div class="bg-black rounded-md p-md-5 p-4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="app-subscribe text-center text-md-start">
                            <img src="images/cta.png" class="img-fluid" height="120" alt="">
                        </div>
                    </div>

                    <div class="col-lg-8 col-md-6 mt-4 pt-2 mt-sm-0 pt-sm-0">
                        <div class="section-title text-center text-md-start ms-xl-5 ms-md-4">
                            <h4 class="display-6 fw-bold text-white title-dark mb-0">Get <span class="text-gradient-primary fw-bold">Free collections </span> <br> with your subscription</h4>

                            <div class="mt-4">
                                <a href="javascript:void(0)" class="btn btn-link primary text-white title-dark">Subscribe Now <i class="uil uil-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php
get_template_part('parts/footer');
