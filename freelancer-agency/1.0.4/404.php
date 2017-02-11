<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php wp_title( '|', true, 'right' ); ?></title>
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
  <body>  
  <!-- BEGAIN PRELOADER -->
  <div id="preloader">
    <div class="loader">&nbsp;</div>
  </div>
  <!-- END PRELOADER -->

  <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>
  <!-- END SCROLL TOP BUTTON -->



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
           <a class="navbar-brand logo" href="<?php echo get_site_url(); ?>"><img src="<?php echo esc_url(get_theme_mod('logo_image','')); ?>" alt="logo"></a> 
           <!-- Text logo  -->
<!--            <a class="navbar-brand logo" href="index.html"><span>Rex</span></a>                                           -->
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <?php
              wp_nav_menu( array(
                  'menu'              => 'blogMenu',
                  'depth'             => 2,
                  'container'         => 'div',
                  'container_class'   => 'collapse navbar-collapse',
                  'container_id'      => 'top-menu',
                  'menu_class'        => 'nav navbar-nav main-nav menu-scroll',
                  'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                  'walker'            => new wp_bootstrap_navwalker())
              );
            ?>                            
        </div><!--/.nav-collapse -->
       <div class="search-area">
          <form action="">
            <input id="search" name="search" type="text" placeholder="What're you looking for ?">
            <input id="search_submit" value="Rechercher" type="submit">
          </form>
        </div>         
      </div>          
    </nav> 
  </section>
  <!-- End menu section -->

  <!-- Start error page -->
  <section id="error-page">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="error-page-area">
            <div class="error-no-area">
              <div class="error-no">
                <h2><?php echo esc_html__('404 Error','freelancer-agency'); ?></h2>
                <p><?php echo esc_html__('Sorry','freelancer-agency'); ?></p>
              </div>
            </div>
          </div>
          <div class="error-message">
            <h4><?php echo esc_html__('Woops! Something gone wrong','freelancer-agency'); ?></h4>
            <p> <?php echo esc_html__('Sorry, the page you have requested has either been moved,or does not exist, Return to our','freelancer-agency'); ?> <a href="<?php echo get_site_url(); ?>"><?php echo esc_html__('homepage','freelancer-agency'); ?></a>.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End error page -->

 <?php get_footer(); ?>