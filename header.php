<!DOCTYPE html>
<html lang="en" class="no-js">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="Sunshine - Responsive vCard Template" />
    <meta name="keywords" content="vcard, resposnive, retina, resume, jquery, css3, bootstrap, Sunshine, portfolio" />
    <meta name="author" content="lmtheme" />
    <!-- <link rel="shortcut icon" href="favicon.ico">
    <script src='https://www.google.com/recaptcha/api.js'></script> -->
    <?php wp_head();?>
  </head>

  <body>
    <!-- Loading animation -->
    <div class="preloader">
      <div class="preloader-animation">
        <div class="dot1"></div>
        <div class="dot2"></div>
      </div>
    </div>
    <!-- /Loading animation -->

    <div id="page" class="page">
      <!-- Header -->
      <header id="site_header" class="header mobile-menu-hide">
        <div class="my-photo">
          <img src="<?php echo get_template_directory_uri().'/assets/images/my-photo.png' ?>" alt="">
          <div class="mask"></div>
        </div>

        <div class="site-title-block">
          <h1 class="site-title">Bikash Rai</h1>
          <p class="site-description">Web Developer</p>
        </div>

        <!-- Navigation & Social buttons -->
        <div class="site-nav">
          <!-- Main menu -->
          
              
              <?php
              wp_nav_menu(array(
                  'theme_location'=>'primary',
                  'depth'=>2,// 1 = no dropdowns, 2 = with dropdowns.
                  'container'=>'',
                  'menu_id'=>'nav',
                  'menu_class'=>'site-main-menu',
                  'add_li_class'=>'',
                  'add_a_class'     => 'pt-trigger',

              ));
              ?>
           
           
         
          <!-- /Main menu -->

          <!-- Social buttons -->
          <ul class="social-links">
            <li><a class="tip social-button" href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li> <!-- Full list of social icons: http://fontawesome.io/icons/#brand -->
            <li><a class="tip social-button" href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
            <li><a class="tip social-button" href="#" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
            <!--<li><a class="tip social-button" href="#" title="Youtube"><i class="fa fa-youtube"></i></a></li>-->
            <!--<li><a class="tip social-button" href="#" title="last.fm"><i class="fa fa-lastfm"></i></a></li>-->
            <!--<li><a class="tip social-button" href="#" title="Dribbble"><i class="fa fa-dribbble"></i></a></li>-->
          </ul>
          <!-- /Social buttons -->
        </div>
        <!-- Navigation & Social buttons -->
      </header>
      <!-- /Header -->

      <!-- Mobile Header -->
      <div class="mobile-header mobile-visible">
        <div class="mobile-logo-container">
          <div class="mobile-site-title">Alex Smith</div>
        </div>

        <a class="menu-toggle mobile-visible">
          <i class="fa fa-bars"></i>
        </a>
      </div>
      <!-- /Mobile Header -->