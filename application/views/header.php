<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$url="http://photographyclub.in/";
?>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    <link rel="icon" href="<?php echo $url;?>/img/pclogo.png">
    <!-- Stylesheet -->
    <link rel="stylesheet" href="<?php echo $url;?>style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.7.0/flexslider.css">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- /Preloader -->

    <!-- Top Search Form Area -->
    <div class="top-search-area">
        <div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <!-- Close -->
                        <button type="button" class="btn close-btn" data-dismiss="modal"><i class="ti-close"></i></button>
                        <!-- Form -->
                        <form action="index.html" method="post">
                            <input type="search" name="top-search-bar" class="form-control" placeholder="Search and hit enter...">
                            <button type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Header Area Start -->
    <header class="header-area">
        <!-- Main Header Start -->
        <div class="main-header-area">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Classy Menu -->
                    <nav class="classy-navbar justify-content-between" id="alimeNav">

                        <!-- Logo -->
                        <a class="nav-brand" href="http://photographyclub.in/"><img src="<?php echo $url;?>/img/pclogo.png" alt="" style="width:70px;height:50px"></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">
                            <!-- Menu Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>
                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul id="nav">
                                    <li class="active"><a href="http://photographyclub.in/">Home</a></li>
                                    <li><a href="http://photographyclub.in/index.php/about">About</a></li>
                                    <li><a href="#">Services</a>
                                        <ul class="dropdown" style="width:300px;">
                                            <li><a href="http://photographyclub.in/index.php/weddingshoot">- Wedding Shoot</a></li>
                                            <li><a href="http://photographyclub.in/index.php/prewedding">- Prewedding Shoot </a></li>
                                            <li><a href="#">- Engagement </a></li>
                                            <li><a href="#">- Candid Wedding </a></li>
                                            <li><a href="#">- Corporate Photography</a></li>
                                            <li><a href="#">- Baby shower Photography</a></li>
                                            <li><a href="#">- Birthday Photography</a></li>
                                            <li><a href="#">- Maternity Photography</a></li>
                                            <li><a href="#">- Candid Videography</a></li>
                                          </li>
                                        </ul>
                                    </li>
                                    <li><a href="http://photographyclub.in/index.php/gallery">Gallery</a></li>

                                    <li><a href="http://photographyclub.in/index.php/contact">Contact</a></li>
                                </ul>

                                <!-- Search Icon -->

                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->
