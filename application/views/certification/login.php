<?php
   defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
   <head>
      <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
      <link href='img/favicons/favicon.ico' rel='icon' type='image/png'>
      <meta name='apple-mobile-web-app-capable' content='yes' />
      <meta charset="UTF-8">
      <meta name="csrf-param" content="authenticity_token" />
      <meta name="csrf-token" content="bqRyKw1zPGDQz88ziKXGW4aXjdjHada94FLwHXMiG7EdsaMtnMtJ97adbhBre3GTLOKCD8L/XslNFSoEw6q2rw==" />
      <link rel="stylesheet" media="screen" href="css/bootstrap.css" data-turbolinks-track="true" />
      <link href="css/style-82475caffdf84a102e6ba777aba7d3f7d0d22ddd.css" rel="stylesheet" data-turbolinks-track="true">
      </link>
      <title>THE PHOTOGRAPHY CLUB</title>
      <meta name="brand_video_player_color" content="#ed6c35" />
      <style></style>
      <script src='//fast.wistia.com/assets/external/E-v1.js'></script>
      <script src='https://www.google.com/recaptcha/api.js' async defer></script>
      <script src=""></script>
      <script src="js/application.js" data-turbolinks-track="true">
      </script><script src="js/student.js"></script>
      <!-- HEADER -->
      <header class=''>
         <!-- Navbar -->
         <div class="navbar navbar-fedora navbar-fixed-top is-at-top bs-docs-nav is-not-signed-in" id='navbar' role='navigation'>
            <div class='container'>
               <div class='navbar-header'>
                  <!-- Site logo -->
                  <a class='navbar-brand header-logo' href='index.html'>
                  <span class="sr-only">PHOTOGRAPHY CLUB</span>
                  <img src="img/logo.png" alt="THE PHOTOGRAPHY CLUB" />
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
                           Log In to PHOTOGRAPHY CLUB
                        </h1>
                        <div class="row">
                           <div class="col-sm-10 col-sm-offset-1">
                              <form class="new_user" id="new_user" action="included_courses.html" accept-charset="UTF-8" method="post">
                                 <input name="utf8" type="hidden" value="&#x2713;" /><input type="hidden" name="authenticity_token" value="WPdVxiETeu6jIwVUv4Xg2F/fsv5OXRRZtOlL5apL2WK5Taog44s7bLNKOAJ5WAbGwAZQ5flXfx8mKwXABsxNLQ==" />
                                 <input value="37700" type="hidden" name="user[school_id]" id="user_school_id" />
                                 <div class="form-group">
                                    <label class="control-label" for="user_email">Email Address</label>
                                    <div class="control-input">
                                       <input autofocus="autofocus" class="form-control input-hg" type="email" value="" name="user[email]" id="user_email" />
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <label class="control-label" for="user_password">Password</label>
                                    <div class="control-input">
                                       <input autocomplete="off" class="form-control input-hg" type="password" name="user[password]" id="user_password" />
                                    </div>
                                 </div>
                                 <br>
                                 <div class="form-group text-center">
                                    <input type="submit" name="commit" value="Log In" class="btn btn-primary btn-md login-button" />
                                 </div>
                                 <br>
                                 <center>
                                    <a class="link-below-button" href="/secure/37700/users/password/new">Forgot Password?</a>
                                 </center>
                              </form>
                           </div>
                        </div>
                        <div class="box-footer"><a href="/secure/37700/users/sign_up?flow_school_id=37700">Create an Account</a></div>
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
                        PHOTOGRAPHY CLUB
                     </p>
                  </div>
               </div>
            </div>
         </footer>
      </div>
      </body>
</html>
