  <?php get_header('blog'); ?>
    <!-- Start blog banner section -->
  <section id="blog-banner">
    <img src="<?php echo esc_url(get_theme_mod('blogbanner_image',get_template_directory_uri() . '/assets/images/blog-banner.jpg')); ?>" alt="img">
    <div class="blog-overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="blog-banner-area">
              <h2><?php the_title(); ?></h2>
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
                <div class="blog-left blog-details" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <?php while ( have_posts() ) : the_post(); ?>
                  <!-- Start single blog post -->
                  <article class="single-from-blog">                    
                    <div class="blog-title">
                      <h2><?php the_title(); ?></h2>
                      <p>Posted by <a href="#" class="blog-admin"><?php the_author(); ?></a> on <span class="blog-date"><?php the_date(); ?></span></p>
                    </div>
                    <figure>
                      <?php the_post_thumbnail('post-thumbnail'); ?>
                    </figure>
                   <div class="blog-details-content">
                      <?php the_content(); ?>
                      <?php the_tags(); ?> 
                      <?php wp_link_pages(); ?>
                   </div>         
                  </article>
                  <?php endwhile;?>
                  <div class="blog-comment">
                    <?php comments_template(); ?>
                  </div>
                  <!-- End single blog post -->                  
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