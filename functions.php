<?php
//not found any result
function freelancer_agency_search_return_nothing(){
	if (!have_posts()): 
		echo '<div class="jumbotron alert-danger">
  				<p>'.esc_html__('Sorry, you search did not match any posts, please try again!','freelancer-agency').'</p>
  			 </div>';
	endif;
}
//the comment-reply script enqueue
if ( is_singular() ) wp_enqueue_script( "comment-reply" );
//content width
if ( ! isset( $content_width ) ) $content_width = 900;
//title tag support
function freelancer_agency_setup() {
   add_theme_support('title-tag');
   add_theme_support('custom-header');
   add_theme_support('custom-background');
   add_theme_support('custom-logo',array('height'=> 100,'width'=> 85));
   add_theme_support('post-thumbnails');
   add_theme_support('automatic-feed-links');
   set_post_thumbnail_size( 370, 250, true ); 
}
add_action( 'after_setup_theme', 'freelancer_agency_setup' );
//sidebar widgets
function freelancer_agency_widgets_init() {

	register_sidebar( array(
		'name' => __( 'Main Sidebar', 'freelancer-agency' ),
		'id' => 'blog-sidebar',
		'description' => __( 'The main sidebar appears on the right on each page except the front page template', 'freelancer-agency' ),
		'before_widget' => '<div class="single-widget">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>'
	) );
	}

add_action( 'widgets_init', 'freelancer_agency_widgets_init' );
// Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');
//register navigation menu
register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'freelancer-agency' ),
    'blogMenu' => __( 'Blog Menu', 'freelancer-agency' )
) );
//numaric pagination
function freelancer_agency_posts_pagination() {

	if( is_singular() )
		return;

	global $wp_query;

	/** Stop execution if there's only 1 page */
	if( $wp_query->max_num_pages <= 1 )
		return;

	$paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
	$max   = intval( $wp_query->max_num_pages );

	/**	Add current page to the array */
	if ( $paged >= 1 )
		$links[] = $paged;

	/**	Add the pages around the current page to the array */
	if ( $paged >= 3 ) {
		$links[] = $paged - 1;
		$links[] = $paged - 2;
	}

	if ( ( $paged + 2 ) <= $max ) {
		$links[] = $paged + 2;
		$links[] = $paged + 1;
	}

	echo '<ul class="pagination blog-pagination">' . "\n";

	/**	Previous Post Link */
	if ( get_previous_posts_link() )
		printf( '<li>%s</li>' . "\n", get_previous_posts_link() );

	/**	Link to first page, plus ellipses if necessary */
	if ( ! in_array( 1, $links ) ) {
		$class = 1 == $paged ? ' class="active"' : '';

		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );

		if ( ! in_array( 2, $links ) )
			echo '<li></li>' . "\n";
	}

	/**	Link to current page, plus 2 pages in either direction if necessary */
	sort( $links );
	foreach ( (array) $links as $link ) {
		$class = $paged == $link ? ' class="active"' : '';
		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
	}

	/**	Link to last page, plus ellipses if necessary */
	if ( ! in_array( $max, $links ) ) {
		if ( ! in_array( $max - 1, $links ) )
			echo '<li></li>';

		$class = $paged == $max ? ' class="active"' : '';
		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
	}

	/**	Next Post Link */
	if ( get_next_posts_link() )
		printf( '<li>%s</li>' . "\n", get_next_posts_link() );

	echo '</ul>' . "\n";

}
//------------------------------------------------pagination ends----------------------------------------------------------------
// enqueue scripts
function freelancer_agency_adding_scripts(){

	//font_awesome 
	wp_enqueue_style('font_awesome',get_template_directory_uri() .'/assets/css/font-awesome.css',array(), null, 'all');
	//bootstrap
	wp_enqueue_style('bootstrap',get_template_directory_uri() .'/assets/css/bootstrap.min.css',array(), null, 'all');
	//slick
	wp_enqueue_style('slick',get_template_directory_uri() .'/assets/css/slick.css',array(), null, 'all');
	//animate
	wp_enqueue_style('animate',get_template_directory_uri() .'/assets/css/animate.css',array(), null, 'all');
	//default
	wp_enqueue_style('default',get_template_directory_uri() .'/assets/css/theme-color/default.css',array(), null, 'all');
		//style sheet
	wp_enqueue_style('style_sheet',get_template_directory_uri() .'/style.css',array(), null, 'all');
	//open_sans
	wp_enqueue_style('open_sans','https://fonts.googleapis.com/css?family=Open+Sans',array(), null, 'all');
	//raleway
	wp_enqueue_style('raleway','https://fonts.googleapis.com/css?family=Raleway',array(), null, 'all');
	//pacifico
	wp_enqueue_style('pacifico','https://fonts.googleapis.com/css?family=Pacifico',array(), null, 'all');
	//wordpress
	wp_enqueue_style('wordpress',get_template_directory_uri() .'/assets/css/wordpress.css',array(), null, 'all'); 


	//Bootstrap
	wp_enqueue_script('bootstrap',get_template_directory_uri() .'/assets/js/bootstrap.min.js',array('jquery'),null,true);

	//Slick Slider
	wp_enqueue_script('slick_slider',get_template_directory_uri() .'/assets/js/slick.js',array('jquery'),null,true);

	//view point
	wp_enqueue_script('view_point',get_template_directory_uri() .'/assets/js/waypoints.js',array('jquery'),null,true);

	//Counter
	wp_enqueue_script('counter',get_template_directory_uri() .'/assets/js/jquery.counterup.js',array('jquery'),null,true);

	//Wow animation
	wp_enqueue_script('wow_animation',get_template_directory_uri() .'/assets/js/wow.js',array('jquery'),null,true);

	//Custom js
	wp_enqueue_script('custom',get_template_directory_uri() .'/assets/js/custom.js',array('jquery'),null,true);

}

add_action('wp_enqueue_scripts','freelancer_agency_adding_scripts');

function freelancer_agency_comment_form_styling(){
	 //comment form styling
	?>
	  <script type="text/javascript">
	   jQuery(document).ready(function($) {
	      //textarea
	      $('.comment-form-comment').addClass('form-group'); 
	      $('#comment').addClass('form-control');
	      //Name
	      $('.comment-form-author').addClass('form-group'); 
	      $('#author').addClass('form-control'); 
	      //Email
	      $('.comment-form-email').addClass('form-group'); 
	      $('#email').addClass('form-control'); 
	      //Website
	      $('.comment-form-url').addClass('form-group'); 
	      $('#url').addClass('form-control'); 
	      //submit button
	      $('.submit').replaceWith('<button class="button button-default" data-text="Comment" type="submit" name="submit" id="submit"><span>Comment</span></button>');      
	  });
	 </script>
	 <?php
}

add_action('wp_footer','freelancer_agency_comment_form_styling');

//theme customizer
require_once(dirname(__FILE__) . '/theme_customizer.php');
require_once(dirname(__FILE__) . '/contact.php');