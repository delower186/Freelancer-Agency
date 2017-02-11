<?php
/*
 * Template Name: Homepage Template
 * Description: A Page Template for Homepage.
 */
?>
  <?php get_header(); ?>
  <!-- Start about section -->
  <section id="about">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <!-- Start welcome area -->
          <div class="welcome-area">
            <div class="title-area">
              <h2 class="tittle"><?php echo esc_html__('Welcome to','freelancer-agency'); ?> <span><?php echo esc_html(get_theme_mod('welcome_title',__('','freelancer-agency'))); ?></span></h2>
              <span class="tittle-line"></span>
              <p><?php echo esc_html(get_theme_mod('welcome_desc',__('','freelancer-agency'))); ?></p>
            </div>
            <div class="welcome-content">
              <ul class="wc-table">
                <li>
                  <div class="single-wc-content wow fadeInUp">
                    <span class="fa fa-users wc-icon"></span>
                    <h4 class="wc-tittle"><?php echo esc_html(get_theme_mod('col1_title',__('','freelancer-agency'))); ?></h4>
                    <p><?php echo esc_html(get_theme_mod('col1_desc',__('','freelancer-agency'))); ?></p>
                  </div>
                </li>
                <li>
                  <div class="single-wc-content wow fadeInUp">
                    <span class="fa fa-sellsy wc-icon"></span>
                    <h4 class="wc-tittle"><?php echo esc_html(get_theme_mod('col2_title',__('','freelancer-agency'))); ?></h4>
                    <p><?php echo esc_html(get_theme_mod('col2_desc',__('','freelancer-agency'))); ?></p>
                  </div>
                </li>
                <li>
                  <div class="single-wc-content wow fadeInUp">
                    <span class="fa fa-line-chart wc-icon"></span>
                    <h4 class="wc-tittle"><?php echo esc_html(get_theme_mod('col3_title',__('','freelancer-agency'))); ?></h4>
                    <p><?php echo esc_html(get_theme_mod('col3_desc',__('','freelancer-agency'))); ?></p>
                  </div>
                </li>
                <li>
                  <div class="single-wc-content wow fadeInUp">
                    <span class="fa fa-bus wc-icon"></span>
                    <h4 class="wc-tittle"><?php echo esc_html(get_theme_mod('col4_title',__('','freelancer-agency'))); ?></h4>
                    <p><?php echo esc_html(get_theme_mod('col4_desc',__('','freelancer-agency'))); ?></p>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <!-- End welcome area -->
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="about-area">
            <div class="row">
              <div class="col-md-5 col-sm-6 col-xs-12">
                <div class="about-left wow fadeInLeft">
                  <img src="<?php echo esc_url(get_theme_mod('about_image',get_template_directory_uri() . '/assets/images/about-img')); ?>" alt="img">
                  <a class="introduction-btn" href="<?php echo esc_url(get_theme_mod('introduction_url','#')); ?>"><?php echo esc_html__('Introduction','freelancer-agency'); ?></a>
                </div>
              </div>
              <div class="col-md-7 col-sm-6 col-xs-12">
                <div class="about-right wow fadeInRight">
                  <div class="title-area">
                    <h2 class="tittle">About <span><?php echo esc_html(get_theme_mod('about_title',__('','freelancer-agency'))); ?></span></h2>
                    <span class="tittle-line"></span>
                    <p><?php echo esc_html(get_theme_mod('about_desc',__('','freelancer-agency'))); ?></p> 
                    <div class="about-btn-area">
                      <a href="<?php echo esc_url(get_theme_mod('know_more_url','#')); ?>" class="button button-default" data-text="<?php echo esc_html__('KNOW MORE','freelancer-agency'); ?>"><span><?php echo esc_html__('KNOW MORE','freelancer-agency'); ?></span></a>
                    </div>                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> 
  <!-- End about section -->

  <!-- Start call to action -->
  <section id="call-to-action">
    <img src="<?php echo esc_url(get_theme_mod('action_image',get_template_directory_uri() . '/assets/images/call-to-action-bg.png')); ?>" alt="img">
    <div class="call-to-overlay">
      <div class="container">
        <div class="call-to-content wow fadeInUp">
          <h2><?php echo esc_html(get_theme_mod('action_text',__('','freelancer-agency'))); ?></h2>
          <a href="<?php echo esc_url(get_theme_mod('button_url','')); ?>" class="button button-default" data-text="<?php echo esc_html(get_theme_mod('button_text',__('GET IT NOW','freelancer-agency'))); ?>"><span><?php echo esc_html(get_theme_mod('button_text',__('GET IT NOW','freelancer-agency'))); ?></span></a>
        </div>
      </div>
    </div> 
  </section>
  <!-- End call to action -->

  <!-- Start Team action -->
  <section id="team">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="team-area">
            <div class="title-area">
              <h2 class="tittle"><?php echo esc_html(get_theme_mod('team_title',__('Meet our team','freelancer-agency'))); ?></h2>
              <span class="tittle-line"></span>
              <p><?php echo esc_html(get_theme_mod('team_desc',__('','freelancer-agency'))); ?></p>
            </div>
            <!-- Start team content -->
            <div class="team-content">
              <ul class="team-grid">
                <li>
                  <div class="team-item team-img-1 wow fadeInUp">
                    <div class="team-info">
                      <p><?php echo esc_html(get_theme_mod('member1',__('','freelancer-agency'))); ?></p>
                      <a href="<?php echo esc_url(get_theme_mod('facebook-m1','#')); ?>"><span class="fa fa-facebook"></span></a>
                      <a href="<?php echo esc_url(get_theme_mod('twitter-m1','#')); ?>"><span class="fa fa-twitter"></span></a>
                      <a href="<?php echo esc_url(get_theme_mod('linkedin-m1','#')); ?>"><span class="fa fa-linkedin"></span></a>
                    </div>
                  </div>
                  <div class="team-address">
                    <p><?php echo esc_html(get_theme_mod('name1',__('','freelancer-agency'))); ?></p>
                    <span><?php echo esc_html(get_theme_mod('position1',__('','freelancer-agency'))); ?></span>
                  </div>
                </li>
                <li>
                  <div class="team-item team-img-2 wow fadeInUp">
                    <div class="team-info">
                      <p><?php echo esc_html(get_theme_mod('member2',__('','freelancer-agency'))); ?></p>
                      <a href="<?php echo esc_url(get_theme_mod('facebook-m2','#')); ?>"><span class="fa fa-facebook"></span></a>
                      <a href="<?php echo esc_url(get_theme_mod('twitter-m2','#')); ?>"><span class="fa fa-twitter"></span></a>
                      <a href="<?php echo esc_url(get_theme_mod('linkedin-m2','#')); ?>"><span class="fa fa-linkedin"></span></a>
                    </div>
                  </div>
                  <div class="team-address">
                    <p><?php echo esc_html(get_theme_mod('name2',__('','freelancer-agency'))); ?></p>
                    <span><?php echo esc_html(get_theme_mod('position2',__('','freelancer-agency'))); ?></span>                  
                  </div>
                </li>
                <li>
                  <div class="team-item team-img-3 wow fadeInUp">
                    <div class="team-info">
                      <p><?php echo esc_html(get_theme_mod('member3',__('','freelancer-agency'))); ?></p>
                      <a href="<?php echo esc_url(get_theme_mod('facebook-m3','#')); ?>"><span class="fa fa-facebook"></span></a>
                      <a href="<?php echo esc_url(get_theme_mod('twitter-m3','#')); ?>"><span class="fa fa-twitter"></span></a>
                      <a href="<?php echo esc_url(get_theme_mod('linkedin-m3','#')); ?>"><span class="fa fa-linkedin"></span></a>
                    </div>
                  </div>
                  <div class="team-address">
                    <p><?php echo esc_html(get_theme_mod('name3',__('','freelancer-agency'))); ?></p>
                    <span><?php echo esc_html(get_theme_mod('position3',__('','freelancer-agency'))); ?></span>
                  </div>
                </li>
                  <li>
                  <div class="team-item team-img-4 wow fadeInUp">
                    <div class="team-info">
                      <p><?php echo esc_html(get_theme_mod('member4',__('','freelancer-agency'))); ?></p>
                      <a href="<?php echo esc_url(get_theme_mod('facebook-m4','#')); ?>"><span class="fa fa-facebook"></span></a>
                      <a href="<?php echo esc_url(get_theme_mod('twitter-m4','#')); ?>"><span class="fa fa-twitter"></span></a>
                      <a href="<?php echo esc_url(get_theme_mod('linkedin-m4','#')); ?>"><span class="fa fa-linkedin"></span></a>
                    </div>
                  </div>
                  <div class="team-address">
                    <p><?php echo esc_html(get_theme_mod('name4',__('','freelancer-agency'))); ?></p>
                    <span><?php echo esc_html(get_theme_mod('position4',__('','freelancer-agency'))); ?></span>
                  </div>
                </li>
              </ul>
            </div>
            <!-- End team content -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Start Team action -->

  <!-- Start service section -->
  <section id="service">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="service-area">
            <div class="title-area">
              <h2 class="tittle"><?php echo esc_html(get_theme_mod('serivce_title',__('Service We Offer','freelancer-agency'))); ?></h2>
              <span class="tittle-line"></span>
              <p><?php echo esc_html(get_theme_mod('serivce_desc',__('','freelancer-agency'))); ?></p>
            </div>
            <!-- service content -->
            <div class="service-content">
              <ul class="service-table">
                <li class="col-md-3 col-sm-6">
                  <div class="single-service wow slideInUp">
                    <span class="fa fa-edit service-icon"></span>
                    <h4 class="service-title"><?php echo esc_html(get_theme_mod('serivce1_title',__('','freelancer-agency'))); ?></h4>
                    <p><?php echo esc_html(get_theme_mod('serivce1_desc',__('','freelancer-agency'))); ?></p>
                  </div>
                </li>
                <li class="col-md-3 col-sm-6">
                  <div class="single-service wow slideInUp">
                    <span class="fa fa-sort-amount-asc service-icon"></span>
                    <h4 class="service-title"><?php echo esc_html(get_theme_mod('serivce2_title',__('','freelancer-agency'))); ?></h4>
                    <p><?php echo esc_html(get_theme_mod('serivce2_desc',__('','freelancer-agency'))); ?></p>
                  </div>
                </li>
                <li class="col-md-3 col-sm-6">
                 <div class="single-service wow slideInUp">
                    <span class="fa fa-map-o service-icon"></span>
                    <h4 class="service-title"><?php echo esc_html(get_theme_mod('serivce3_title',__('','freelancer-agency'))); ?></h4>
                    <p><?php echo esc_html(get_theme_mod('serivce3_desc',__('','freelancer-agency'))); ?></p>
                  </div>
                </li>
                <li class="col-md-3 col-sm-6">
                  <div class="single-service wow slideInUp">
                    <span class="fa fa-rocket service-icon"></span>
                    <h4 class="service-title"><?php echo esc_html(get_theme_mod('serivce4_title',__('','freelancer-agency')));?></h4>
                    <p><?php echo esc_html(get_theme_mod('serivce4_desc',__('','freelancer-agency'))); ?></p>
                  </div>
                </li>
                <li class="col-md-3 col-sm-6">
                  <div class="single-service wow slideInUp">
                    <span class="fa fa-car service-icon"></span>
                    <h4 class="service-title"><?php echo esc_html(get_theme_mod('serivce5_title',__('','freelancer-agency'))); ?></h4>
                    <p><?php echo esc_html(get_theme_mod('serivce5_desc',__('','freelancer-agency'))); ?></p>
                  </div>
                </li>
                <li class="col-md-3 col-sm-6">
                  <div class="single-service wow slideInUp">
                    <span class="fa fa-bank service-icon"></span>
                    <h4 class="service-title"><?php echo esc_html(get_theme_mod('serivce6_title',__('','freelancer-agency'))); ?></h4>
                    <p><?php echo esc_html(get_theme_mod('serivce6_desc',__('','freelancer-agency'))); ?></p>
                  </div>
                </li>
                <li class="col-md-3 col-sm-6">
                  <div class="single-service wow slideInUp">
                    <span class="fa fa-user-secret service-icon"></span>
                    <h4 class="service-title"><?php echo esc_html(get_theme_mod('serivce7_title',__('','freelancer-agency'))); ?></h4>
                    <p><?php echo esc_html(get_theme_mod('serivce7_desc',__('','freelancer-agency'))); ?></p>
                  </div>
                </li>
                <li class="col-md-3 col-sm-6">
                  <div class="single-service wow slideInUp">
                    <span class="fa fa-support service-icon"></span>
                    <h4 class="service-title"><?php echo esc_html(get_theme_mod('serivce8_title',__('','freelancer-agency'))); ?></h4>
                    <p><?php echo esc_html(get_theme_mod('serivce8_desc',__('','freelancer-agency'))); ?></p>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End service section -->

  <!-- Start Portfolio section -->
  <section id="portfolio">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="portfolio-area">
            <div class="title-area">
              <h2 class="tittle"><?php echo esc_html(get_theme_mod('portfolio_title',__('Recent Portfolio','freelancer-agency'))); ?></h2>
              <span class="tittle-line"></span>
              <p><?php echo esc_html(get_theme_mod('portfolio_desc',__('','freelancer-agency'))); ?></p>
            </div>
            <!-- Portfolio content -->
            <div class="portfolio-content">
               <!-- Portfolio container -->
               <div class="portfolio-container">
                 <div class="single-portfolio">
                   <div class="single-item">
                     <img src="<?php echo esc_url(get_theme_mod('project1_image-small',get_template_directory_uri() . '/assets/images/portfolio-img-small1.jpg')); ?>" alt="img">
                     <div class="single-item-content">
                        <div class="portfolio-social-icon">
                          <a class="view-btn" href="#"><i class="fa fa-search-plus"></i></a>
                        </div>
                        <div class="portfolio-title">
                          <h4><?php echo esc_html(get_theme_mod('project1_title',__('','freelancer-agency'))); ?></h4>
                        </div>
                        <div class="portfolio-detail">
	                        <a href="#" class="modal-close-btn"><span class="fa fa-times"></span></a>
	                        <img src="<?php echo esc_url(get_theme_mod('project1_image-big',get_template_directory_uri() . '/assets/images/portfolio-img-big1.jpg')); ?>" alt="img-1" />
	                        <h2><?php echo esc_html(get_theme_mod('project1_title',__('','freelancer-agency'))); ?></h2>
	                        <p><?php echo esc_html(get_theme_mod('project1_desc',__('','freelancer-agency'))); ?></p>
                        </div>
                     </div>
                   </div>
                 </div>
                 <div class="single-portfolio">
                   <div class="single-item">
                     <img src="<?php echo esc_url(get_theme_mod('project2_image-small',get_template_directory_uri() . '/assets/images/portfolio-img-small2.jpg')); ?>" alt="img">
                     <div class="single-item-content">
                        <div class="portfolio-social-icon">
                          <a class="view-btn" href="#"><i class="fa fa-search-plus"></i></a>
                        </div>
                        <div class="portfolio-title">
                          <h4><?php echo esc_html(get_theme_mod('project2_title',__('','freelancer-agency'))); ?></h4>
                        </div>
                        <div class="portfolio-detail">
	                        <a href="#" class="modal-close-btn"><span class="fa fa-times"></span></a>
	                        <img src="<?php echo esc_url(get_theme_mod('project2_image-big',get_template_directory_uri() . '/assets/images/portfolio-img-big2.jpg')); ?>" alt="img-2" />
	                        <h2><?php echo esc_html(get_theme_mod('project2_title',__('','freelancer-agency'))); ?></h2>
	                        <p><?php echo esc_html(get_theme_mod('project2_desc',__('','freelancer-agency'))); ?></p>
                        </div>
                     </div>
                   </div>
                 </div>
                 <div class="single-portfolio">
                   <div class="single-item">
                     <img src="<?php echo esc_url(get_theme_mod('project3_image-small',get_template_directory_uri() . '/assets/images/portfolio-img-small3.jpg')); ?>" alt="img">
                     <div class="single-item-content">
                        <div class="portfolio-social-icon">
                           <a class="view-btn" href="#"><i class="fa fa-search-plus"></i></a>
                        </div>
                        <div class="portfolio-title">
                          <h4><?php echo esc_html(get_theme_mod('project3_title',__('','freelancer-agency'))); ?></h4>
                        </div>
                         <div class="portfolio-detail">
	                        <a href="#" class="modal-close-btn"><span class="fa fa-times"></span></a>
	                        <img src="<?php echo esc_url(get_theme_mod('project3_image-big',get_template_directory_uri() . '/assets/images/portfolio-img-big3.jpg')); ?>" alt="img-2" />
	                        <h2><?php echo esc_html(get_theme_mod('project3_title',__('','freelancer-agency'))); ?></h2>
	                        <p><?php echo esc_html(get_theme_mod('project3_desc',__('','freelancer-agency'))); ?></p>
                        </div>
                     </div>
                   </div>
                 </div>
                 <div class="single-portfolio">
                   <div class="single-item">
                     <img src="<?php echo esc_url(get_theme_mod('project4_image-small',get_template_directory_uri() . '/assets/images/portfolio-img-small4.jpg')); ?>" alt="img">
                     <div class="single-item-content">
                        <div class="portfolio-social-icon">
                          <a class="view-btn" href="#"><i class="fa fa-search-plus"></i></a>
                        </div>
                        <div class="portfolio-title">
                          <h4><?php echo esc_html(get_theme_mod('project4_title',__('','freelancer-agency'))); ?></h4>
                        </div>
                        <div class="portfolio-detail">
	                        <a href="#" class="modal-close-btn"><span class="fa fa-times"></span></a>
	                        <img src="<?php echo esc_url(get_theme_mod('project4_image-big',get_template_directory_uri() . '/assets/images/portfolio-img-big4.jpg')); ?>" alt="img-2" />
	                        <h2><?php echo esc_html(get_theme_mod('project4_title',__('','freelancer-agency'))); ?></h2>
	                        <p><?php echo esc_html(get_theme_mod('project4_desc',__('','freelancer-agency'))); ?></p>
                        </div>
                     </div>
                   </div>
                 </div>
                 <div class="single-portfolio">
                   <div class="single-item">
                     <img src="<?php echo esc_url(get_theme_mod('project5_image-small',get_template_directory_uri() . '/assets/images/portfolio-img-small5.jpg')); ?>" alt="img">
                     <div class="single-item-content">
                        <div class="portfolio-social-icon">
                          <a class="view-btn" href="#"><i class="fa fa-search-plus"></i></a>
                        </div>
                        <div class="portfolio-title">
                          <h4><?php echo esc_html(get_theme_mod('project5_title',__('','freelancer-agency'))); ?></h4>
                        </div>
                        <div class="portfolio-detail">
	                        <a href="#" class="modal-close-btn"><span class="fa fa-times"></span></a>
	                        <img src="<?php echo esc_url(get_theme_mod('project5_image-big',get_template_directory_uri() . '/assets/images/portfolio-img-big5.jpg')); ?>" alt="img-5" />
	                        <h2><?php echo esc_html(get_theme_mod('project5_title',__('','freelancer-agency'))); ?></h2>
	                        <p><?php echo esc_html(get_theme_mod('project5_desc',__('','freelancer-agency'))); ?></p>
                        </div>
                     </div>
                   </div>
                 </div>
                 <div class="single-portfolio">
                   <div class="single-item">
                     <img src="<?php echo esc_url(get_theme_mod('project6_image-small',get_template_directory_uri() . '/assets/images/portfolio-img-small6.jpg')); ?>" alt="img">
                     <div class="single-item-content">
                        <div class="portfolio-social-icon">
                          <a class="view-btn" href="#"><i class="fa fa-search-plus"></i></a>
                        </div>
                        <div class="portfolio-title">
                          <h4><?php echo esc_html(get_theme_mod('project6_title',__('','freelancer-agency'))); ?></h4>
                        </div>
                         <div class="portfolio-detail">
	                        <a href="#" class="modal-close-btn"><span class="fa fa-times"></span></a>
	                        <img src="<?php echo esc_url(get_theme_mod('project6_image-big',get_template_directory_uri() . '/assets/images/portfolio-img-big6.jpg')); ?>" alt="img-2" />
	                        <h2><?php echo esc_html(get_theme_mod('project6_title',__('','freelancer-agency'))); ?></h2>
	                        <p><?php echo esc_html(get_theme_mod('project6_desc',__('','freelancer-agency'))); ?></p>
                        </div>
                     </div>
                   </div>
                 </div>
                 <div class="single-portfolio">
                   <div class="single-item">
                     <img src="<?php echo esc_url(get_theme_mod('project7_image-small',get_template_directory_uri() . '/assets/images/portfolio-img-small7.jpg')); ?>" alt="img">
                     <div class="single-item-content">
                        <div class="portfolio-social-icon">
                         <a class="view-btn" href="#"><i class="fa fa-search-plus"></i></a>
                        </div>
                        <div class="portfolio-title">
                          <h4><?php echo esc_html(get_theme_mod('project7_title',__('','freelancer-agency'))); ?></h4>
                        </div>
                         <div class="portfolio-detail">
	                        <a href="#" class="modal-close-btn"><span class="fa fa-times"></span></a>
	                        <img src="<?php echo esc_url(get_theme_mod('project7_image-big',get_template_directory_uri() . '/assets/images/portfolio-img-big7.jpg')); ?>" alt="img-2" />
	                        <h2><?php echo esc_html(get_theme_mod('project7_title',__('','freelancer-agency'))); ?></h2>
	                        <p><?php echo esc_html(get_theme_mod('project7_desc',__('','freelancer-agency'))); ?></p>
                        </div>
                     </div>
                   </div>
                 </div>
                 <div class="single-portfolio">
                   <div class="single-item">
                     <img src="<?php echo esc_url(get_theme_mod('project8_image-small',get_template_directory_uri() . '/assets/images/portfolio-img-small7.jpg')); ?>" alt="img">
                     <div class="single-item-content">
                        <div class="portfolio-social-icon">
                           <a class="view-btn" href="#"><i class="fa fa-search-plus"></i></a>
                        </div>
                        <div class="portfolio-title">
                          <h4><?php echo esc_html(get_theme_mod('project8_title',__('','freelancer-agency'))); ?></h4>
                        </div>
                         <div class="portfolio-detail">
	                        <a href="#" class="modal-close-btn"><span class="fa fa-times"></span></a>
	                        <img src="<?php echo esc_url(get_theme_mod('project8_image-big',get_template_directory_uri() . '/assets/images/portfolio-img-big7.jpg')); ?>" alt="img-1" />
	                        <h2><?php echo esc_html(get_theme_mod('project8_title',__('','freelancer-agency'))); ?></h2>
	                        <p><?php echo esc_html(get_theme_mod('project8_desc',__('','freelancer-agency'))); ?></p>
                        </div>
                     </div>
                   </div>
                 </div>
               </div>      
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Portfolio section -->

  <!-- Start counter section -->
  <section id="counter">
    <img src="<?php echo esc_url(get_theme_mod('counter_image',get_template_directory_uri() . '/assets/images/counter-bg.jpg')); ?>" alt="img">
    <div class="counter-overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <!-- Start counter area -->
            <div class="counter-area">
              <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="single-counter">
                  <span class="fa fa-users"></span>
                  <div class="counter-count">
                    <span class="counter"><?php echo esc_html(get_theme_mod('happy_clients',__('','freelancer-agency'))); ?></span>
                    <p><?php echo esc_html__('Happy Clients','freelancer-agency'); ?></p>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="single-counter">
                  <span class="fa fa-bus"></span>
                  <div class="counter-count">
                    <span class="counter"><?php echo esc_html(get_theme_mod('project_delivery',__('','freelancer-agency'))); ?></span>
                    <p><?php echo esc_html__('Project delivery','freelancer-agency'); ?></p>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="single-counter">
                  <span class="fa fa-twitter"></span>
                  <div class="counter-count">
                    <span class="counter"><?php echo esc_html(get_theme_mod('followers',__('','freelancer-agency'))); ?></span>
                    <p><?php echo esc_html__('Followers','freelancer-agency'); ?></p>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="single-counter">
                  <span class="fa fa-tasks"></span>
                  <div class="counter-count">
                    <span class="counter"><?php echo esc_html(get_theme_mod('project_done',__('','freelancer-agency'))); ?></span>
                    <p><?php echo esc_html__('Project done','freelancer-agency'); ?></p>
                  </div>
                </div>
              </div>    
            </div>
          </div>
        </div>
      </div>
    </div> 
  </section>
  <!-- End counter section -->

  <!-- Start Pricing Table section -->
  <section id="pricing-table">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="pricing-table-area">
            <div class="title-area">
              <h2 class="tittle"><?php echo esc_html(get_theme_mod('pricetable_title',__('Price Table','freelancer-agency'))); ?></h2>
              <span class="tittle-line"></span>
              <p><?php echo esc_html(get_theme_mod('pricetable_desc',__('','freelancer-agency'))); ?></p>
            </div>
            <!-- service content -->
            <div class="pricing-table-content">
                <ul class="price-table">
                  <li class="wow slideInUp">
                    <div class="single-price">
                      <h4 class="price-header"><?php echo esc_html(get_theme_mod('bprice_title',__('','freelancer-agency'))); ?></h4>
                      <span class="price-amount"><?php echo esc_html(get_theme_mod('bprice_amount',__('','freelancer-agency'))); ?></span>
                      <p><?php echo esc_html(get_theme_mod('bfeature1',__('','freelancer-agency'))); ?></p>
                      <p><?php echo esc_html(get_theme_mod('bfeature2',__('','freelancer-agency'))); ?></p>
                      <p><?php echo esc_html(get_theme_mod('bfeature3',__('','freelancer-agency'))); ?></p>
                      <p><?php echo esc_html(get_theme_mod('bfeature4',__('','freelancer-agency'))); ?></p>
                      <p><?php echo esc_html(get_theme_mod('bfeature5',__('','freelancer-agency'))); ?></p>
                      <p><?php echo esc_html(get_theme_mod('bfeature6',__('','freelancer-agency'))); ?></p>
                      <a data-text="<?php echo esc_html(get_theme_mod('bbutton_title',__('SIGN UP','freelancer-agency'))); ?>" class="button button-default" href="<?php echo esc_url(get_theme_mod('bbutton_url','#')); ?>"><span><?php echo esc_html(get_theme_mod('bbutton_title',__('SIGN UP','freelancer-agency'))); ?></span></a>
                    </div>
                  </li>
                  <li class="wow slideInUp">
                    <div class="single-price standard-price">
                      <h4 class="price-header"><?php echo esc_html(get_theme_mod('sprice_title',__('','freelancer-agency'))); ?></h4>
                      <span class="price-amount"><?php echo esc_html(get_theme_mod('sprice_amount',__('','freelancer-agency'))); ?></span>
                      <p><?php echo esc_html(get_theme_mod('sfeature1',__('','freelancer-agency'))); ?></p>
                      <p><?php echo esc_html(get_theme_mod('sfeature2',__('','freelancer-agency'))); ?></p>
                      <p><?php echo esc_html(get_theme_mod('sfeature3',__('','freelancer-agency'))); ?></p>
                      <p><?php echo esc_html(get_theme_mod('sfeature4',__('','freelancer-agency'))); ?></p>
                      <p><?php echo esc_html(get_theme_mod('sfeature5',__('','freelancer-agency'))); ?></p>
                      <p><?php echo esc_html(get_theme_mod('sfeature6',__('','freelancer-agency'))); ?></p>
                      <a data-text="<?php echo esc_html(get_theme_mod('sbutton_title',__('SIGN UP','freelancer-agency'))); ?>" class="button button-default" href="<?php echo esc_url(get_theme_mod('sbutton_url','#')); ?>"><span><?php echo esc_html(get_theme_mod('sbutton_title',__('SIGN UP','freelancer-agency'))); ?></span></a>
                    </div>
                  </li>
                  <li class="wow slideInUp">
                    <div class="single-price">
                      <h4 class="price-header"><?php echo esc_html(get_theme_mod('aprice_title',__('','freelancer-agency'))); ?></h4>
                      <span class="price-amount"><?php echo esc_html(get_theme_mod('aprice_amount',__('','freelancer-agency'))); ?></span>
                      <p><?php echo esc_html(get_theme_mod('afeature1',__('','freelancer-agency'))); ?></p>
                      <p><?php echo esc_html(get_theme_mod('afeature2',__('','freelancer-agency'))); ?></p>
                      <p><?php echo esc_html(get_theme_mod('afeature3',__('','freelancer-agency'))); ?></p>
                      <p><?php echo esc_html(get_theme_mod('afeature4',__('','freelancer-agency'))); ?></p>
                      <p><?php echo esc_html(get_theme_mod('afeature5',__('','freelancer-agency'))); ?></p>
                      <p><?php echo esc_html(get_theme_mod('afeature6',__('','freelancer-agency'))); ?></p>
                      <a data-text="<?php echo esc_html(get_theme_mod('abutton_title',__('SIGN UP','freelancer-agency'))); ?>" class="button button-default" href="<?php echo esc_url(get_theme_mod('abutton_url','#')); ?>"><span><?php echo esc_html(get_theme_mod('abutton_title',__('SIGN UP','freelancer-agency'))); ?></span></a>
                    </div>
                  </li>
                  <li class="wow slideInUp">
                    <div class="single-price">
                      <h4 class="price-header"><?php echo esc_html(get_theme_mod('mprice_title',__('','freelancer-agency'))); ?></h4>
                      <span class="price-amount"><?php echo esc_html(get_theme_mod('mprice_amount',__('','freelancer-agency'))); ?></span>
                      <p><?php echo esc_html(get_theme_mod('mfeature1',__('','freelancer-agency'))); ?></p>
                      <p><?php echo esc_html(get_theme_mod('mfeature2',__('','freelancer-agency'))); ?></p>
                      <p><?php echo esc_html(get_theme_mod('mfeature3',__('','freelancer-agency'))); ?></p>
                      <p><?php echo esc_html(get_theme_mod('mfeature4',__('','freelancer-agency'))); ?></p>
                      <p><?php echo esc_html(get_theme_mod('mfeature5',__('','freelancer-agency'))); ?></p>
                      <p><?php echo esc_html(get_theme_mod('mfeature6',__('','freelancer-agency'))); ?></p>
                      <a data-text="<?php echo esc_html(get_theme_mod('mbutton_title',__('SIGN UP','freelancer-agency'))); ?>" class="button button-default" href="<?php echo esc_url(get_theme_mod('mbutton_url','#')); ?>"><span><?php echo esc_html(get_theme_mod('mbutton_title',__('SIGN UP','freelancer-agency'))); ?></span></a>
                    </div>
                  </li>
               </ul>     
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Pricing Table section -->

  <!-- Start Testimonial section -->
  <section id="testimonial">
    <img src="<?php echo esc_url(get_theme_mod('testimonial_image',get_template_directory_uri() . '/assets/images/testimonial-bg.jpg')); ?>" alt="img">
    <div class="counter-overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <!-- Start Testimonial area -->
            <div class="testimonial-area">
              <div class="title-area">
                <h2 class="tittle"><?php echo esc_html(get_theme_mod('testimonial_title',__('What People Say About Us','freelancer-agency'))); ?></h2>
                <span class="tittle-line"></span>              
              </div>
              <div class="testimonial-conten">
                <!-- Start testimonial slider -->
                <div class="testimonial-slider">
                  <!-- single slide -->
                  <div class="single-slide">
                    <p><?php echo esc_html(get_theme_mod('slide1_comment',__('','freelancer-agency'))); ?></p>
                    <div class="single-testimonial">
                      <img class="testimonial-thumb" src="<?php echo esc_url(get_theme_mod('slide1_image',get_template_directory_uri() . '/assets/images/testimonial-image1.png')); ?>" alt="img">
                      <p><?php echo esc_html(get_theme_mod('slide1_name',__('','freelancer-agency'))); ?></p>
                      <span><?php echo esc_html(get_theme_mod('slide1_position',__('','freelancer-agency'))); ?></span>
                    </div>
                  </div>
                  <!-- single slide -->
                  <div class="single-slide">
                    <p><?php echo esc_html(get_theme_mod('slide2_comment',__('','freelancer-agency'))); ?></p>
                    <div class="single-testimonial">
                      <img class="testimonial-thumb" src="<?php echo esc_url(get_theme_mod('slide2_image',get_template_directory_uri() . '/assets/images/testimonial-image1.png')); ?>" alt="img">
                      <p><?php echo esc_html(get_theme_mod('slide2_name',__('','freelancer-agency'))); ?></p>
                      <span><?php echo esc_html(get_theme_mod('slide2_position',__('','freelancer-agency'))); ?></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> 
  </section>
  <!-- End Testimonial section -->

  <!-- Start from blog section -->
  <section id="from-blog">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="from-blog-area">
            <div class="title-area">
              <h2 class="tittle"><?php echo esc_html(get_theme_mod('blog_title',__('Our Blog','freelancer-agency'))); ?></h2>
              <span class="tittle-line"></span>
              <p><?php echo esc_html(get_theme_mod('blog_desc',__('','freelancer-agency'))); ?></p>
            </div>
            <!-- From Blog content -->
            <div class="from-blog-content">
              <div class="row">
                <!-- Define our WP Query Parameters -->
                <?php $the_query = new WP_Query( 'showposts=3' ); ?>
                <!-- Start our WP Query -->
                <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
                <div class="col-md-4">
                  <article class="single-from-blog">
                    <figure>
                      <?php the_post_thumbnail('post-thumbnail'); ?>
                    </figure>
                    <div class="blog-title">
                      <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                      <p>Posted by <a class="blog-admin" href="#"><?php the_author(); ?></a> on <span class="blog-date"><?php the_date(); ?></span></p>
                    </div>
                    <p><?php the_excerpt(__('(more&#46;&#46;&#46;)','freelancer-agency')); ?></p>
                    <div class="blog-footer">
                      <a href="#"><span class="fa fa-comment"></span><?php comments_number(); ?></a>
                      <a href="#"><span class="fa fa-thumbs-o-up"></span>35 Likes</a>
                    </div>
                  </article>
                </div>
                <?php 
                  endwhile;
                  wp_reset_postdata();
                ?>
              </div>   
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End from blog section -->

  <section id="client">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="client-area">
            <ul class="client-table">
              <li><img src="<?php echo esc_url(get_theme_mod('client1_image','')); ?>" alt="client logo"></li>
              <li><img src="<?php echo esc_url(get_theme_mod('client2_image','')); ?>" alt="client logo"></li>
              <li><img src="<?php echo esc_url(get_theme_mod('client3_image','')); ?>" alt="client logo"></li>
              <li><img src="<?php echo esc_url(get_theme_mod('client4_image','')); ?>" alt="client logo"></li>
              <li><img src="<?php echo esc_url(get_theme_mod('client5_image','')); ?>" alt="client logo"></li>
              <li><img src="<?php echo esc_url(get_theme_mod('client6_image','')); ?>>" alt="client logo"></li>
              <li><img src="<?php echo esc_url(get_theme_mod('client7_image','')); ?>" alt="client logo"></li>
              <li><img src="<?php echo esc_url(get_theme_mod('client8_image','')); ?>" alt="client logo"></li>
              <li><img src="<?php echo esc_url(get_theme_mod('client9_image','')); ?>" alt="client logo"></li> 
              <li><img src="<?php echo esc_url(get_theme_mod('client10_image','')); ?>" alt="client logo"></li>                  
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Start Contact section -->
  <section id="contact">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="contact-left wow fadeInLeft">
            <h2><?php echo esc_html__('Contact with us','freelancer-agency'); ?></h2>
            <address class="single-address">
              <h4><?php echo esc_html__('Postal address:','freelancer-agency'); ?></h4>
              <p><?php echo esc_html(get_theme_mod('postal_address',__('','freelancer-agency'))); ?></p>
            </address>
             <address class="single-address">
              <h4><?php echo esc_html__('Headquarters:','freelancer-agency'); ?></h4>
              <p><?php echo esc_html(get_theme_mod('headquarters',__('','freelancer-agency'))); ?></p>
            </address>
             <address class="single-address">
              <h4><?php echo esc_html__('Phone','freelancer-agency'); ?></h4>
              <p><?php echo esc_html(get_theme_mod('phone',__('','freelancer-agency'))); ?></p>
            </address>
             <address class="single-address">
              <h4><?php echo esc_html__('E-Mail','freelancer-agency'); ?></h4>
              <p><?php echo esc_html(get_theme_mod('email',__('','freelancer-agency'))); ?></p>
            </address>
          </div>
        </div>
        <div class="col-md-8 col-sm-6 col-xs-12">
          <div class="contact-right wow fadeInRight">
            <h2><?php echo esc_html__('Send a message','freelancer-agency'); ?></h2>
            <?php contact_form(); ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Contact section -->
  <!-- Start Google Map -->
  <section id="google-map">
  <iframe src="<?php echo esc_url(get_theme_mod('google_map','')); ?>" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>  
  </section>
  <!-- End Google Map -->
    <?php get_footer(); ?>