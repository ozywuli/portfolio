<?php
/*
Template Name: Archives
*/
get_header(); ?>

<section class="posts-container archive-container">
  <h2>Archive</h2>

<ul class="archive-list">
<?php

// List by Month/Day
$args = array(
  'post_type' => 'post',
  'posts_per_page' => 1000,
);


$the_query = new WP_Query( $args );
if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();

?>


  <li>
    <a href="<?php the_permalink(); ?>" class="clearfix">
      <span class="archive-post-date"><?php echo the_date( 'Y M d' ) ?></span>
      <span class="archive-post-title"><?php the_title() ?></span>
    </a>
  </li>

<?php endwhile; ?>

<?php else :

echo 'Sorry, no results founds.';

endif;

wp_reset_postdata();

?>
</ul>


</section>

<?php get_footer(); ?>