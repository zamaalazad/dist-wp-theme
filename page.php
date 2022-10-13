<?php get_header(); ?>

<article class="single-post">
  
  <?php 
    while( have_posts() ): the_post(); 
  ?>

  <div class="post__single">
    <div class="left">
      <h1 class="post--title__single">
        <?php the_title(); ?>
      </h1>

    </div> <!-- End Left -->

    <div class="post--content__single">

      <?php the_content(); ?>
        
    </div>
  </div> <!-- Post End Here -->

  <?php endwhile; ?>


</article> <!-- Main Single Goes Here -->



<?php get_footer(); ?>