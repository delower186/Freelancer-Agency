<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="<?php echo esc_url(get_theme_mod('favicon','')); ?>"/>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>

  <!-- BEGAIN PRELOADER -->
 <div id="preloader">
    <div class="loader">&nbsp;</div>
  </div>
  <!-- END PRELOADER -->    

  <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>
  <!-- END SCROLL TOP BUTTON -->

  <!-- Start header section -->  
  <header id="header">
    <div class="header-inner">
      <!-- Header image -->
      <img src="<?php echo esc_url(get_theme_mod('header_image',get_template_directory_uri() . '/assets/images/header-bg.jpg')); ?>" alt="img">
      <div class="header-overlay">
        <div class="header-content">
        <!-- Start header content slider -->
        <h2 class="header-slide"><?php echo esc_html(get_theme_mod('sliding_text_header',__('','freelancer-agency'))); ?>
          <span><?php echo esc_html(get_theme_mod('sliding_text1',__('','freelancer-agency'))); ?></span>
          <span><?php echo esc_html(get_theme_mod('sliding_text2',__('','freelancer-agency'))); ?></span>
          <span><?php echo esc_html(get_theme_mod('sliding_text3',__('','freelancer-agency'))); ?></span>
          <?php echo esc_html(get_theme_mod('sliding_text_footer',__('','freelancer-agency'))); ?></h2>
        <!-- End header content slider -->  
        <!-- Header btn area -->
        <div class="header-btn-area">
          <a class="knowmore-btn" href="#navbar"><?php echo esc_html__('KNOW MORE','freelancer-agency'); ?></a>
        </div>
      </div>
      </div>      
    </div>
  </header>
  <!-- End header section -->

  <!-- Start menu section -->
  <section id="menu-area">
    <nav class="navbar navbar-default main-navbar" role="navigation">  
      <div class="container">
        <div class="navbar-header">
          <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only"><?php echo esc_html__('Toggle navigation','freelancer-agency'); ?></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- LOGO -->     
      <!-- Image logo  -->
           <a class="navbar-brand logo" href="<?php echo esc_url(get_theme_mod('logo_image','')); ?>" alt="logo"></a> 
           <!-- Text logo  -->
<!--            <a class="navbar-brand logo" href="index.html"><span>Rex</span></a>                      -->
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav main-nav menu-scroll">
           <?php
              wp_nav_menu( array(
                  'menu'              => 'primary',
                  'theme_location'    => 'primary',
                  'depth'             => 2,
                  'container'         => 'div',
                  'container_class'   => '',
                  'container_id'      => '',
                  'menu_class'        => 'nav navbar-nav main-nav menu-scroll',
                  'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                  'walker'            => new wp_bootstrap_navwalker())
              );
            ?>
            </ul>                            
        </div><!--/.nav-collapse -->        
      </div>          
    </nav> 
  </section>
  <!-- End menu section -->