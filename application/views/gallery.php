<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$url="http://photographyclub.in/";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Title -->
    <title>Photography Club | Gallery</title>

    <?php $this->load->view('header');?>

    <!-- Breadcrumb Area Start -->
    <section class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(<?php echo $url;?>img/bg-img/38.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content text-center">
                        <h2 class="page-title">Gallery</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="http://photographyclub.in/"><i class="icon_house_alt"></i> Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Gallery</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Area End -->

    <!-- Gallery Area Start -->
    <div class="alime-portfolio-area section-padding-80 clearfix">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Projects Menu -->
                    <div class="alime-projects-menu wow fadeInUp" data-wow-delay="100ms">
                        <div class="portfolio-menu text-center">
                            <button class="btn active" data-filter="*">All</button>
                            <button class="btn" data-filter=".human">Human</button>
                            <button class="btn" data-filter=".nature">Nature</button>
                            <button class="btn" data-filter=".country">Country</button>
                            <button class="btn" data-filter=".video">Video</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row alime-portfolio">
                <!-- Single Gallery Item -->
                <div class="col-12 col-sm-6 col-lg-3 single_gallery_item nature mb-30 wow fadeInUp" data-wow-delay="100ms">
                    <div class="single-portfolio-content">
                        <img src="<?php echo $url;?>img/bg-img/39.jpg" alt="">
                        <div class="hover-content">
                            <a href="<?php echo $url;?>img/bg-img/39.jpg" class="portfolio-img">+</a>
                        </div>
                    </div>
                </div>

                <!-- Single Gallery Item -->
                <div class="col-12 col-sm-6 col-lg-3 single_gallery_item video human mb-30 wow fadeInUp" data-wow-delay="300ms">
                    <div class="single-portfolio-content">
                        <img src="<?php echo $url;?>img/bg-img/40.jpg" alt="">
                        <div class="hover-content">
                            <a href="<?php echo $url;?>img/bg-img/40.jpg" class="portfolio-img">+</a>
                        </div>
                    </div>
                </div>

                <!-- Single Gallery Item -->
                <div class="col-12 col-sm-6 col-lg-3 single_gallery_item country mb-30 wow fadeInUp" data-wow-delay="500ms">
                    <div class="single-portfolio-content">
                        <img src="<?php echo $url;?>img/bg-img/41.jpg" alt="">
                        <div class="hover-content">
                            <a href="<?php echo $url;?>img/bg-img/41.jpg" class="portfolio-img">+</a>
                        </div>
                    </div>
                </div>

                <!-- Single Gallery Item -->
                <div class="col-12 col-sm-6 col-lg-3 single_gallery_item human mb-30 wow fadeInUp" data-wow-delay="700ms">
                    <div class="single-portfolio-content">
                        <img src="<?php echo $url;?>img/bg-img/42.jpg" alt="">
                        <div class="hover-content">
                            <a href="<?php echo $url;?>img/bg-img/42.jpg" class="portfolio-img">+</a>
                        </div>
                    </div>
                </div>

                <!-- Single Gallery Item -->
                <div class="col-12 col-sm-6 col-lg-3 single_gallery_item nature mb-30 wow fadeInUp" data-wow-delay="100ms">
                    <div class="single-portfolio-content">
                        <img src="<?php echo $url;?>img/bg-img/43.jpg" alt="">
                        <div class="hover-content">
                            <a href="<?php echo $url;?>img/bg-img/43.jpg" class="portfolio-img">+</a>
                        </div>
                    </div>
                </div>

                <!-- Single Gallery Item -->
                <div class="col-12 col-sm-6 col-lg-3 single_gallery_item video country mb-30 wow fadeInUp" data-wow-delay="300ms">
                    <div class="single-portfolio-content">
                        <img src="<?php echo $url;?>img/bg-img/44.jpg" alt="">
                        <div class="hover-content">
                            <a href="<?php echo $url;?>img/bg-img/44.jpg" class="portfolio-img">+</a>
                        </div>
                    </div>
                </div>

                <!-- Single Gallery Item -->
                <div class="col-12 col-sm-6 col-lg-3 single_gallery_item human mb-30 wow fadeInUp" data-wow-delay="500ms">
                    <div class="single-portfolio-content">
                        <img src="<?php echo $url;?>img/bg-img/45.jpg" alt="">
                        <div class="hover-content">
                            <a href="<?php echo $url;?>img/bg-img/45.jpg" class="portfolio-img">+</a>
                        </div>
                    </div>
                </div>

                <!-- Single Gallery Item -->
                <div class="col-12 col-sm-6 col-lg-3 single_gallery_item nature mb-30 wow fadeInUp" data-wow-delay="700ms">
                    <div class="single-portfolio-content">
                        <img src="<?php echo $url;?>img/bg-img/46.jpg" alt="">
                        <div class="hover-content">
                            <a href="<?php echo $url;?>img/bg-img/46.jpg" class="portfolio-img">+</a>
                        </div>
                    </div>
                </div>

                <!-- Single Gallery Item -->
                <div class="col-12 col-sm-6 col-lg-3 single_gallery_item video country mb-30 wow fadeInUp" data-wow-delay="100ms">
                    <div class="single-portfolio-content">
                        <img src="<?php echo $url;?>img/bg-img/47.jpg" alt="">
                        <div class="hover-content">
                            <a href="<?php echo $url;?>img/bg-img/47.jpg" class="portfolio-img">+</a>
                        </div>
                    </div>
                </div>

                <!-- Single Gallery Item -->
                <div class="col-12 col-sm-6 col-lg-3 single_gallery_item human mb-30 wow fadeInUp" data-wow-delay="300ms">
                    <div class="single-portfolio-content">
                        <img src="<?php echo $url;?>img/bg-img/48.jpg" alt="">
                        <div class="hover-content">
                            <a href="<?php echo $url;?>img/bg-img/48.jpg" class="portfolio-img">+</a>
                        </div>
                    </div>
                </div>

                <!-- Single Gallery Item -->
                <div class="col-12 col-sm-6 col-lg-3 single_gallery_item country mb-30 wow fadeInUp" data-wow-delay="500ms">
                    <div class="single-portfolio-content">
                        <img src="<?php echo $url;?>img/bg-img/49.jpg" alt="">
                        <div class="hover-content">
                            <a href="<?php echo $url;?><?php echo $url;?>img/bg-img/49.jpg" class="portfolio-img">+</a>
                        </div>
                    </div>
                </div>

                <!-- Single Gallery Item -->
                <div class="col-12 col-sm-6 col-lg-3 single_gallery_item country mb-30 wow fadeInUp" data-wow-delay="700ms">
                    <div class="single-portfolio-content">
                        <img src="<?php echo $url;?>img/bg-img/50.jpg" alt="">
                        <div class="hover-content">
                            <a href="<?php echo $url;?>img/bg-img/50.jpg" class="portfolio-img">+</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 text-center wow fadeInUp" data-wow-delay="800ms">
                    <a href="#" class="btn alime-btn btn-2 mt-15">View More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Gallery Area End -->

    <!-- Follow Area Start -->
    <div class="follow-area clearfix">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h2>Follow Instagram</h2>
                        <span>Photography Club</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Instagram Feed Area -->
        <div class="instragram-feed-area owl-carousel">
            <!-- Single Instagram Item -->
            <div class="single-instagram-item">
                <img src="<?php echo $url;?>img/bg-img/11.jpg" alt="">
                <div class="instagram-hover-content text-center d-flex align-items-center justify-content-center">
                    <a href="#">
                        <i class="ti-instagram" aria-hidden="true"></i>
                       <span>Photography Club</span>
                    </a>
                </div>
            </div>
            <!-- Single Instagram Item -->
            <div class="single-instagram-item">
                <img src="<?php echo $url;?>img/bg-img/12.jpg" alt="">
                <div class="instagram-hover-content text-center d-flex align-items-center justify-content-center">
                    <a href="#">
                        <i class="ti-instagram" aria-hidden="true"></i>
                        <span>Photography Club</span>
                    </a>
                </div>
            </div>
            <!-- Single Instagram Item -->
            <div class="single-instagram-item">
                <img src="<?php echo $url;?>img/bg-img/13.jpg" alt="">
                <div class="instagram-hover-content text-center d-flex align-items-center justify-content-center">
                    <a href="#">
                        <i class="ti-instagram" aria-hidden="true"></i>
                        <span>Photography Club</span>
                    </a>
                </div>
            </div>
            <!-- Single Instagram Item -->
            <div class="single-instagram-item">
                <img src="<?php echo $url;?>img/bg-img/14.jpg" alt="">
                <div class="instagram-hover-content text-center d-flex align-items-center justify-content-center">
                    <a href="#">
                        <i class="ti-instagram" aria-hidden="true"></i>
                       <span>Photography Club</span>
                    </a>
                </div>
            </div>
            <!-- Single Instagram Item -->
            <div class="single-instagram-item">
                <img src="<?php echo $url;?>img/bg-img/15.jpg" alt="">
                <div class="instagram-hover-content text-center d-flex align-items-center justify-content-center">
                    <a href="#">
                        <i class="ti-instagram" aria-hidden="true"></i>
                        <span>Photography Club</span>
                    </a>
                </div>
            </div>
            <!-- Single Instagram Item -->
            <div class="single-instagram-item">
                <img src="<?php echo $url;?>img/bg-img/16.jpg" alt="">
                <div class="instagram-hover-content text-center d-flex align-items-center justify-content-center">
                    <a href="#">
                        <i class="ti-instagram" aria-hidden="true"></i>
                        <span>Photography Club</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Follow Area End -->
    <?php $this->load->view('footer');?>

</body>

</html>
