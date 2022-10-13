<?php get_header(); ?>

<article class="single-post">
  
  <?php 
    while( have_posts() ): the_post(); 
    //$do_not_duplicate = $post->ID;
  ?>

  <div class="post__single">
    <div class="left">
        <h1 class="post--title__single">
          <?php the_title(); ?>
        </h1>

      <div class="post--meta__single">
        <ul>
          <li><?php the_time('d.m.Y'); ?></li>
          <li><?php the_category(','); ?></li>
        </ul>
        <ul>
          <li class="author__image">
            <?php echo get_avatar(get_the_author_meta('ID')); ?>
          </li>
          <li class="author_title">
            <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
              <?php the_author();  //echo get_the_author_meta('nickname'); ?>
            </a>
          </li>
        </ul>
      </div>    

      <div class="post--content__single">

        <?php the_content(); ?>
          
      </div>
    </div> <!-- End Left -->

    <?php endwhile; ?>

    <?php get_sidebar(); ?>
    
  </div> <!-- Post End Here -->  

</article> <!-- Main Single Goes Here -->



<?php get_footer(); ?>