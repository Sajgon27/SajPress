<?php

if (! defined('ABSPATH')) {
    exit;
}

get_template_part('parts/header'); ?>



<div class="back-to-home">
    <a href="" class="back-button btn btn-pills btn-sm btn-icon btn-primary"><i data-feather="arrow-left" class="icons"></i></a>
</div>

<section class="position-relative bg-soft-primary">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 p-0">
                <div class="d-flex flex-column min-vh-100 p-4">

                    <div class="text-center">
                        <a href=""><img src="images/logo-dark.png" alt=""></a>
                    </div>



                    <div class="title-heading text-center my-auto">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/error-404.png" class="img-fluid" alt="">
                        <h1 class="heading sub-heading mb-3 mt-5 text-dark">Page Not Found?</h1>
                        <p class="text-muted">Whoops, this is embarassing. <br> Looks like the page you were looking for wasn't found.</p>

                        <div class="mt-4">
                            <a href="/" class="back-button btn btn-primary">Back to Home</a>
                        </div>
                    </div>


                    <div class="text-center">
                        <small class="mb-0 text-muted">© <script>
                                document.write(new Date().getFullYear())
                            </script> Superex. Design with <i class="mdi mdi-heart text-danger"></i> by <a href="https://shreethemes.in/" target="_blank" class="text-reset">Shreethemes</a>.</small>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>




<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/feather.min.js"></script>

<script src="js/plugins.init.js"></script>
<script src="js/app.js"></script>