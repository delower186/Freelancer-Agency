
          <form action="<?php echo esc_url(home_url('/blog')); ?>" method="GET">
            <input id="search" name="s" type="text" placeholder="What're you looking for ?" value="<?php the_search_query(); ?>">
            <input id="search_submit" value="Rechercher" type="submit">
          </form>
