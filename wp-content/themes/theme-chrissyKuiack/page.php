<?php get_header();  ?>

<div class="section">
  <div class="innerWrapper">
    <div class="left">
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        
        <?php the_content(); ?>
        <form class="contact"><?php  ?></form>

      <?php endwhile; // end the loop?>
    </div>
    <?php get_sidebar(); ?>
  </div> <!-- /.innerWrapper -->
</div> <!-- /.section -->
<?php get_footer(); ?>