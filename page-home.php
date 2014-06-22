<?php get_header(); ?>


  <!-- Landing Page -->
  <section class="frontpage-intro section-block">
    <div class="grid">
      <h2 class="h2 frontpage-greetings">Hello! I'm Ozy.</h2>
      <h2 class="h2 frontpage-tagline">
        <span class="frontpage-tagline-first">WEB DEVELOPER</span>
        <span class="frontpage-tagline-second">UI DESIGNER</span>
      </h2>
    </div>
  </section>

  <!-- Featured Work -->
  <section class="frontpage-work section-block">
    <div class="grid">
      <h3 class="h3">FEATURED WORK</h3>
    </div>
  </section>

  <!-- Process Summary -->
  <section class="frontpage-process section-block">
    <div class="grid">
      <h3 class="h3">PROCESS</h3>
      <div class="processes">
        <section class="process-block">RESEARCH</section>
        <section class="process-block">BUILD</section>
        <section class="process-block">TEST</section>
        <section class="process-block">ITERATE</section>
      </div>
      <p>Interested in working with me?</p>
      <a href="#">Contact Me Now!</a>
    </div>
  </section>

<!--   <div class="frontpage-services section-block">
    <div class="grid">
      <h3 class="h3">SERVICES</h3>
      <div class="services-block">
        <h4 class="h4">Development</h4>
      </div>
      <div class="services-block">
        <h4 class="h4">Design</h4>
      </div>
      <div class="services-block">
        <h4 class="h4">Themes</h4>
      </div>
    </div>
  </div>
 -->


  <!-- Latest Blog Posts -->
  <section class="frontpage-blog section-block">
    <div class="grid">
      <h3 class="h3">RECENT BLOG POSTS</h3>

<!-- Latest Post -->
<div class="latest-post">

<?php
query_posts("showposts=1");
if ( have_posts() ) : while ( have_posts() ) : the_post();
?>
<article class="">
  <div class="">
    <h3 class="h3"><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
  </div>

  <div class="">
    <time datetime="<?php the_time('d/m/Y') ?>" pubdate="pubdate"><?php the_time('d M Y') ?></time>
    <div class="post-comments"> <a href="<?php the_permalink(); ?>"><?php comments_number( 'Leave a comment', '1 comment', '% comments'); ?></a></div>
  </div>

  <?php the_excerpt(); ?>

</article>

    <?php endwhile; else: ?>

<?php endif; ?>

</div>


<!-- Other Recent Posts -->
<div class="recent-posts">
<?php
query_posts('posts_per_page=3&offset=1');
if ( have_posts() ) : while ( have_posts() ) : the_post();
?>

<ul>
    <li>

      <a href="<?php the_permalink(); ?>" class="clearfix archives-link">
        <time><?php echo the_date( 'd M Y' ) ?></time>
        <span>
        <?php
          foreach( (get_the_category() ) as $category) {
            echo $category->cat_name . ' ';
          }
        ?>
        </span>
        <h3 class="h3"><?php the_title() ?></h3>
      </a>

    </li>
</ul>

    <?php endwhile; else: ?>

<?php endif; ?>
</div>

    </div>
  </section>






<?php get_footer(); ?>