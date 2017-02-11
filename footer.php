 <!-- Start Footer -->    
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="footer-top-area">             
                <a class="footer-logo" href="#"><img src="<?php echo esc_url(get_theme_mod('logo_image','')); ?>" alt="Logo"></a>              
              <div class="footer-social">
                <a class="facebook" href="<?php echo esc_url(get_theme_mod('facebook','#')); ?>"><span class="fa fa-facebook"></span></a>
                <a class="twitter" href="<?php echo esc_url(get_theme_mod('twitter','#')); ?>"><span class="fa fa-twitter"></span></a>
                <a class="google-plus" href="<?php echo esc_url(get_theme_mod('google-plus','#')); ?>"><span class="fa fa-google-plus"></span></a>
                <a class="youtube" href="<?php echo esc_url(get_theme_mod('youtube','#')); ?>"><span class="fa fa-youtube"></span></a>
                <a class="linkedin" href="<?php echo esc_url(get_theme_mod('linkedin','#')); ?>"><span class="fa fa-linkedin"></span></a>
                <a class="dribbble" href="<?php echo esc_url(get_theme_mod('dribbble','#')); ?>"><span class="fa fa-dribbble"></span></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <p><?php if (wp_kses_post(get_theme_mod('copyright','')) != '') { ?>
    <span class="copyright"><?php echo wp_kses_post(get_theme_mod('copyright',__('','freelancer-agency'))); ?></span> 
      <?php } else { ?>
                    <a href="<?php echo esc_url('http://www.code-tutors.com'); ?>"><?php _e('Freelancer Agency Theme', 'freelancer-agency'); ?></a> <?php _e('Powered By ', 'freelancer-agency'); ?><a href="http://www.wordpress.org"><?php _e(' WordPress', 'freelancer-agency'); ?></a>
          <?php } ?></p>
    </div>
  </footer>
  <!-- End Footer -->
  <?php wp_footer();?>
    
  </body>
</html>