<?php

/*
	Template Name: About

*/ 

get_header();  ?>

    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
      <div class="content4contact">
  
        <?php the_content(); ?>
      </div>  <!-- content -->

    <?php endwhile; // end the loop?>



<?php get_footer(); ?>