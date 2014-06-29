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

      <div id="portfolio-grid" class="clearfix">
        <?php query_posts( 'post_type=portfolio&portfolio_category=featured'); ?>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class=" <?php $customPostTaxonomies = get_object_taxonomies('portfolio');
          $terms = get_the_terms( $post->ID , $customPostTaxonomies[0] );

          foreach ( $terms as $term ) {

          echo $term->name. ' ';

          } ?>">

          <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">
            <?php if(has_post_thumbnail()) {
            $image_src = wp_get_attachment_image_src( get_post_thumbnail_id(),'full' );
            echo '<img src="' . $image_src[0]  . '" width="100%"  />';
            }  ?>

          <div class="hover-background"></div>
          <div class="hover-title"><?php the_title(); ?></div>

          </a>
        </div>

      <?php endwhile; else: ?>
          <p><?php _e( 'Sorry, no posts match your criteria.' ); ?></p>
      <?php endif; ?>


      </div>

    </div>
  </section>

  <!-- Process Summary -->
  <section class="frontpage-process section-block">
    <div class="grid">
      <h3 class="h3">PROCESS</h3>
      <div class="processes">
        <section class="process-block">
          <h4 class="h4">RESEARCH</h4>
          <p></p>
        </section>
        <section class="process-block">
          <h4 class="h4">BUILD</h4>
          <p></p>
        </section>
        <section class="process-block">
          <h4 class="h4">TEST</h4>
          <p></p>
        </section>
        <section class="process-block">
          <h4 class="h4">ITERATE</h4>
          <p></p>
        </section>
      </div>
      <p>Interested in working with me?</p>
      <a href="#">Contact Me Now!</a>
    </div>
  </section>


<?php get_footer(); ?>