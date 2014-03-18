<?php

/*
	Template Name: Home

*/ 

get_header();  ?>

    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
      <div class="content">
   
        <?php the_content(); ?>
      </div>  <!-- content -->

      <div class="info-bar">
        <p>Graphic Designer / Artist / Illustrator.  Living, working, being a human in Toronto.</p>
      </div> <!-- info-bar -->


    <?php endwhile; // end the loop?>



<?php get_footer(); ?>