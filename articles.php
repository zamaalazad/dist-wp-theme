<?php 
  //template name: Articles
 get_header(); 
?>

<article class="post-works">
  
  <?php 
    $articles_post = new WP_Query( array(
      'post_type'     => 'article',
      'posts_per_page'=>  -1,  
    ) ); 
    while( $articles_post->have_posts() ): $articles_post->the_post(); 
  ?>

  <div class="post--content__works wow animate__animated animate__fadeInUp" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');">
    <a href="<?php the_permalink(); ?>" class="post--title__works">
      <h1><?php the_title(); ?></h1>
    </a>
    <p class="works__category">
      <?php the_terms( $post->ID, 'articles_category' ); ?>
    </p>
  </div> <!-- Post End Here -->

  <?php endwhile; ?>

  
</article>

<?php get_footer(); ?>