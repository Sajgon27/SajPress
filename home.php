<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; 
}

get_template_part('parts/header'); ?>

<section class="bg-half-100 d-table w-100 pb-0">
    <div class="container position-relative" style="z-index: 1;">
        <div class="bg-half-100 rounded-md shadow-sm position-relative overflow-hidden">
            <div class="bg-video-wrapper">
                <iframe src="https://player.vimeo.com/video/502163294?background=1&autoplay=1&loop=1&byline=0&title=0"></iframe>
              

                <!-- <iframe src="https://www.youtube.com/embed/yba7hPeTSjk?controls=0&showinfo=0&rel=0&autoplay=1&loop=1&mute=1"></iframe> -->
               
            </div>
            <div class="bg-overlay bg-linear-gradient-2"></div>
            <div class="row justify-content-center my-5">
                <div class="col-12">
                    <div class="title-heading text-center px-4">
                        <h4 class="display-6 text-white title-dark fw-medium mb-3">Thes way to Find <br> any <span class="text-gradient-primary">Digital</span> Content</h4>
                        <p class="text-white title-dark mb-0">Discover limited-edition digital arts. Create, Sell and Buy now.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



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

    <div class="container mt-4 pt-2 mt-lg-0 pt-lg-0">
        <div class="row row-cols-xl-4 row-cols-lg-3 row-cols-sm-2 row-cols-1 g-4">
            <div class="col">
                <div class="card nft-items nft-primary rounded-md shadow overflow-hidden mb-1 p-3">
                    <div class="d-flex justify-content-between">
                        <div class="img-group">
                            <a href="creator-profile.html" class="user-avatar">
                                <img src="images/client/08.jpg" alt="user" class="avatar avatar-sm-sm img-thumbnail border-0 shadow-sm rounded-circle">
                            </a>
                            <a href="creator-profile.html" class="user-avatar ms-n3">
                                <img src="images/client/05.jpg" alt="user" class="avatar avatar-sm-sm img-thumbnail border-0 shadow-sm rounded-circle">
                            </a>
                            <a href="creator-profile.html" class="user-avatar ms-n3">
                                <img src="images/client/06.jpg" alt="user" class="avatar avatar-sm-sm img-thumbnail border-0 shadow-sm rounded-circle">
                            </a>
                        </div>

                        <span class="like-icon shadow-sm"><a href="javascript:void(0)" class="text-muted icon"><i class="mdi mdi-18px mdi-heart mb-0"></i></a></span>
                    </div>

                    <div class="nft-image rounded-md mt-3 position-relative overflow-hidden">
                        <a href="item-detail-one.html"><img src="images/gif/7.gif" class="img-fluid" alt=""></a>
                        <div class="position-absolute top-0 start-0 m-2">
                            <a href="javascript:void(0)" class="badge badge-link bg-primary">GIFs</a>
                        </div>

                        <div class="position-absolute bottom-0 start-0 m-2 bg-gradient-primary text-white title-dark rounded-pill px-3">
                            <i class="uil uil-clock"></i> <small id="auction-item-1" class="fw-bold"></small>
                        </div>
                    </div>

                    <div class="card-body content position-relative p-0 mt-3">
                        <a href="item-detail-one.html" class="title text-dark h6">Deep Sea Phantasy</a>

                        <div class="d-flex justify-content-between mt-2">
                            <small class="rate fw-bold">20.5 ETH</small>
                            <small class="text-dark fw-bold">1 out of 10</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card nft-items nft-primary rounded-md shadow overflow-hidden mb-1 p-3">
                    <div class="d-flex justify-content-between">
                        <div class="img-group">
                            <a href="creator-profile.html" class="user-avatar">
                                <img src="images/client/08.jpg" alt="user" class="avatar avatar-sm-sm img-thumbnail border-0 shadow-sm rounded-circle">
                            </a>
                            <a href="creator-profile.html" class="user-avatar ms-n3">
                                <img src="images/client/05.jpg" alt="user" class="avatar avatar-sm-sm img-thumbnail border-0 shadow-sm rounded-circle">
                            </a>
                            <a href="creator-profile.html" class="user-avatar ms-n3">
                                <img src="images/client/06.jpg" alt="user" class="avatar avatar-sm-sm img-thumbnail border-0 shadow-sm rounded-circle">
                            </a>
                        </div>

                        <span class="like-icon shadow-sm"><a href="javascript:void(0)" class="text-muted icon"><i class="mdi mdi-18px mdi-heart mb-0"></i></a></span>
                    </div>
                    <div class="nft-image rounded-md mt-3 position-relative overflow-hidden">
                        <a href="item-detail-one.html"><img src="images/items/1.jpg" class="img-fluid" alt=""></a>
                        <div class="position-absolute top-0 start-0 m-2">
                            <a href="javascript:void(0)" class="badge badge-link bg-primary">Arts</a>
                        </div>
                    </div>

                    <div class="card-body content position-relative p-0 mt-3">
                        <a href="item-detail-one.html" class="title text-dark h6">CyberPrimal 042 LAN</a>

                        <div class="d-flex justify-content-between mt-2">
                            <small class="rate fw-bold">20.5 ETH</small>
                            <small class="text-dark fw-bold">1 out of 10</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card nft-items nft-primary rounded-md shadow overflow-hidden mb-1 p-3">
                    <div class="d-flex justify-content-between">
                        <div class="img-group">
                            <a href="creator-profile.html" class="user-avatar">
                                <img src="images/client/08.jpg" alt="user" class="avatar avatar-sm-sm img-thumbnail border-0 shadow-sm rounded-circle">
                            </a>
                            <a href="creator-profile.html" class="user-avatar ms-n3">
                                <img src="images/client/05.jpg" alt="user" class="avatar avatar-sm-sm img-thumbnail border-0 shadow-sm rounded-circle">
                            </a>
                            <a href="creator-profile.html" class="user-avatar ms-n3">
                                <img src="images/client/06.jpg" alt="user" class="avatar avatar-sm-sm img-thumbnail border-0 shadow-sm rounded-circle">
                            </a>
                        </div>

                        <span class="like-icon shadow-sm"><a href="javascript:void(0)" class="text-muted icon"><i class="mdi mdi-18px mdi-heart mb-0"></i></a></span>
                    </div>
                    <div class="nft-image rounded-md mt-3 position-relative overflow-hidden">
                        <a href="item-detail-one.html"><img src="images/gif/8.gif" class="img-fluid" alt=""></a>
                        <div class="position-absolute top-0 start-0 m-2">
                            <span class="badge badge-link bg-primary">Games</span>
                        </div>
                    </div>

                    <div class="card-body content position-relative p-0 mt-3">
                        <a href="item-detail-one.html" class="title text-dark h6">Crypto Egg Stamp #5</a>

                        <div class="d-flex justify-content-between mt-2">
                            <small class="rate fw-bold">20.5 ETH</small>
                            <small class="text-dark fw-bold">1 out of 10</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card nft-items nft-primary rounded-md shadow overflow-hidden mb-1 p-3">
                    <div class="d-flex justify-content-between">
                        <div class="img-group">
                            <a href="creator-profile.html" class="user-avatar">
                                <img src="images/client/08.jpg" alt="user" class="avatar avatar-sm-sm img-thumbnail border-0 shadow-sm rounded-circle">
                            </a>
                            <a href="creator-profile.html" class="user-avatar ms-n3">
                                <img src="images/client/05.jpg" alt="user" class="avatar avatar-sm-sm img-thumbnail border-0 shadow-sm rounded-circle">
                            </a>
                            <a href="creator-profile.html" class="user-avatar ms-n3">
                                <img src="images/client/06.jpg" alt="user" class="avatar avatar-sm-sm img-thumbnail border-0 shadow-sm rounded-circle">
                            </a>
                        </div>

                        <span class="like-icon shadow-sm"><a href="javascript:void(0)" class="text-muted icon"><i class="mdi mdi-18px mdi-heart mb-0"></i></a></span>
                    </div>
                    <div class="nft-image rounded-md mt-3 position-relative overflow-hidden">
                        <a href="item-detail-one.html"><img src="images/items/2.jpg" class="img-fluid" alt=""></a>

                        <div class="position-absolute bottom-0 start-0 m-2 bg-gradient-primary text-white title-dark rounded-pill px-3">
                            <i class="uil uil-clock"></i> <small id="auction-item-2" class="fw-bold"></small>
                        </div>
                    </div>

                    <div class="card-body content position-relative p-0 mt-3">
                        <a href="item-detail-one.html" class="title text-dark h6">Colorful Abstract Painting</a>

                        <div class="d-flex justify-content-between mt-2">
                            <small class="rate fw-bold">20.5 ETH</small>
                            <small class="text-dark fw-bold">1 out of 10</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card nft-items nft-primary rounded-md shadow overflow-hidden mb-1 p-3">
                    <div class="d-flex justify-content-between">
                        <div class="img-group">
                            <a href="creator-profile.html" class="user-avatar">
                                <img src="images/client/08.jpg" alt="user" class="avatar avatar-sm-sm img-thumbnail border-0 shadow-sm rounded-circle">
                            </a>
                            <a href="creator-profile.html" class="user-avatar ms-n3">
                                <img src="images/client/05.jpg" alt="user" class="avatar avatar-sm-sm img-thumbnail border-0 shadow-sm rounded-circle">
                            </a>
                            <a href="creator-profile.html" class="user-avatar ms-n3">
                                <img src="images/client/06.jpg" alt="user" class="avatar avatar-sm-sm img-thumbnail border-0 shadow-sm rounded-circle">
                            </a>
                        </div>

                        <span class="like-icon shadow-sm"><a href="javascript:void(0)" class="text-muted icon"><i class="mdi mdi-18px mdi-heart mb-0"></i></a></span>
                    </div>
                    <div class="nft-image rounded-md mt-3 position-relative overflow-hidden">
                        <a href="item-detail-one.html"><img src="images/items/3.jpg" class="img-fluid" alt=""></a>
                    </div>

                    <div class="card-body content position-relative p-0 mt-3">
                        <a href="item-detail-one.html" class="title text-dark h6">Liquid Forest Princess</a>

                        <div class="d-flex justify-content-between mt-2">
                            <small class="rate fw-bold">20.5 ETH</small>
                            <small class="text-dark fw-bold">1 out of 10</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card nft-items nft-primary rounded-md shadow overflow-hidden mb-1 p-3">
                    <div class="d-flex justify-content-between">
                        <div class="img-group">
                            <a href="creator-profile.html" class="user-avatar">
                                <img src="images/client/08.jpg" alt="user" class="avatar avatar-sm-sm img-thumbnail border-0 shadow-sm rounded-circle">
                            </a>
                            <a href="creator-profile.html" class="user-avatar ms-n3">
                                <img src="images/client/05.jpg" alt="user" class="avatar avatar-sm-sm img-thumbnail border-0 shadow-sm rounded-circle">
                            </a>
                            <a href="creator-profile.html" class="user-avatar ms-n3">
                                <img src="images/client/06.jpg" alt="user" class="avatar avatar-sm-sm img-thumbnail border-0 shadow-sm rounded-circle">
                            </a>
                        </div>

                        <span class="like-icon shadow-sm"><a href="javascript:void(0)" class="text-muted icon"><i class="mdi mdi-18px mdi-heart mb-0"></i></a></span>
                    </div>
                    <div class="nft-image rounded-md mt-3 position-relative overflow-hidden">
                        <a href="item-detail-one.html"><img src="images/gif/9.gif" class="img-fluid" alt=""></a>
                        <div class="position-absolute top-0 start-0 m-2">
                            <a href="javascript:void(0)" class="badge badge-link bg-primary">GIFs</a>
                        </div>

                        <div class="position-absolute bottom-0 start-0 m-2 bg-gradient-danger text-white title-dark rounded-pill px-3">
                            <i class="uil uil-clock"></i> <small id="auction-item-3" class="fw-bold"></small>
                        </div>
                    </div>

                    <div class="card-body content position-relative p-0 mt-3">
                        <a href="item-detail-one.html" class="title text-dark h6">Spider Eyes Modern Art</a>

                        <div class="d-flex justify-content-between mt-2">
                            <small class="rate fw-bold">20.5 ETH</small>
                            <small class="text-dark fw-bold">1 out of 10</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card nft-items nft-primary rounded-md shadow overflow-hidden mb-1 p-3">
                    <div class="d-flex justify-content-between">
                        <div class="img-group">
                            <a href="creator-profile.html" class="user-avatar">
                                <img src="images/client/08.jpg" alt="user" class="avatar avatar-sm-sm img-thumbnail border-0 shadow-sm rounded-circle">
                            </a>
                            <a href="creator-profile.html" class="user-avatar ms-n3">
                                <img src="images/client/05.jpg" alt="user" class="avatar avatar-sm-sm img-thumbnail border-0 shadow-sm rounded-circle">
                            </a>
                            <a href="creator-profile.html" class="user-avatar ms-n3">
                                <img src="images/client/06.jpg" alt="user" class="avatar avatar-sm-sm img-thumbnail border-0 shadow-sm rounded-circle">
                            </a>
                        </div>

                        <span class="like-icon shadow-sm"><a href="javascript:void(0)" class="text-muted icon"><i class="mdi mdi-18px mdi-heart mb-0"></i></a></span>
                    </div>
                    <div class="nft-image rounded-md mt-3 position-relative overflow-hidden">
                        <a href="item-detail-one.html"><img src="images/items/4.jpg" class="img-fluid" alt=""></a>
                    </div>

                    <div class="card-body content position-relative p-0 mt-3">
                        <a href="item-detail-one.html" class="title text-dark h6">Synthwave Painting</a>

                        <div class="d-flex justify-content-between mt-2">
                            <small class="rate fw-bold">20.5 ETH</small>
                            <small class="text-dark fw-bold">1 out of 10</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card nft-items nft-primary rounded-md shadow overflow-hidden mb-1 p-3">
                    <div class="d-flex justify-content-between">
                        <div class="img-group">
                            <a href="creator-profile.html" class="user-avatar">
                                <img src="images/client/08.jpg" alt="user" class="avatar avatar-sm-sm img-thumbnail border-0 shadow-sm rounded-circle">
                            </a>
                            <a href="creator-profile.html" class="user-avatar ms-n3">
                                <img src="images/client/05.jpg" alt="user" class="avatar avatar-sm-sm img-thumbnail border-0 shadow-sm rounded-circle">
                            </a>
                            <a href="creator-profile.html" class="user-avatar ms-n3">
                                <img src="images/client/06.jpg" alt="user" class="avatar avatar-sm-sm img-thumbnail border-0 shadow-sm rounded-circle">
                            </a>
                        </div>

                        <span class="like-icon shadow-sm"><a href="javascript:void(0)" class="text-muted icon"><i class="mdi mdi-18px mdi-heart mb-0"></i></a></span>
                    </div>
                    <div class="nft-image rounded-md mt-3 position-relative overflow-hidden">
                        <a href="item-detail-one.html"><img src="images/gif/10.gif" class="img-fluid" alt=""></a>
                        <div class="position-absolute top-0 start-0 m-2">
                            <a href="javascript:void(0)" class="badge badge-link bg-primary">GIFs</a>
                        </div>
                    </div>

                    <div class="card-body content position-relative p-0 mt-3">
                        <a href="item-detail-one.html" class="title text-dark h6">Contemporary Abstract</a>

                        <div class="d-flex justify-content-between mt-2">
                            <small class="rate fw-bold">20.5 ETH</small>
                            <small class="text-dark fw-bold">1 out of 10</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card nft-items nft-primary rounded-md shadow overflow-hidden mb-1 p-3">
                    <div class="d-flex justify-content-between">
                        <div class="img-group">
                            <a href="creator-profile.html" class="user-avatar">
                                <img src="images/client/08.jpg" alt="user" class="avatar avatar-sm-sm img-thumbnail border-0 shadow-sm rounded-circle">
                            </a>
                            <a href="creator-profile.html" class="user-avatar ms-n3">
                                <img src="images/client/05.jpg" alt="user" class="avatar avatar-sm-sm img-thumbnail border-0 shadow-sm rounded-circle">
                            </a>
                            <a href="creator-profile.html" class="user-avatar ms-n3">
                                <img src="images/client/06.jpg" alt="user" class="avatar avatar-sm-sm img-thumbnail border-0 shadow-sm rounded-circle">
                            </a>
                        </div>

                        <span class="like-icon shadow-sm"><a href="javascript:void(0)" class="text-muted icon"><i class="mdi mdi-18px mdi-heart mb-0"></i></a></span>
                    </div>
                    <div class="nft-image rounded-md mt-3 position-relative overflow-hidden">
                        <a href="item-detail-one.html"><img src="images/items/5.jpg" class="img-fluid" alt=""></a>
                    </div>

                    <div class="card-body content position-relative p-0 mt-3">
                        <a href="item-detail-one.html" class="title text-dark h6">Valkyrie Abstract Art</a>

                        <div class="d-flex justify-content-between mt-2">
                            <small class="rate fw-bold">20.5 ETH</small>
                            <small class="text-dark fw-bold">1 out of 10</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card nft-items nft-primary rounded-md shadow overflow-hidden mb-1 p-3">
                    <div class="d-flex justify-content-between">
                        <div class="img-group">
                            <a href="creator-profile.html" class="user-avatar">
                                <img src="images/client/08.jpg" alt="user" class="avatar avatar-sm-sm img-thumbnail border-0 shadow-sm rounded-circle">
                            </a>
                            <a href="creator-profile.html" class="user-avatar ms-n3">
                                <img src="images/client/05.jpg" alt="user" class="avatar avatar-sm-sm img-thumbnail border-0 shadow-sm rounded-circle">
                            </a>
                            <a href="creator-profile.html" class="user-avatar ms-n3">
                                <img src="images/client/06.jpg" alt="user" class="avatar avatar-sm-sm img-thumbnail border-0 shadow-sm rounded-circle">
                            </a>
                        </div>

                        <span class="like-icon shadow-sm"><a href="javascript:void(0)" class="text-muted icon"><i class="mdi mdi-18px mdi-heart mb-0"></i></a></span>
                    </div>
                    <div class="nft-image rounded-md mt-3 position-relative overflow-hidden">
                        <a href="item-detail-one.html"><img src="images/gif/5.gif" class="img-fluid" alt=""></a>
                    </div>

                    <div class="card-body content position-relative p-0 mt-3">
                        <a href="item-detail-one.html" class="title text-dark h6">The girl with the firefly</a>

                        <div class="d-flex justify-content-between mt-2">
                            <small class="rate fw-bold">20.5 ETH</small>
                            <small class="text-dark fw-bold">1 out of 10</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card nft-items nft-primary rounded-md shadow overflow-hidden mb-1 p-3">
                    <div class="d-flex justify-content-between">
                        <div class="img-group">
                            <a href="creator-profile.html" class="user-avatar">
                                <img src="images/client/08.jpg" alt="user" class="avatar avatar-sm-sm img-thumbnail border-0 shadow-sm rounded-circle">
                            </a>
                            <a href="creator-profile.html" class="user-avatar ms-n3">
                                <img src="images/client/05.jpg" alt="user" class="avatar avatar-sm-sm img-thumbnail border-0 shadow-sm rounded-circle">
                            </a>
                            <a href="creator-profile.html" class="user-avatar ms-n3">
                                <img src="images/client/06.jpg" alt="user" class="avatar avatar-sm-sm img-thumbnail border-0 shadow-sm rounded-circle">
                            </a>
                        </div>

                        <span class="like-icon shadow-sm"><a href="javascript:void(0)" class="text-muted icon"><i class="mdi mdi-18px mdi-heart mb-0"></i></a></span>
                    </div>
                    <div class="nft-image rounded-md mt-3 position-relative overflow-hidden">
                        <a href="item-detail-one.html"><img src="images/items/6.jpg" class="img-fluid" alt=""></a>
                    </div>

                    <div class="card-body content position-relative p-0 mt-3">
                        <a href="item-detail-one.html" class="title text-dark h6">Dodo hide the seek</a>

                        <div class="d-flex justify-content-between mt-2">
                            <small class="rate fw-bold">20.5 ETH</small>
                            <small class="text-dark fw-bold">1 out of 10</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card nft-items nft-primary rounded-md shadow overflow-hidden mb-1 p-3">
                    <div class="d-flex justify-content-between">
                        <div class="img-group">
                            <a href="creator-profile.html" class="user-avatar">
                                <img src="images/client/08.jpg" alt="user" class="avatar avatar-sm-sm img-thumbnail border-0 shadow-sm rounded-circle">
                            </a>
                            <a href="creator-profile.html" class="user-avatar ms-n3">
                                <img src="images/client/05.jpg" alt="user" class="avatar avatar-sm-sm img-thumbnail border-0 shadow-sm rounded-circle">
                            </a>
                            <a href="creator-profile.html" class="user-avatar ms-n3">
                                <img src="images/client/06.jpg" alt="user" class="avatar avatar-sm-sm img-thumbnail border-0 shadow-sm rounded-circle">
                            </a>
                        </div>

                        <span class="like-icon shadow-sm"><a href="javascript:void(0)" class="text-muted icon"><i class="mdi mdi-18px mdi-heart mb-0"></i></a></span>
                    </div>
                    <div class="nft-image rounded-md mt-3 position-relative overflow-hidden">
                        <a href="item-detail-one.html"><img src="images/gif/6.gif" class="img-fluid" alt=""></a>

                        <div class="position-absolute bottom-0 start-0 m-2 bg-gradient-primary text-white title-dark rounded-pill px-3">
                            <i class="uil uil-clock"></i> <small id="auction-item-4" class="fw-bold"></small>
                        </div>
                    </div>

                    <div class="card-body content position-relative p-0 mt-3">
                        <a href="item-detail-one.html" class="title text-dark h6">Pinky Ocean</a>

                        <div class="d-flex justify-content-between mt-2">
                            <small class="rate fw-bold">20.5 ETH</small>
                            <small class="text-dark fw-bold">1 out of 10</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-100 mt-60">
        <div class="row align-items-end mb-4 pb-2">
            <div class="col-md-8">
                <div class="section-title">
                    <h4 class="title mb-2">Best Creators & Sellers</h4>
                    <p class="text-muted mb-0">Best sellers of the week's NFTs</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="text-end d-md-block d-none">
                    <a href="creators.html" class="btn btn-link primary text-dark">See More <i class="uil uil-arrow-right"></i></a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 mt-3">
                <div class="tiny-five-item-nav-arrow">
                    <div class="tiny-slide">
                        <div class="card creators creators-two creator-primary rounded-md shadow overflow-hidden mx-2 my-3">
                            <div class="py-5" style="background: url('images/work/1.jpg');"></div>
                            <div class="position-relative mt-n5">
                                <img src="images/client/01.jpg" class="avatar avatar-md-md rounded-pill shadow-sm bg-light img-thumbnail mx-auto d-block" alt="">

                                <div class="content text-center pt-2 p-4">
                                    <a href="creator-profile.html" class="text-dark h6 name d-block mb-0">Steven Townsend</a>
                                    <small class="text-muted">@StreetBoy</small>

                                    <div class="mt-3">
                                        <a href="javascript:void(0)" class="btn btn-pills btn-soft-primary">Follow</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tiny-slide">
                        <div class="card creators creators-two creator-primary rounded-md shadow overflow-hidden mx-2 my-3">
                            <div class="py-5" style="background: url('images/work/2.jpg');"></div>
                            <div class="position-relative mt-n5">
                                <img src="images/client/02.jpg" class="avatar avatar-md-md rounded-pill shadow-sm bg-light img-thumbnail mx-auto d-block" alt="">

                                <div class="content text-center pt-2 p-4">
                                    <a href="creator-profile.html" class="text-dark h6 name d-block mb-0">Tiffany Betancourt</a>
                                    <small class="text-muted">@CutieGirl</small>

                                    <div class="mt-3">
                                        <a href="javascript:void(0)" class="btn btn-pills btn-soft-primary">Follow</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tiny-slide">
                        <div class="card creators creators-two creator-primary rounded-md shadow overflow-hidden mx-2 my-3">
                            <div class="py-5" style="background: url('images/work/3.jpg');"></div>
                            <div class="position-relative mt-n5">
                                <img src="images/client/03.jpg" class="avatar avatar-md-md rounded-pill shadow-sm bg-light img-thumbnail mx-auto d-block" alt="">

                                <div class="content text-center pt-2 p-4">
                                    <a href="creator-profile.html" class="text-dark h6 name d-block mb-0">Mari Harrington</a>
                                    <small class="text-muted">@NorseQueen</small>

                                    <div class="mt-3">
                                        <a href="javascript:void(0)" class="btn btn-pills btn-soft-primary">Follow</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tiny-slide">
                        <div class="card creators creators-two creator-primary rounded-md shadow overflow-hidden mx-2 my-3">
                            <div class="py-5" style="background: url('images/work/4.jpg');"></div>
                            <div class="position-relative mt-n5">
                                <img src="images/client/04.jpg" class="avatar avatar-md-md rounded-pill shadow-sm bg-light img-thumbnail mx-auto d-block" alt="">

                                <div class="content text-center pt-2 p-4">
                                    <a href="creator-profile.html" class="text-dark h6 name d-block mb-0">Floyd Glasgow</a>
                                    <small class="text-muted">@BigBull</small>

                                    <div class="mt-3">
                                        <a href="javascript:void(0)" class="btn btn-pills btn-soft-primary">Follow</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tiny-slide">
                        <div class="card creators creators-two creator-primary rounded-md shadow overflow-hidden mx-2 my-3">
                            <div class="py-5" style="background: url('images/work/5.jpg');"></div>
                            <div class="position-relative mt-n5">
                                <img src="images/client/05.jpg" class="avatar avatar-md-md rounded-pill shadow-sm bg-light img-thumbnail mx-auto d-block" alt="">

                                <div class="content text-center pt-2 p-4">
                                    <a href="creator-profile.html" class="text-dark h6 name d-block mb-0">Donna Schultz</a>
                                    <small class="text-muted">@Angel</small>

                                    <div class="mt-3">
                                        <a href="javascript:void(0)" class="btn btn-pills btn-soft-primary">Follow</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tiny-slide">
                        <div class="card creators creators-two creator-primary rounded-md shadow overflow-hidden mx-2 my-3">
                            <div class="py-5" style="background: url('images/work/6.jpg');"></div>
                            <div class="position-relative mt-n5">
                                <img src="images/client/06.jpg" class="avatar avatar-md-md rounded-pill shadow-sm bg-light img-thumbnail mx-auto d-block" alt="">

                                <div class="content text-center pt-2 p-4">
                                    <a href="creator-profile.html" class="text-dark h6 name d-block mb-0">Joshua Morris</a>
                                    <small class="text-muted">@CrazyAnyone</small>

                                    <div class="mt-3">
                                        <a href="javascript:void(0)" class="btn btn-pills btn-soft-primary">Follow</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tiny-slide">
                        <div class="card creators creators-two creator-primary rounded-md shadow overflow-hidden mx-2 my-3">
                            <div class="py-5" style="background: url('images/work/7.jpg');"></div>
                            <div class="position-relative mt-n5">
                                <img src="images/client/07.jpg" class="avatar avatar-md-md rounded-pill shadow-sm bg-light img-thumbnail mx-auto d-block" alt="">

                                <div class="content text-center pt-2 p-4">
                                    <a href="creator-profile.html" class="text-dark h6 name d-block mb-0">Carl Williams</a>
                                    <small class="text-muted">@LooserBad</small>

                                    <div class="mt-3">
                                        <a href="javascript:void(0)" class="btn btn-pills btn-soft-primary">Follow</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tiny-slide">
                        <div class="card creators creators-two creator-primary rounded-md shadow overflow-hidden mx-2 my-3">
                            <div class="py-5" style="background: url('images/work/8.jpg');"></div>
                            <div class="position-relative mt-n5">
                                <img src="images/client/08.jpg" class="avatar avatar-md-md rounded-pill shadow-sm bg-light img-thumbnail mx-auto d-block" alt="">

                                <div class="content text-center pt-2 p-4">
                                    <a href="creator-profile.html" class="text-dark h6 name d-block mb-0">Eugene Green</a>
                                    <small class="text-muted">@KristyHoney</small>

                                    <div class="mt-3">
                                        <a href="javascript:void(0)" class="btn btn-pills btn-soft-primary">Follow</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tiny-slide">
                        <div class="card creators creators-two creator-primary rounded-md shadow overflow-hidden mx-2 my-3">
                            <div class="py-5" style="background: url('images/work/9.jpg');"></div>
                            <div class="position-relative mt-n5">
                                <img src="images/client/09.jpg" class="avatar avatar-md-md rounded-pill shadow-sm bg-light img-thumbnail mx-auto d-block" alt="">

                                <div class="content text-center pt-2 p-4">
                                    <a href="creator-profile.html" class="text-dark h6 name d-block mb-0">Julius Canale</a>
                                    <small class="text-muted">@PandaOne</small>

                                    <div class="mt-3">
                                        <a href="javascript:void(0)" class="btn btn-pills btn-soft-primary">Follow</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tiny-slide">
                        <div class="card creators creators-two creator-primary rounded-md shadow overflow-hidden mx-2 my-3">
                            <div class="py-5" style="background: url('images/work/10.jpg');"></div>
                            <div class="position-relative mt-n5">
                                <img src="images/client/10.jpg" class="avatar avatar-md-md rounded-pill shadow-sm bg-light img-thumbnail mx-auto d-block" alt="">

                                <div class="content text-center pt-2 p-4">
                                    <a href="creator-profile.html" class="text-dark h6 name d-block mb-0">Michael Williams</a>
                                    <small class="text-muted">@FunnyGuy</small>

                                    <div class="mt-3">
                                        <a href="javascript:void(0)" class="btn btn-pills btn-soft-primary">Follow</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tiny-slide">
                        <div class="card creators creators-two creator-primary rounded-md shadow overflow-hidden mx-2 my-3">
                            <div class="py-5" style="background: url('images/work/11.jpg');"></div>
                            <div class="position-relative mt-n5">
                                <img src="images/client/11.jpg" class="avatar avatar-md-md rounded-pill shadow-sm bg-light img-thumbnail mx-auto d-block" alt="">

                                <div class="content text-center pt-2 p-4">
                                    <a href="creator-profile.html" class="text-dark h6 name d-block mb-0">Jacqueline Burns</a>
                                    <small class="text-muted">@ButterFly</small>

                                    <div class="mt-3">
                                        <a href="javascript:void(0)" class="btn btn-pills btn-soft-primary">Follow</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tiny-slide">
                        <div class="card creators creators-two creator-primary rounded-md shadow overflow-hidden mx-2 my-3">
                            <div class="py-5" style="background: url('images/work/12.jpg');"></div>
                            <div class="position-relative mt-n5">
                                <img src="images/client/12.jpg" class="avatar avatar-md-md rounded-pill shadow-sm bg-light img-thumbnail mx-auto d-block" alt="">

                                <div class="content text-center pt-2 p-4">
                                    <a href="creator-profile.html" class="text-dark h6 name d-block mb-0">Rosaria Vargas</a>
                                    <small class="text-muted">@Princess</small>

                                    <div class="mt-3">
                                        <a href="javascript:void(0)" class="btn btn-pills btn-soft-primary">Follow</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="text-center d-md-none d-block">
                    <a href="creators.html" class="btn btn-link primary text-dark">See More <i class="uil uil-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-100 mt-60">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="section-title text-center mb-4 pb-2">
                    <h4 class="title mb-2">Popular Collection</h4>
                    <p class="text-muted mb-0">Best Collection of the week's NFTs</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6 mt-4 pt-2">
                <div class="card bg-white collections collection-primary rounded-md shadow p-2 pb-0">
                    <div class="row g-2">
                        <div class="col-12">
                            <img src="images/collection/03.jpg" class="img-fluid shadow-sm rounded-md" alt="">
                        </div>

                        <div class="col-4">
                            <img src="images/collection/01.jpg" class="img-fluid shadow-sm rounded-md" alt="">
                        </div>

                        <div class="col-4">
                            <img src="images/collection/04.jpg" class="img-fluid shadow-sm rounded-md" alt="">
                        </div>

                        <div class="col-4">
                            <img src="images/collection/10.jpg" class="img-fluid shadow-sm rounded-md" alt="">
                        </div>
                    </div>

                    <div class="content text-center p-4 mt-n5">
                        <div class="position-relative d-inline-flex">
                            <img src="images/client/01.jpg" class="avatar avatar-small rounded-pill img-thumbnail shadow-md" alt="">
                            <span class="verified text-primary">
                                <i class="mdi mdi-check-decagram"></i>
                            </span>
                        </div>

                        <div class="mt-2">
                            <a href="explore-four.html" class="text-dark title h5">Digital Arts</a>

                            <p class="text-muted mb-0 small">27 Items</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mt-4 pt-2">
                <div class="card bg-white collections collection-primary rounded-md shadow p-2 pb-0">
                    <div class="row g-2">
                        <div class="col-12">
                            <img src="images/collection/02.jpg" class="img-fluid shadow-sm rounded-md" alt="">
                        </div>

                        <div class="col-4">
                            <img src="images/collection/05.jpg" class="img-fluid shadow-sm rounded-md" alt="">
                        </div>

                        <div class="col-4">
                            <img src="images/collection/06.jpg" class="img-fluid shadow-sm rounded-md" alt="">
                        </div>

                        <div class="col-4">
                            <img src="images/collection/07.jpg" class="img-fluid shadow-sm rounded-md" alt="">
                        </div>
                    </div>

                    <div class="content text-center p-4 mt-n5">
                        <div class="position-relative d-inline-flex">
                            <img src="images/client/10.jpg" class="avatar avatar-small rounded-pill img-thumbnail shadow-md" alt="">
                            <span class="verified text-primary">
                                <i class="mdi mdi-check-decagram"></i>
                            </span>
                        </div>

                        <div class="mt-2">
                            <a href="explore-four.html" class="text-dark title h5">Sports</a>

                            <p class="text-muted mb-0 small">27 Items</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mt-4 pt-2">
                <div class="card bg-white collections collection-primary rounded-md shadow p-2 pb-0">
                    <div class="row g-2">
                        <div class="col-12">
                            <img src="images/collection/08.jpg" class="img-fluid shadow-sm rounded-md" alt="">
                        </div>

                        <div class="col-4">
                            <img src="images/collection/09.jpg" class="img-fluid shadow-sm rounded-md" alt="">
                        </div>

                        <div class="col-4">
                            <img src="images/collection/11.jpg" class="img-fluid shadow-sm rounded-md" alt="">
                        </div>

                        <div class="col-4">
                            <img src="images/collection/12.jpg" class="img-fluid shadow-sm rounded-md" alt="">
                        </div>
                    </div>

                    <div class="content text-center p-4 mt-n5">
                        <div class="position-relative d-inline-flex">
                            <img src="images/client/12.jpg" class="avatar avatar-small rounded-pill img-thumbnail shadow-md" alt="">
                            <span class="verified text-primary">
                                <i class="mdi mdi-check-decagram"></i>
                            </span>
                        </div>

                        <div class="mt-2">
                            <a href="explore-four.html" class="text-dark title h5">Photography</a>

                            <p class="text-muted mb-0 small">27 Items</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php get_template_part('parts/footer'); ?>