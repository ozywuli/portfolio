<?php get_header(); ?>

<header class="page-header">
  <h2 class="h2 page-title grid">Portfolio</h2>
</header>

<section class="grid">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <article class="portfolio-item clearfix">
    <header class="portfolio-title">
      <h3 class="h3"><?php the_title(); ?></h3>
    </header>

    <nav class="portfolio-pagination clearfix">
      <?php previous_post_link('<div>%link</div>', '&lt' . ' ' . 'Previous Post'); ?>
      <?php next_post_link('<div>%link</div>', 'Next Post' . ' ' . '&gt'); ?>
      <div>
        <a href="index.php?page_id=39">Portfolio</a>
      </div>
    </nav>

<?php
 if ( has_post_thumbnail() ) : the_post_thumbnail('post-thumb');
 endif;
?>

    <div class="portfolio-content">
      <?php the_content(); ?>
    </div>
  </article>

  <?php endwhile; else: ?>
    <p><?php _e( 'Sorry, no posts match your criteria.' ); ?></p>
<?php endif; ?>
</section>

<?php get_footer(); ?>