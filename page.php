<?php get_header(); ?>

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article class="page-container clearfix">
      <header class="page-title-container">
        <h2 class="h2 page-title"><?php the_title(); ?></h2>
      </header>

      <div class="page-content">
        <?php the_content(); ?>
      </div>
    </article>



    <?php endwhile; else: ?>
      <p><?php _e( 'Sorry, no posts match your criteria.' ); ?></p>
  <?php endif; ?>

<?php get_footer(); ?>