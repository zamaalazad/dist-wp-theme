<?php get_header(); ?>

<?php while( have_posts() ): the_post(); ?>

<article class="article-post">

  <div class="post__article">
      
    <div class="post--meta__article">

        <h1 class="post--title__article">
            <?php the_title(); ?>
        </h1>

        <p class="article__date">
            <?php the_time('d.m.Y'); ?>
        </p>
        
    </div>

    <div class="post--content__article">

        <?php the_content(); ?>

    </div>
  </div> <!-- Post End Here -->

</article> <!-- Main Single Article End Here -->

<?php endwhile; ?>


<?php get_footer(); ?>