<?php

/**
 * Template Name: Start selling Page
*/
if ( ! defined( 'ABSPATH' ) ) {
	exit; 
}

get_template_part('parts/header'); ?>


<section class="bg-half-170 d-table w-100 bg-light">
    <div class="container">
        <div class="row mt-5 align-items-center">
            <div class="col-lg-4 col-md-6">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/start-selling.png" class="img-fluid" alt="">
            </div>

            <div class="col-lg-8 col-md-6 mt-4 pt-2 mt-sm-0 pt-sm-0">
                <div class="title-heading">
                    <h6>Join with Superex!</h6>
                    <h5 class="heading fw-bold title-dark mb-4">Start Your <br><span class="text-gradient-primary">Journey</span></h5>
                    <p class="text-muted mb-0 para-desc">We are a huge marketplace dedicated to connecting great artists of all Superex with their fans and unique token collectors!</p>
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
        <div class="row">
            <div class="col">
                <div class="section-title text-center mb-4 pb-2">
                    <h4 class="title mb-3">Fill the form</h4>
                    <p class="text-muted mb-0 para-desc mx-auto">We are a huge marketplace dedicated to connecting great artists of all Superex with their fans and unique token collectors!</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mt-4 pt-2">
            <div class="col-lg-10">
                <div class="card p-4 rounded-md shadow">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="d-grid">
                                <p class="fw-semibold">Upload your ART here, Please click "Upload Image" Button.</p>
                                <div class="preview-box d-block justify-content-center rounded-md shadow overflow-hidden bg-light text-muted p-2 text-center small">Supports JPG, PNG and MP4 videos. Max file size : 10MB.</div>
                                <input type="file" id="input-file" name="input-file" accept="image/*" onchange={handleChange()} hidden />
                                <label class="btn-upload btn btn-primary rounded-md mt-4" for="input-file">Upload Image</label>
                            </div>
                        </div>

                        <div class="col-md-7 mt-4 mt-sm-0">
                            <div class="ms-md-4">
                                <form>
                                    <div class="row">
                                        <div class="col-12 mb-4">
                                            <label class="form-label">Display Name</label>
                                            <input name="name" id="first" type="text" class="form-control" value="streetboyyy">
                                        </div>

                                        <div class="col-12 mb-4">
                                            <label class="form-label">URL</label>
                                            <div class="form-icon">
                                                <input name="url" id="superex-url" type="url" class="form-control" value="https://superex.exe/streetboyyy">
                                            </div>
                                        </div>

                                        <div class="col-12 mb-4">
                                            <label class="form-label">Bio</label>
                                            <textarea name="comments" id="comments" rows="3" class="form-control" placeholder="I'm a Digital Artist. Digital Art with over 3 years of experience. Experienced with all stages of the Art cycle for dynamic projects."></textarea>
                                        </div>

                                        <div class="col-12 mb-4">
                                            <label class="form-label d-block">Twitter Account</label>
                                            <small class="text-muted d-block">Link your twitter account to gain more trust on the Marketplace</small>
                                            <div class="form-icon mt-3">
                                                <input name="url" id="twitter-url" type="url" class="form-control" value="https://twitter.com/streetboyyy">
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <button type="submit" class="btn btn-primary rounded-md">Create Your Account</button>
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
</section>



<?php
get_template_part('parts/footer'); ?>