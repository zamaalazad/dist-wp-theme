<!-- Related Posts  -->
  
<div class="recent__post">

<h1>সাম্প্রতিক পোস্ট</h1>
<ul class="recent__post--link">
<?php 
$posts_related = new WP_Query(array(
  'post_type'     => 'post',
  'posts_per_page' => 6,
));
while( $posts_related->have_posts() ): $posts_related->the_post(); 
//if( $post->ID == $do_not_duplicate ) continue; ?>

<li>
  <a href="<?php the_permalink(); ?>">
    <?php the_title(); ?>
  </a>
  <p><?php the_time('d.m.Y'); ?></p>
</li>

<?php endwhile; wp_reset_postdata(); ?>
</ul>

</div>