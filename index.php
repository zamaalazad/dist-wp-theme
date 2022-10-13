<?php get_header(); ?>

<article class="main-post">
  
  <?php while( have_posts() ): the_post(); ?>

  <div class="post wow animate__animated animate__fadeInUp">
    <a href="<?php the_permalink(); ?>" class="post--title__main">
      <h1><?php the_title(); ?></h1>
    </a>
    <div class="post--meta__main">
      <ul>
        <li><?php the_time('d.m.Y'); ?></li>
        <li><?php the_category(','); ?></li>
      </ul>
    </div>
  </div> <!-- Post End Here -->

  <?php endwhile; ?>
  
</article>

<?php get_footer(); ?>
