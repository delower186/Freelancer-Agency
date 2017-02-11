<?php
if ( ! is_active_sidebar('blog-sidebar') ) {
	return;
}
?>
</aside><!-- #secondary -->
<div class="col-lg-4 col-md-5 col-sm-12">
 	<aside class="blog-right">
	<?php dynamic_sidebar('blog-sidebar'); ?>
	</aside>
</div>

