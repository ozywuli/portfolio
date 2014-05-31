<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?php wp_title( '|', true, 'right' ); ?> </title>

  <!-- Font Awesome -->
  <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

  <!-- Favicon -->
  <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

  <!-- Just for debugging purposes. Don't actually copy this line! -->
  <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->

  <?php wp_head() ?>
</head>

<body <?php if ( is_front_page() { echo ' class="frontpage" ' }; ) ?> >

<!-- Page Container -->
<div class="globals">


<!-- Navigation -->
<div class="nav-container">
  <!-- Header = Title + Logo + Responsive Toggle -->
  <header class="title-wrapper">
    <h1 class="title"></h1>
    <a href="#" class="menu-toggle"></a>
  </header> <!-- /header -->

  <!-- Menu -->
  <nav class="nav-menu <?php if ( is_front_page() ) { echo 'active-home-link'; };  ?>" >
    <?php
      // Menu Options
      $main_menu_header_top = array(
        'theme_location' => 'primary',
        'menu_class' => 'clearfix',
        'depth' => 1
      );
     ?>

    <?php wp_nav_menu( $main_menu_header_top ); ?>
  </nav> <!-- /menu -->

  <!-- Searchbox -->
  <div class="search-box-wrapper">
    <?php get_search_form(); ?>
  </div> <!-- /searchbox -->

</div> <!-- /navigation -->

