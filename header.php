<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?php wp_title( '|', true, 'right' ); ?> </title>

  <!-- Font Awesome -->
  <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

  <!-- Fonts -->
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,400italic,700,500,500italic,700italic,900,900italic,100,100italic,300,300italic' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=PT+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <!-- Favicon -->
  <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicons/favicon.ico" />

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->

<!-- Store Form URL in a variable for ajax call -->
<script type="text/javascript">
    var formURL = "<?php echo get_template_directory_uri().'/js/form.php' ?>";
</script>

<!-- Google Analytics -->


  <?php wp_head() ?>
</head>

<body <?php if ( is_front_page() ) { echo ' class="frontpage" '; } ?> >

<!-- Page Container -->
<div class="globals page">


<!-- Navigation -->
<div class="nav-container grid clearfix">
  <!-- Header = Title + Logo + Responsive Toggle -->
  <header class="nav-title-wrapper">
    <h1 class="h1 nav-title"><a href="index.php">OZY WU-LI</a></h1>
    <a href="#" class="menu-toggle"></a>
  </header> <!-- /header -->

  <!-- Menu -->
  <nav class="nav-menu <?php if ( is_front_page() ) { echo 'active-home-link'; };  ?>" >
    <?php
      // Menu Options
      $main_menu_header_top = array(
        'theme_location' => 'main-nav-header-top',
        'menu_class' => 'clearfix',
        'depth' => 1
      );
     ?>

    <?php wp_nav_menu( $main_menu_header_top ); ?>
  </nav> <!-- /menu -->

  <!-- Social Media -->



  <!-- Searchbox -->
  <div class="search-box-wrapper">
    <?php get_search_form(); ?>
  </div> <!-- /searchbox -->

</div> <!-- /navigation -->

<!-- Content -->
<div class="content-container <?php if ( is_page( 'contact' ) ) { echo 'contact-page'; }; ?>">