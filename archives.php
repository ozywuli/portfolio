<?php
/*
Template Name: Archives
*/
get_header(); ?>

<header class="page-header">
  <h2 class="h2 page-title grid">Archives</h2>
</header>

<div class="posts-container archives-container">

  <ul class="archives-list grid">
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

      <a href="<?php the_permalink(); ?>" class="clearfix archives-link">
        <time class="archives-post-date"><?php echo the_date( 'd M Y' ) ?></time>
        <span class="archives-post-cat">
        <?php
          foreach( (get_the_category() ) as $category) {
            echo $category->cat_name . ' ';
          }
        ?>
        </span>
        <h3 class="h3 archives-post-title"><?php the_title() ?></h3>
      </a>

    </li>

  <?php endwhile; ?>

  <?php else :

  echo 'Sorry, no results founds.';

  endif;

  wp_reset_postdata();

  ?>
  </ul>


</div>

<?php get_footer(); ?>