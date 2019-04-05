<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$url="http://photographyclub.in/";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Title -->
    <title>Photography Club | Home</title>
    <?php $this->load->view('header');?>

    <!-- Welcome Area Start -->
    <section class="welcome-area">
        <div class="welcome-slides owl-carousel">
            <!-- Single Slide -->
            <div class="single-welcome-slide bg-img" style="background-image: url(img/bg-img/2.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <!-- Welcome Text -->
                        <div class="col-12 col-lg-8 col-xl-6">
                            <div class="welcome-text">
                                <h2 data-animation="bounceInDown" data-delay="900ms"> <br></h2>
                                <p data-animation="bounceInDown" data-delay="500ms"></p>
                                <div class="hero-btn-group" data-animation="bounceInDown" data-delay="100ms">
                                    <a href="#" class="btn alime-btn mb-3 mb-sm-0 mr-4">More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Slide -->
            <div class="single-welcome-slide bg-img" style="background-image: url(img/bg-img/1.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <!-- Welcome Text -->
                        <div class="col-12 col-lg-8 col-xl-6">
                            <div class="welcome-text">
                                <h2 data-animation="bounceInUp" data-delay="100ms"> <br></h2>
                                <p data-animation="bounceInUp" data-delay="500ms"></p>
                                <div class="hero-btn-group" data-animation="bounceInUp" data-delay="900ms">
                                    <a href="#" class="btn alime-btn mb-3 mb-sm-0 mr-4">More</a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Single Slide-->
            <div class="single-welcome-slide bg-img" style="background-image: url(img/bg-img/2a.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <!-- Welcome Text -->
                        <div class="col-12 col-lg-8 col-xl-6">
                            <div class="welcome-text">
                                <h2 data-animation="bounceInUp" data-delay="100ms"> <br></h2>
                                <p data-animation="bounceInUp" data-delay="500ms"></p>
                                <div class="hero-btn-group" data-animation="bounceInUp" data-delay="900ms">
                                    <a href="#" class="btn alime-btn mb-3 mb-sm-0 mr-4">More</a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Single Slide-->
            <div class="single-welcome-slide bg-img" style="background-image: url(img/bg-img/2b.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <!-- Welcome Text -->
                        <div class="col-12 col-lg-8 col-xl-6">
                            <div class="welcome-text">
                                <h2 data-animation="bounceInUp" data-delay="100ms"> <br></h2>
                                <p data-animation="bounceInUp" data-delay="500ms"></p>
                                <div class="hero-btn-group" data-animation="bounceInUp" data-delay="900ms">
                                    <a href="#" class="btn alime-btn mb-3 mb-sm-0 mr-4">More</a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Welcome Area End -->

    <!-- Gallery Area Start -->
    <div class="alime-portfolio-area section-padding-80 clearfix">
        <div class="container-fluid">
            <div class="row">
               <div class="col-12">
                    <div class="section-heading text-center">
                        <h2>OUR WORK</h2>
                        <h4>PROFESSIONAL PHOTOGRAPHERS OF PHOTOGRAPHY CLUB</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et do sunt explicabo. Nemo enim ipsam et dolore magnam aliquam quaerat voluptatem.</p>
                    </div>
                </div>
            </div>

            <div class="row alime-portfolio">
                    <!-- Single Gallery Item -->
              <div class="col-12 col-sm-6 col-lg-4 single_gallery_item video country  wow fadeInUp" data-wow-delay="100ms" style="padding:5px;box-shadow: 0 2px 10px 0 grey;">
                    <div class="single-portfolio-content">
                        <img src="<?php echo $url;?>img/bg-img/36a.jpg" alt="">
                        <div class="hover-content">
                            <a href="<?php echo $url;?>img/bg-img/36a.jpg" class="portfolio-img">+</a>
                        </div>
                    </div>
                </div>

                <!-- Single Gallery Item -->
             <div class="col-12 col-sm-6 col-lg-4 single_gallery_item video country  wow fadeInUp" data-wow-delay="100ms" style="padding:5px;box-shadow: 0 2px 10px 0 grey;">
                    <div class="single-portfolio-content">
                        <img src="<?php echo $url;?>img/bg-img/36b.jpg" alt="">
                        <div class="hover-content">
                            <a href="<?php echo $url;?>img/bg-img/36b.jpg" class="portfolio-img">+</a>
                        </div>
                    </div>
                </div>

                <!-- Single Gallery Item -->
                <div class="col-12 col-sm-6 col-lg-4 single_gallery_item video country  wow fadeInUp" data-wow-delay="100ms" style="padding:5px;box-shadow: 0 2px 10px 0 grey;">
                    <div class="single-portfolio-content">
                        <img src="<?php echo $url;?>img/bg-img/36c.jpg" alt="">
                        <div class="hover-content">
                            <a href="<?php echo $url;?>img/bg-img/36c.jpg" class="portfolio-img">+</a>
                        </div>
                    </div>
                </div>

                <!-- Single Gallery Item -->
              <div class="col-12 col-sm-6 col-lg-4 single_gallery_item video country wow fadeInUp" data-wow-delay="100ms" style="padding:5px;box-shadow: 0 2px 10px 0 grey;">
                    <div class="single-portfolio-content">
                        <img src="<?php echo $url;?>img/bg-img/36d.jpg" alt="">
                        <div class="hover-content">
                            <a href="<?php echo $url;?>img/bg-img/36d.jpg" class="portfolio-img">+</a>
                        </div>
                    </div>
                </div>

                <!-- Single Gallery Item -->
             <div class="col-12 col-sm-6 col-lg-4 single_gallery_item video country  wow fadeInUp" data-wow-delay="100ms" style="padding:5px;box-shadow: 0 2px 10px 0 grey;">
                    <div class="single-portfolio-content">
                        <img src="<?php echo $url;?>img/bg-img/36e.jpg" alt="">
                        <div class="hover-content">
                            <a href="<?php echo $url;?>img/bg-img/36e.jpg" class="portfolio-img">+</a>
                        </div>
                    </div>
                </div>

                <!-- Single Gallery Item -->
                <div class="col-12 col-sm-6 col-lg-4 single_gallery_item video country wow fadeInUp" data-wow-delay="100ms" style="padding:5px;box-shadow: 0 2px 10px 0 grey;">
                    <div class="single-portfolio-content">
                        <img src="<?php echo $url;?>img/bg-img/36f.jpg" alt="">
                        <div class="hover-content">
                            <a href="<?php echo $url;?>img/bg-img/36f.jpg" class="portfolio-img">+</a>
                        </div>
                    </div>
                </div>


            </div>

            <div class="row">
                <div class="col-12 text-center wow fadeInUp" data-wow-delay="700ms">
                    <a href="#" class="btn alime-btn btn-2 mt-15">View More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Gallery Area End -->

    <!--Testimonials--->
    <style>
        .testimonial-container {
	background-color: rgba(245, 245, 245, 1);
	width: 100%;
}

.cd-testimonials-wrapper {
	position: relative;
	width: 100%;
	max-width: 100%;
	margin: 0 auto;
	background-color: rgba(245, 245, 245, 1);
	-webkit-font-smoothing: antialiased;
	-moz-osx-font-smoothing: grayscale;
	padding: 100px 0px 40px;
	z-index: 1;
}

.cd-testimonials-wrapper h2 {
	text-align: center;
	position: absolute;
	width: 100%;
	top: 60px;
	margin: 0 auto;
}

@media only screen and (min-width: 768px) {
	.cd-testimonials-wrapper {
		padding: 170px 0px 60px;
	}
	.cd-testimonials-wrapper h2 {
		text-align: center;
		position: absolute;
		width: 100%;
		top: 100px;
		margin: 0 auto;
	}
}

.testimonial-content {
	max-width: 1000px;
	width: 80%;
	margin: 0 auto 30px auto;
}

.cd-testimonials {
	color: rgba(130, 132, 139, 1);
	text-align: center;
	list-style: none;
	padding: 0;
	margin: 0;
}

.cd-testimonials > li {
	position: absolute;
	opacity: 0;
}

.cd-testimonials > li:first-child {
	position: relative;
	opacity: 1;
}

.testimonial-content p {
	font-style: italic;
	line-height: 1.4;
	margin-bottom: 1em;
	padding: 0 14px;
}

@media only screen and (min-width: 768px) {
	.testimonial-content p {
		font-size: 20px;
		font-family: 'Open Sans';
	}
}

@media only screen and (min-width: 1170px) {
	.testimonial-content p {
		font-size: 24px;
		line-height: 1.6;
	}
}

.cd-author-info span p {
	display: inline-block;
	font-size: 14px;
	padding-left: 0;
}

.cd-author-info span p a {
	color: rgba(126, 129, 136, 1);
}

.cd-author img,
.cd-author .cd-author-info {
	display: inline-block;
	vertical-align: top;
}

.cd-author img {
	width: 40px;
	height: 40px;
	border-radius: 50%;
	margin-right: 5px;
}

.cd-author .cd-author-info {
	text-align: left;
	line-height: 1
}

.cd-author .cd-author-info li:first-child {
	font-size: 14px;
	margin-top: 4px;
}

.cd-author .cd-author-info li:last-child {
	font-size: 12px;
	color: #6b6b70;
}

ul.cd-author-info {
	list-style: none;
}

ul.cd-author-info li span:before {
	font-family: 'FontAwesome';
	content: '\f099';
	font-size: 24px;
	display: inline-block;
	position: absolute;
	margin-top: 2px;
	font-style: normal;
	margin-left: -30px;
}

ul.cd-author-info li span {
	font-size: 14px;
	padding-left: 30px;
	line-height: 24px;
	font-family: 'Open Sans', sans-serif;
	font-style: italic;
	font-weight: 300;
}

@media only screen and (min-width: 768px) {
	.cd-author img {
		width: 58px;
		height: 58px;
	}
	.cd-author .cd-author-info {
		line-height: 1.4;
	}
	.cd-author .cd-author-info li:first-child {
		font-size: 18px;
	}
}

@media only screen and (max-width: 320px) {}

.flex-direction-nav a {
	text-decoration: none;
	display: block;
	width: 50px;
	height: 100%;
	margin: 0px 0 0;
	position: absolute;
	z-index: 9999;
	top: 0;
	overflow: hidden;
	opacity: 1;
	background: rgba(245, 245, 245, 1);
	cursor: pointer;
	color: rgba(255, 255, 255, .5);
	text-shadow: 1px 1px 0 rgba(255, 255, 255, 0.3);
	-webkit-transition: all 0.3s ease-in-out;
	-moz-transition: all 0.3s ease-in-out;
	-ms-transition: all 0.3s ease-in-out;
	-o-transition: all 0.3s ease-in-out;
	transition: all 0.3s ease-in-out;
}

.flex-direction-nav a:before {
	font-size: 40px;
	content: url('https://dl.dropboxusercontent.com/u/97609687/codepen/chevronleft.svg');
	position: absolute;
	display: block;
	top: 50%;
	padding: 14px 10px 14px 10px;
	-webkit-transform: translateY(-50%);
	-moz-transform: translateY(-50%);
	-ms-transform: translateY(-50%);
	transform: translateY(-50%);
}

.flex-direction-nav a.flex-next:before {
	content: url('https://dl.dropboxusercontent.com/u/97609687/codepen/chevronright.svg');
	padding: 14px 20px 14px 10px;
}

.flex-direction-nav .flex-prev {
	left: 0px;
}

.flex-direction-nav .flex-next {
	right: 0px;
	text-align: right;
}

.flexslider:hover .flex-direction-nav .flex-prev {
	opacity: 1;
	left: 0px;
}

.flexslider:hover .flex-direction-nav .flex-prev:hover {
	opacity: 1;
}

.flexslider:hover .flex-direction-nav .flex-next {
	opacity: 1;
	right: 0px;
}

.flexslider:hover .flex-direction-nav .flex-next:hover {
	opacity: 1;
}

.flex-direction-nav .flex-disabled {
	opacity: 0!important;
	filter: alpha(opacity=0);
	cursor: default;
}

.flex-control-paging li a {
	width: 6px;
	height: 6px;
	display: block;
	background: #666;
	background: rgba(0, 0, 0, 0.4);
	cursor: pointer;
	text-indent: -9999px;
	-webkit-box-shadow: inset 0 0 3px rgba(0, 0, 0, 0.3);
	-moz-box-shadow: inset 0 0 3px rgba(0, 0, 0, 0.3);
	-o-box-shadow: inset 0 0 3px rgba(0, 0, 0, 0.3);
	box-shadow: inset 0 0 3px rgba(0, 0, 0, 0.3);
	-webkit-border-radius: 20px;
	-moz-border-radius: 20px;
	border-radius: 20px;
}

.flex-control-paging li a:hover {
	background: #333;
	background: rgba(0, 0, 0, 0.7);
}

.flex-control-paging li a.flex-active {
	background: #000;
	background: rgba(2, 23, 31, 1);
	cursor: default;
}

.flex-control-nav {
	bottom: 30px;
	position: absolute;
	margin: 0 auto;
	padding: 0;
	text-align: center;
	width: 100%;
}

.flex-control-nav li {
	display: inline-block;
	padding: 0px 5px 0px 5px;
}

@media screen and (max-width: 767px) {
	.flex-direction-nav a {
		width: 30px;
	}
	.flex-direction-nav a:before {
		visibility: hidden;
	}
	.flex-direction-nav a:before {
		padding: 14px 0px 10px 0px;
	}
	.flex-direction-nav .flex-prev {
		left: 0px;
	}
	.flex-direction-nav .flex-next {
		right: 0px;
		text-align: right;
	}
	.flexslider:hover .flex-direction-nav .flex-prev {
		opacity: 1;
		left: 0px;
	}
	.flexslider:hover .flex-direction-nav .flex-prev:hover {
		opacity: 1;
	}
	.flexslider:hover .flex-direction-nav .flex-next {
		opacity: 1;
		right: 0px;
	}
	.flex-direction-nav {
		visibility: hidden;
	}
}
    </style>
<div class="testimonial-container">
	<div class="dk-container">
		<div class="cd-testimonials-wrapper cd-container">
			<h2>Testimonials</h2>
			<ul class="cd-testimonials">
				<li>
					<div class="testimonial-content">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
						<div class="cd-author">
							<img src="http://placehold.it/350x350/222222/222222" alt="Author image">
							<ul class="cd-author-info">
								<li>Lorem<strong>Ipsum</strong><br><span>@twitterhandle</span></li>
								<li></li>
							</ul>
						</div>
					</div>
				</li>
				<li>
					<div class="testimonial-content">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sed diam eget risus varius blandit sit amet non magna. Cras mattis consectetur purus sit amet fermentum.</p>
						<div class="cd-author">
							<img src="http://placehold.it/350x350/222222/222222" alt="Author image">
							<ul class="cd-author-info">
								<li>Lorem<strong>Ipsum</strong><br><span>@twitterhandle</span></li>
								<li></li>
							</ul>
						</div>
					</div>
				</li>
				<li>
					<div class="testimonial-content">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sed diam eget risus varius blandit sit amet non magna. Cras mattis consectetur purus sit amet fermentum.</p>
						<div class="cd-author">
							<img src="http://placehold.it/350x350/222222/222222" alt="Author image">
							<ul class="cd-author-info">
								<li>Lorem<strong>Ipsum</strong><br><span>@twitterhandle</span></li>
								<li></li>
							</ul>
						</div>
					</div>
				</li>
			</ul>
		</div>
		<!-- cd-testimonials -->
	</div>
</div>
    <!--Testimonials Ends--->

    <!-- Follow Area Start -->
    <section class="follow-area clearfix">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center"><br>
                        <h2>Follow Instagram</h2>
                        <p></p>
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
    </section>
    <!-- Follow Area End -->
    <?php $this->load->view('footer');?>
        <script>
            jQuery(document).ready(function($) {
	//create the slider
	$('.cd-testimonials-wrapper').flexslider({
		selector: ".cd-testimonials > li",
		animation: "slide",
		controlNav: true,
		slideshow: false,
		smoothHeight: true,
		start: function() {
			$('.cd-testimonials').children('li').css({
				'opacity': 1,
				'position': 'relative'
			});
		}
	});
});
        </script>


</body>

</html>
