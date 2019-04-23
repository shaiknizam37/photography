<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
   <head>
      <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
      <link href='<?php echo URL;?>certification/img/favicons/favicon.ico' rel='icon' type='image/png'>
      <meta name='apple-mobile-web-app-capable' content='yes' />
      <meta charset="UTF-8">
      <link rel="stylesheet" media="screen" href="<?php echo URL;?>certification/css/bootstrap.css" data-turbolinks-track="true" />
      <link href="<?php echo URL;?>certification/css/style.css" rel="stylesheet" data-turbolinks-track="true">
      </link>
      <title>THE PHOTOGRAPHY CLUB</title>
      <meta name="brand_video_player_color" content="#ed6c35" />
      <style></style>
      <script src='//fast.wistia.com/assets/external/E-v1.js'></script>
      <script src='https://www.google.com/recaptcha/api.js' async defer></script>
      <script src=""></script>
      <script src="<?php echo URL;?>certification/js/application.js" data-turbolinks-track="true"></script>
      <script src="<?php echo URL;?>certification/js/student.js"></script>
      <!-- HEADER -->
      <!-- HEADER -->
      <header class=''>
         <!-- Navbar -->
         <div class="navbar navbar-fedora navbar-fixed-top is-at-top bs-docs-nav is-not-signed-in" id='navbar' role='navigation'>
            <div class='container'>
               <div class='navbar-header'>
                  <!-- Site logo -->
                  <a class='navbar-brand header-logo' href='index.html'>
                  <span class="sr-only">Photography Club</span>
                  <img src="<?php echo URL;?>certification/img/logo.png" alt="THE PHOTOGRAPHY CLUB" />
                  </a>
               </div>
            </div>
         </div>
      </header>
      <div class='view-school'>
         <div class="gray-layout">
            <div class="container on-a-school-layout">
               <div class="row">
                  <div class="col-lg-6 col-lg-offset-3 col-sm-8 col-sm-offset-2 text-center">
                     <div class="content-box">
                        <h1 class="text-center">
                           Sign In to Photography Club
                        </h1>
                        <div class="row">
                           <div class="col-sm-10 col-sm-offset-1">
                              <form class="new_user" action="/index.php/certification/dashboard/login" method="post">
                                <?php echo form_open('form'); ?>
                                
                                 <div class="form-group">
                                    <label class="control-label" for="user_email">Email Address</label>
                                    <div class="control-input">
                                       <input class="form-control input-hg" type="email" name="email" value="<?php echo set_value('email'); ?>"/>
                                    </div>
                                    <?php echo form_error('email', '<div style="color:red">', '</div>'); ?>
                                 </div>
                                 <div class="form-group">
                                    <label class="control-label" for="user_password">Password</label>
                                    <div class="control-input">
                                       <input class="form-control input-hg" type="password" name="password" />
                                    </div>
                                    <?php echo form_error('password', '<div style="color:red">', '</div>'); ?>
                                 </div>
                                 <center><?php if(isset($data)){echo '<div style="color:red">'.$data.'<div>';} ?></center>
                                 <br>
                                 <div class="form-group text-center">
                                    <input type="submit" value="Sign In" class="btn btn-primary btn-md login-button" />
                                 </div>
                                 
                                 <br>
                                 <center>
                                    <a class="link-below-button" href="/certification/forgotpassword">Forgot Password?</a>
                                 </center>
                              </form>
                           </div>
                        </div>
                        <div class="box-footer"><a href="/register">Create an Account</a></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <footer class='bottom-menu bottom-menu-inverse'>
            <div class='container'>
               <div class='row'>
                  <div class='col-xs-12 col-sm-4 col-md-4 footer-column'>
                     <p>
                        &copy;
                        Photography Club
                     </p>
                  </div>
               </div>
            </div>
         </footer>
      </div>
      </body>
      </html>
