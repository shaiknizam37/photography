<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php  $this->load->view('website/header');?>
    <div class="swiper-main-slider-fade swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide" style="background-image:url('img/slider/slide13.jpg');">
                <div class="container">
                    <div class="slider-content left-holder">
                        <h2 class="animated fadeInDown"> Creative Consulting Agency <br>For Smart Solutions. </h2>
                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-12">
                                <p class="animated fadeInDown"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo. </p>
                            </div>
                        </div>
                        <div class="animated fadeInUp mt-30"> <a href="index.php#contact" class="dark-button button-md">Contact us</a> </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide" style="background-image:url('img/slider/slide11.jpg');">
                <div class="container">
                    <div class="slider-content left-holder">
                        <h2 class="animated fadeInDown"> We will help to improve<br>your business </h2>
                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-12">
                                <p class="animated fadeInDown"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo. </p>
                            </div>
                        </div>
                        <div class="animated fadeInUp mt-25"> <a href="index.php#contact" class="dark-button button-md">Contact us</a> </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide" style="background-image:url('img/slider/slide12.jpg');">
                <div class="container">
                    <div class="slider-content left-holder">
                        <h2 class="animated fadeInDown"> Building a Succesfull Business </h2>
                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-12">
                                <p class="animated fadeInDown"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo. </p>
                            </div>
                        </div>
                        <div class="animated fadeInUp mt-30"> <a href="index.php#contact" class="dark-button button-md">Contact us</a> </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </div>
    <div class="section-clients-grey">
        <div class="container">
            <div class="owl-carousel owl-theme clients" id="clients">
                <div class="item"> <img src="<?php echo URL;?>website/img/partners/partner1.png" alt="partner-image"> </div>
                <div class="item"> <img src="<?php echo URL;?>website/img/partners/partner2.png" alt="partner-image"> </div>
                <div class="item"> <img src="<?php echo URL;?>website/img/partners/partner3.png" alt="partner-image"> </div>
                <div class="item"> <img src="<?php echo URL;?>website/img/partners/partner4.png" alt="partner-image"> </div>
                <div class="item"> <img src="<?php echo URL;?>website/img/partners/partner5.png" alt="partner-image"> </div>
                <div class="item"> <img src="<?php echo URL;?>website/img/partners/partner6.png" alt="partner-image"> </div>
            </div>
        </div>
    </div>
    <div class="section-block-grey">
        <div class="container">
            <div class="section-heading center-holder">
                <h3>Our Services</h3>
                <div class="section-heading-line"></div>
            </div>
            <div class="row mt-40">
                <div class="owl-carousel owl-theme" id="testmonials-carousel-2">
                  <div class="project-item"><a href="#"><img src="<?php echo URL;?>website/img/projects/car-1.jpg" alt="project" style="width:350px;margin:30px"></a>
                      <h6 style="margin:30px">Wedding Photographer</h6>
                  </div>
                  <div class="project-item"> <a href="#"><img src="<?php echo URL;?>website/img/projects/car-2.jpg" alt="project"  style="width:350px;margin:30px"></a>
                      <h6 style="margin:30px">Pre-Wedding Shoot</h6>
                  </div>
                  <div class="project-item"><a href="#"><img src="<?php echo URL;?>website/img/projects/car-3.jpg" alt="project"  style="width:350px;margin:30px"></a>
                      <h6 style="margin:30px">Bridal Makeup Artist</h6>
                  </div>
                  <div class="project-item"><a href="#"><img src="<?php echo URL;?>website/img/projects/car-4.jpg" alt="project"  style="width:350px;margin:30px"></a>
                      <h6 style="margin:30px">CandidWedding Shoot</h6>
                  </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-block">
        <div class="container">
            <div class="section-heading center-holder">
                <h4>Work & Inspirations</h4>
                <div class="section-heading-line"></div>
            </div>
            <div class="row mt-30">
                <div class="col-md-4 col-sm-6 col-12">
                    <div class="project-grid">
                        <div class="project-grid-img"> <img src="<?php echo URL;?>website/img/projects/pro-2.jpg" alt="img"> </div>
                        <div class="project-grid-overlay">
                            <h4><a href="#">Wedding Photography</a></h4>
                            </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-12">
                    <div class="project-grid">
                        <div class="project-grid-img"> <img src="<?php echo URL;?>website/img/projects/pro-1.jpg" alt="img"> </div>
                        <div class="project-grid-overlay">
                            <h4><a href="#">Wedding Dresses</a></h4>
                            </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-12">
                    <div class="project-grid">
                        <div class="project-grid-img"> <img src="<?php echo URL;?>website/img/projects/pro-3.jpg" alt="img"> </div>
                        <div class="project-grid-overlay">
                            <h4><a href="#">Bridal Makeup</a></h4>
                           </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-12">
                    <div class="project-grid">
                        <div class="project-grid-img"> <img src="<?php echo URL;?>website/img/projects/pro-6.jpg" alt="img"> </div>
                        <div class="project-grid-overlay">
                            <h4><a href="#">Wedding Decor</a></h4>
                             </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-12">
                    <div class="project-grid">
                        <div class="project-grid-img"> <img src="<?php echo URL;?>website/img/projects/pro-5.jpg" alt="img"> </div>
                        <div class="project-grid-overlay">
                            <h4><a href="#">Pre-Wedding Shoot</a></h4>
                            </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-12">
                    <div class="project-grid">
                        <div class="project-grid-img"> <img src="<?php echo URL;?>website/img/projects/pro-4.jpg" alt="img"> </div>
                        <div class="project-grid-overlay">
                            <h4><a href="#">Wedding Hairstyles</a></h4>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-block-grey">
        <div class="container">
            <div class="section-heading text-center">
                <h4>Client Opinions & Reviews</h4>
                <div class="section-heading-line"></div>
            </div>
            <div class="row mt-50">
                <div class="owl-carousel owl-theme" id="testmonials-box-4">
                    <div class="testmonial-box-4">
                        <div class="row">
                            <div class="col-md-4 col-sm-4 col-4">
                                <div class="testmonial-box-4-img"> <img src="<?php echo URL;?>website/img/testmonials/t-1.jpg"> </div>
                            </div>
                            <div class="col-md-8 col-sm-8 col-8">
                                <div class="testmonial-box-4-text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                    <h4>Jack Semper</h4>
                                    <h5>Tax Specialist</h5> </div>
                            </div>
                        </div>
                    </div>
                    <div class="testmonial-box-4">
                        <div class="row">
                            <div class="col-md-4 col-sm-4 col-4">
                                <div class="testmonial-box-4-img"> <img src="<?php echo URL;?>website/img/testmonials/t-2.jpg"> </div>
                            </div>
                            <div class="col-md-8 col-sm-8 col-8">
                                <div class="testmonial-box-4-text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                    <h4>Philip Wilson</h4>
                                    <h5>Tax Specialist</h5> </div>
                            </div>
                        </div>
                    </div>
                    <div class="testmonial-box-4">
                        <div class="row">
                            <div class="col-md-4 col-sm-4 col-4">
                                <div class="testmonial-box-4-img"> <img src="<?php echo URL;?>website/img/testmonials/t-3.jpg"> </div>
                            </div>
                            <div class="col-md-8 col-sm-8 col-8">
                                <div class="testmonial-box-4-text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                    <h4>Ann Smith</h4>
                                    <h5>Tax Specialist</h5> </div>
                            </div>
                        </div>
                    </div>
                    <div class="testmonial-box-4">
                        <div class="row">
                            <div class="col-md-4 col-sm-4 col-4">
                                <div class="testmonial-box-4-img"> <img src="<?php echo URL;?>website/img/testmonials/t-4.jpg"> </div>
                            </div>
                            <div class="col-md-8 col-sm-8 col-8">
                                <div class="testmonial-box-4-text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                    <h4>Jane Brown</h4>
                                    <h5>Tax Specialist</h5> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="section-block">
        <div class="container">
            <div class="section-heading center-holder"> <span>Meet our team</span>
                <h3>Team of professional photographer</h3>
                <div class="section-heading-line"></div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    <br>incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="row mt-30">
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="team-box-2">
                        <div class="team-box-2-image"> <img src="<?php echo URL;?>website/img/team/team1.jpg" alt="member">
                            <div class="team-box-2-overlay">
                                <div class="team-box-2-name">
                                    <h4>Samm Bock</h4>
                                    <h5>Support Enginer</h5> </div>
                                <div class="team-box-2-content"> <a href="index.php#"><i class="fa fa-facebook-official"></i></a> <a href="index.php#"><i class="fa fa-twitter"></i></a> <a href="index.php#"><i class="fa fa-instagram"></i></a> <a href="index.php#"><i class="fa fa-twitter"></i></a> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="team-box-2">
                        <div class="team-box-2-image"> <img src="<?php echo URL;?>website/img/team/team2.jpg" alt="member">
                            <div class="team-box-2-overlay">
                                <div class="team-box-2-name">
                                    <h4>Mary Cay</h4>
                                    <h5>Support Enginer</h5> </div>
                                <div class="team-box-2-content"> <a href="index.php#"><i class="fa fa-facebook-official"></i></a> <a href="index.php#"><i class="fa fa-twitter"></i></a> <a href="index.php#"><i class="fa fa-instagram"></i></a> <a href="index.php#"><i class="fa fa-twitter"></i></a> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="team-box-2">
                        <div class="team-box-2-image"> <img src="<?php echo URL;?>website/img/team/team3.jpg" alt="member">
                            <div class="team-box-2-overlay">
                                <div class="team-box-2-name">
                                    <h4>Henry Ford</h4>
                                    <h5>Support Enginer</h5> </div>
                                <div class="team-box-2-content"> <a href="index.php#"><i class="fa fa-facebook-official"></i></a> <a href="index.php#"><i class="fa fa-twitter"></i></a> <a href="index.php#"><i class="fa fa-instagram"></i></a> <a href="index.php#"><i class="fa fa-twitter"></i></a> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="team-box-2">
                        <div class="team-box-2-image"> <img src="<?php echo URL;?>website/img/team/team4.jpg" alt="member">
                            <div class="team-box-2-overlay">
                                <div class="team-box-2-name">
                                    <h4>Clarence D. Ryan</h4>
                                    <h5>Nina Harris</h5> </div>
                                <div class="team-box-2-content"> <a href="index.php#"><i class="fa fa-facebook-official"></i></a> <a href="index.php#"><i class="fa fa-twitter"></i></a> <a href="index.php#"><i class="fa fa-instagram"></i></a> <a href="index.php#"><i class="fa fa-twitter"></i></a> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php  $this->load->view('website/footer');?>
