<?php get_header(); ?>

<header class="page-header">
  <h2 class="h2 page-title">BLOG</h2>
</header>

<section class="posts-container grid">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article class="posts clearfix">
      <div class="post-content">
        <h3 class="h3 list-posts-title"><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
        <?php the_excerpt(); ?>
      </div>
      <div class="post-meta clearfix">
        <time datetime="<?php the_time('d/m/Y') ?>" pubdate="pubdate"><?php the_time('d M Y') ?></time>
        <div class="post-comments"> <a href="<?php the_permalink(); ?>"><?php comments_number( 'Leave a comment', '1 comment', '% comments'); ?></a></div>
      </div>
    </article>
    <?php endwhile; else: ?>
      <p><?php _e( 'Sorry, no posts match your criteria.' ); ?></p>
  <?php endif; ?>
</section>


<?php get_footer(); ?>