<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$url="http://photographyclub.in/";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Title -->
    <title>Photography Club | Contact</title>

     <?php $this->load->view('header');?>
    <!-- Favicon -->

    <!-- Breadcrumb Area Start -->
    <section class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(<?php echo $url;?>img/bg-img/38.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content text-center">
                        <h2 class="page-title">Contact</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="http://photographyclub.in/"><i class="icon_house_alt"></i> Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Contact</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Area End -->

    <!-- Contact Area Start -->
    <div class="contact-area section-padding-80-50">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <h2 class="contact-title mb-30">Let’s Work <br>Together</h2>
                </div>
                <div class="col-12 col-md-6 col-lg-6">
                    <!-- Contact Info -->
                     <div class="alime-contact-form">
                        <h4 class="mb-30">Leave A Comment</h4>
                        <!-- Form -->
                        <form action="#" method="post">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <input type="text" name="message-name" class="form-control mb-30" placeholder="Your Name">
                                </div>
                                <div class="col-12 col-md-6">
                                    <input type="email" name="message-email" class="form-control mb-30" placeholder="Email">
                                </div>
                                <div class="col-12">
                                    <textarea name="message" class="form-control mb-30" placeholder="Messages"></textarea>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn alime-btn btn-2 mt-15">Send Messages</button>
                                </div>
                            </div>
                        </form>
                    </div>
            </div>
        </div>
    </div>
  </div>
  <br>
    <!-- Contact Area End -->

    <!-- Map Area Start -->
    <div class="map-area section-padding-0-80">
        <div class="container">
            <div id="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d15553.362015961846!2d77.58184206977539!3d12.950049950000002!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1554295754352!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
    <!-- Map Area End -->

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
