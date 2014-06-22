<?php get_header(); ?>

<header class="page-header">
  <h2 class="h2 page-title grid">Blog</h2>
</header>

<section class="grid">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <article class="one-post clearfix">
    <header class="one-post-title">
      <h3 class="h3"><?php the_title(); ?></h3>
    </header>
    <div class="one-post-meta clearfix">
      <time datetime="<?php the_time('d/m/Y') ?>" pubdate="pubdate"><?php the_time('d M Y') ?></time>
      <div class="post-comments"> <a href="<?php the_permalink(); ?>"><?php comments_number( 'Leave a comment', '1 comment', '% comments'); ?></a></div>
    </div>
    <div class="one-post-content">
      <?php the_content(); ?>
    </div>
  </article>

  <nav class="one-post-pagination">
    <ul class="clearfix">
      <?php previous_post_link('<li>%link</li>', '&lt' . ' ' . 'Previous Post'); ?>
      <?php next_post_link('<li>%link</li>', 'Next Post' . ' ' . '&gt'); ?>
    </ul>
  </nav>

  <div class="one-post-comments">
    <?php comments_template(); ?>
  </div>


  <?php endwhile; else: ?>
    <p><?php _e( 'Sorry, no posts match your criteria.' ); ?></p>
<?php endif; ?>
</section>

<?php get_footer(); ?>