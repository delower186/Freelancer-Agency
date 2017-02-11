<?php get_header('blog'); ?>
  <!-- Start blog banner section -->
  <section id="blog-banner">
    <img src="<?php echo esc_url(get_theme_mod('blogbanner_image',get_template_directory_uri() . '/assets/images/blog-banner.jpg')); ?>" alt="img">
    <div class="blog-overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="blog-banner-area">
              <h2><?php printf( __( 'Category: %s','freelancer-agency' ), '<span>' . single_cat_title( '', false ) . '</span>' ); ?></h2>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End blog banner section -->
  <!-- Start blog section -->
  <section id="blog">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="blog-area">
            <div class="row">
              <div class="col-lg-8 col-md-7 col-sm-12">
                <div class="blog-left blog-archive">
                    <?php
                    /*
                      $args = array();
                      if (isset($_POST['cat'])){
                        $cat = $_POST['cat'];
                        $args = array('cat'=>$cat);
                        query_posts( $args );
                      }
                      */
                    ?>
                     <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                  <!-- Start single blog post -->
                  <article class="single-from-blog">
                    <figure>
                      <?php the_post_thumbnail('post-thumbnail'); ?>
                    </figure>
                    <div class="blog-title">
                      <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                      <p>Posted by <a href="#" class="blog-admin"><?php the_author(); ?></a> on <span class="blog-date"><?php the_date(); ?></span></p>
                    </div>
                    <p><?php the_excerpt(); ?></p>
                    <div class="blog-footer">
                      <a href="#"><span class="fa fa-comment"></span><?php comments_number(); ?></a>
                      <a href="#"><span class="fa fa-thumbs-o-up"></span>35 Likes</a>
                    </div>
                  </article>
                  <!-- End single blog post -->
                  <?php endwhile; endif; ?>
                  <!--Start Blog pagination -->
                  <nav>
                    <?php freelancer_agency_posts_pagination(); ?>
                  </nav>
                  <!-- End blog pagination -->
                </div>
              </div>
              <?php get_sidebar(); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End blog section -->

  <?php get_footer(); ?>