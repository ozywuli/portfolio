<?php





// Enqueue Jquery

if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
function my_jquery_enqueue() {
   wp_deregister_script('jquery');
   wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js", false, null);
   wp_enqueue_script('jquery');
}



// Enqueue CSS and JS

function theme_name_scripts() {
  wp_enqueue_style( 'style-name', get_template_directory_uri().'/css/screen.css' );
  wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/isotope.min.js', array(), '1.0.0', true );
  wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/script.js', array(), '1.0.0', true );
}

add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );




// Register Nav Menu

register_nav_menus(
  array(
    'main-nav-header-top' => 'Main Menu',
    'footer-nav' => 'Footer Menu'
  )
);


// Filter Website Title

function ozy_filter_wp_title( $title, $sep ) {
  global $paged, $page;

  if ( is_feed() ) {
    return $title;
  }

  // Add the site name.
  $title .= get_bloginfo( 'name' );

  // Add the site description for the home/front page.
  $site_description = get_bloginfo( 'description', 'display' );
  if ( $site_description && ( is_home() || is_front_page() ) ) {
    $title = "$title $sep $site_description";
  }

  // Add a page number if necessary.
  if ( $paged >= 2 || $page >= 2 ) {
    $title = "$title $sep " . sprintf( __( 'Page %s', 'ozy' ), max( $paged, $page ) );
  }

  return $title;
}

add_filter( 'wp_title', 'ozy_filter_wp_title', 10, 2);


?>