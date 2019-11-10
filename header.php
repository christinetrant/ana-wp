<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <!-- <title>Ana Female Boxing Coach</title> -->
    <meta <?php bloginfo('charset'); ?>>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php bloginfo('description'); ?>">

    <title>
      <?php bloginfo('name'); ?> ｜ 
      <?php is_front_page() ? bloginfo('description') : wp_title(); ?>
      </title>

  <?php wp_head(); ?>
  <style>
    .site-blocks-cover {
      background: url(<?php echo get_theme_mod('showcase_image', get_bloginfo('template_url') . '/images/bg.jpg'); ?>) no-repeat center center; 
      background-size: cover; 
    }
  </style>
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    <!-- FAVICON -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/images/favicon/site.webmanifest">
    <link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

  </head>
  <body>
  
  <div class="site-wrap">
  <!-- ====================== -->
    <!-- ===   NAVIGATION   === -->
    <!-- ====================== -->
    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    
    <div class="site-navbar-wrap bg-white">
      <div class="site-navbar-top">
        <div class="container py-2">
          <div class="row align-items-center">
            <div class="col-6">
              <a href="https://www.instagram.com/femaleboxingcoach/" class="p-2 pl-0">
                <span class="icon-instagram"></span>
                <span class="d-none d-md-inline-block">@femaleboxingcoach</span>
              </a>
            </div>
            <div class="col-6">
              <div class="d-flex ml-auto">
                <a href="mailto://anfemalecoach@gmail.com" class="d-flex align-items-center ml-auto mr-4">
                  <span class="icon-envelope mr-2"></span>
                  <span class="d-none d-md-inline-block">anfemalecoach@gmail.com</span>
                </a>
                <a href="tel://07951445564" class="d-flex align-items-center">
                  <span class="icon-phone mr-2"></span>
                  <span class="d-none d-md-inline-block">079 5144 5564</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
      
    <div class="site-navbar-wrap bg-white">
      <div class="container">
        <div class="site-navbar bg-light">
          <div>
            <div class="row align-items-center">
              <div class="col-2">
                <h2 class="mb-0 site-logo">
                  <a href="index.php" class="navbar-brand">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="female boxing coach">
                  </a>
                </h2>
              </div>
              <div class="col-10">
                 <nav class="site-navigation text-right">
                  <div class="container">
                    <div class="d-inline-block d-lg-none ml-md-0 mr-auto">
                      <a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a>
                    </div> 

                    <ul class="site-menu js-clone-nav d-none d-lg-block">
                      <!-- <li class="active">
                        <a href="index.html">Home</a>
                      </li>
                      <li><a href="about.html">About</a></li>
                      <li><a href="classes.html">Classes</a></li>
                      <li><a href="index.html#schedule">Schedule</a></li>
                      <li><a href="index.html#testimonials">Testimonials</a></li>
                      <li><a href="gallery.html">Gallery</a></li>
                      <li><a href="index.html#contact">Contact</a></li> -->
                    


                    <?php
                    wp_nav_menu( array(
                      'theme_location' => 'menu-1',
                      'menu_id'        => 'primary-menu',
                      'container'      => false,
                      'depth'          => 2,
                      'menu_class'     => 'navbar-nav ml-auto site-menu js-clone-nav d-none d-lg-block',
                      'walker'         => new Bootstrap_NavWalker(),
                      'fallback_cb'    => 'Bootstrap_NavWalker::fallback',
                    ) );
                    ?>

                    </ul> 

                  </div>
                </nav>    

                


              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>