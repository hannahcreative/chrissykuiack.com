<?php

/*
	Template Name: Work/Sketches

*/ 

get_header();  ?>

    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
      <div class="content">
   
        <?php the_content(); ?>
      </div>  <!-- content -->

 


    <?php endwhile; // end the loop?>



<?php get_footer(); ?>