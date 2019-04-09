<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$url="http://photographyclub.in/";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Title -->
    <title>Photography Club | About</title>
   <?php $this->load->view('header');?>

    <!-- Breadcrumb Area Start -->
    <section class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(<?php echo $url;?>img/bg-img/38.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content text-center">
                        <h2 class="page-title">Wedding Shoot</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="http://photographyclub.in/"><i class="icon_house_alt"></i> Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Wedding Shoot</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Area End -->

    <!-- About Us Area Start -->
    <div class="about-us-area section-padding-80-0 clearfix">
        <div class="container">
            <div class="row align-items-center">
              <div class="col-12 col-md-6 col-lg-6">
                  <!-- Contact Info -->
                   <div class="alime-contact-form">
                      <h4 class="mb-30">Request Call Back</h4>
                      <!-- Form -->
                      <form action="#" method="post">
                          <div class="row">
                              <div class="col-12 col-md-6">
                                  <input type="text" name="message-name" class="form-control mb-30" placeholder="First Name">
                              </div>
                              <div class="col-12 col-md-6">
                                  <input type="text" name="message-name" class="form-control mb-30" placeholder="Last Name">
                              </div>
                              <div class="col-12 col-md-6">
                                  <input type="email" name="message-email" class="form-control mb-30" placeholder="Email">
                              </div>
                              <div class="col-12 col-md-6">
                                  <input type="text" name="number" class="form-control mb-30" placeholder="Phone Number">
                              </div>
                              <div class="col-12">
                                  <textarea name="message" class="form-control mb-30" placeholder="Messages"></textarea>
                              </div>
                              <div class="col-12">
                                  <button type="submit" class="btn alime-btn btn-2 mt-15">Contact Us</button>
                              </div>
                          </div>
                      </form>
                  </div>
          </div>
                <div class="col-12 col-lg-6">
                    <div class="about-video-area mb-80 wow fadeInUp" data-wow-delay="100ms">
                        <img src="<?php echo $url;?>img/bg-img/17.jpg" alt="">
                        <div class="video-icon">
                            <a href="https://www.youtube.com/watch?v=sSakBz_eYzQ" class="video-play-btn"><i class="arrow_triangle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Us Area End -->

        <!-- Gallery Area Start -->
        <div class="alime-portfolio-area section-padding-80 clearfix" style="background:black;">
            <div class="container-fluid">
                <div class="row">
                   <div class="col-12">
                        <div class="section-heading text-center">
                            <h2 style="color:white;">OUR Wedding Shoot</h2>
                            <h4 style="color:white;">PROFESSIONAL PHOTOGRAPHERS OF PHOTOGRAPHY CLUB</h4>
                            <p style="color:white;">Wedding photography ideas is everything you need to make your couple’s wedding album full of lifestyle and romantic photos.</p>
                        </div>
                    </div>
                </div>

                <div class="row alime-portfolio">
                        <!-- Single Gallery Item -->
                  <div class="col-12 col-sm-6 col-lg-4 single_gallery_item video country  wow fadeInUp" data-wow-delay="100ms" style="padding:5px;box-shadow: 0 2px 10px 0 grey;">
                        <div class="single-portfolio-content">
                            <img src="<?php echo $url;?>img/bg-img/w1.jpg" alt="">
                            <div class="hover-content">
                                <a href="<?php echo $url;?>img/bg-img/w1.jpg" class="portfolio-img">+</a>
                            </div>
                        </div>
                    </div>

                    <!-- Single Gallery Item -->
                 <div class="col-12 col-sm-6 col-lg-4 single_gallery_item video country  wow fadeInUp" data-wow-delay="100ms" style="padding:5px;box-shadow: 0 2px 10px 0 grey;">
                        <div class="single-portfolio-content">
                            <img src="<?php echo $url;?>img/bg-img/W2.jpg" alt="">
                            <div class="hover-content">
                                <a href="<?php echo $url;?>img/bg-img/W2.jpg" class="portfolio-img">+</a>
                            </div>
                        </div>
                    </div>

                    <!-- Single Gallery Item -->
                    <div class="col-12 col-sm-6 col-lg-4 single_gallery_item video country  wow fadeInUp" data-wow-delay="100ms" style="padding:5px;box-shadow: 0 2px 10px 0 grey;">
                        <div class="single-portfolio-content">
                            <img src="<?php echo $url;?>img/bg-img/W3.jpg" alt="">
                            <div class="hover-content">
                                <a href="<?php echo $url;?>img/bg-img/W3.jpg" class="portfolio-img">+</a>
                            </div>
                        </div>
                    </div>

                    <!-- Single Gallery Item -->
                  <div class="col-12 col-sm-6 col-lg-4 single_gallery_item video country wow fadeInUp" data-wow-delay="100ms" style="padding:5px;box-shadow: 0 2px 10px 0 grey;">
                        <div class="single-portfolio-content">
                            <img src="<?php echo $url;?>img/bg-img/w4.jpg" alt="">
                            <div class="hover-content">
                                <a href="<?php echo $url;?>img/bg-img/w4.jpg" class="portfolio-img">+</a>
                            </div>
                        </div>
                    </div>

                    <!-- Single Gallery Item -->
                 <div class="col-12 col-sm-6 col-lg-4 single_gallery_item video country  wow fadeInUp" data-wow-delay="100ms" style="padding:5px;box-shadow: 0 2px 10px 0 grey;">
                        <div class="single-portfolio-content">
                            <img src="<?php echo $url;?>img/bg-img/w5.jpg" alt="">
                            <div class="hover-content">
                                <a href="<?php echo $url;?>img/bg-img/w5.jpg" class="portfolio-img">+</a>
                            </div>
                        </div>
                    </div>

                    <!-- Single Gallery Item -->
                    <div class="col-12 col-sm-6 col-lg-4 single_gallery_item video country wow fadeInUp" data-wow-delay="100ms" style="padding:5px;box-shadow: 0 2px 10px 0 grey;">
                        <div class="single-portfolio-content">
                            <img src="<?php echo $url;?>img/bg-img/w6.jpg" alt="">
                            <div class="hover-content">
                                <a href="<?php echo $url;?>img/bg-img/w6.jpg" class="portfolio-img">+</a>
                            </div>
                        </div>
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
