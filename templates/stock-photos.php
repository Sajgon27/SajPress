<?php

/**
 * Template Name: Stock Photos Page
 */

 if ( ! defined( 'ABSPATH' ) ) {
	exit; 
}

get_template_part('parts/header'); ?>


<section class="bg-half-170 d-table w-100" style="background: url(<?php echo get_template_directory_uri(); ?>/assets/images/background/dark-background.jpg) bottom;">
    <div class="bg-overlay bg-gradient-overlay-2"></div>
    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-12">
                <div class="title-heading text-center">
                    <h5 class="heading fw-semibold sub-heading text-white title-dark">Stock Content</h5>
                    <p class="text-white-50 para-desc mx-auto mb-0">Explore huge library of free stock content for your website.</p>
                </div>
            </div>
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
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="features-absolute">
                    <div class="row justify-content-center" id="reserve-form">
                        <div class="col-xl-10 mt-lg-5">
                            <div class="card bg-white feature-top border-0 shadow rounded p-3">
                                <form action="#">
                                    <div class="registration-form text-dark text-start">
                                        <div class="row g-lg-0">
                                            <div class="col-lg-3 col-md-6">
                                                <div class="filter-search-form position-relative filter-border">
                                                    <i class="uil uil-search icons"></i>
                                                    <input name="name" type="text" id="search-keyword" class="form-control filter-input-box bg-light border-0" placeholder="Search your keaywords">
                                                </div>
                                            </div>

                                            <div class="col-lg-3 col-md-6 mt-3 mt-md-0">
                                                <div class="filter-search-form position-relative filter-border">
                                                    <i class="uil uil-usd-circle icons"></i>
                                                    <select class="form-select" data-trigger name="choices-criteria" id="choices-criteria" aria-label="Default select example">
                                                        <option selected="" value="1">Auction Product</option>
                                                        <option value="2">On Sale</option>
                                                        <option value="3">Offers</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-lg-3 col-md-6 mt-3 mt-lg-0">
                                                <div class="filter-search-form position-relative filter-border">
                                                    <i class="uil uil-window icons"></i>
                                                    <select class="form-select " data-trigger name="choices-type" id="choices-type" aria-label="Default select example">
                                                        <option selected="" value="1">Art</option>
                                                        <option value="2">Games</option>
                                                        <option value="3">Music</option>
                                                        <option value="4">Videos</option>
                                                        <option value="5">Memes</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-lg-3 col-md-6 mt-3 mt-lg-0">
                                                <input type="submit" id="search" name="search" style="height: 60px;" class="btn btn-primary rounded-md searchbtn submit-btn w-100" value="Search">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row ">
            <div class="col mt-4 pt-2">

                <div id="photo-container" class="pexels-gallery">
                    <div id="containerA"></div>
                    <div id="containerB"></div>
                    <div id="containerC"></div>
                </div>

                <div class="row justify-content-center mt-4">
                    <div class="col">
                        <div class="text-center">
                            <span id="load-more" style="display: none;" class="btn btn-primary rounded-md w-25 m-auto"><i class="uil uil-process mdi-spin me-1"></i> Load More</span>
                            <p id="loading" style="display: none;">Loading more photos...</p>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/4.2.2/masonry.pkgd.min.js"></script>










<?php get_template_part('parts/footer'); ?>