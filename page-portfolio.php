<?php
/* Template Name: Portfolio */
get_header();
?>

<!-- Page Title -->
<header class="page-header">
  <h2 class="h2 page-title grid">Portfolio</h2>
</header>

<div class="portfolio-container">


<div id="filter" class="grid clearfix">
  <a href="#" data-filter="*" class="current">All</a>
  <a href="#" data-filter=".clients">Clients</a>
  <a href="#" data-filter=".wordpress">Wordpress</a>
  <a href="#" data-filter=".tumblr">Tumblr</a>
  <a href="#" data-filter=".personal">Personal</a>
</div>

<div id="portfolio-grid" class="clearfix">
  <?php query_posts( 'post_type=portfolio'); ?>
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



<?php get_footer(); ?>