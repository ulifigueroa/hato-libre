<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <title><?php wp_title(); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
    <?php wp_head(); ?>
  </head>
<body <?php body_class(); ?>>

  <nav class="main-navigation content" role="navigation">
    <?php $logo = get_theme_mod('logo', get_template_directory_uri().'/images/logo.png'); ?>

    <h1 class="site-logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php echo '<img src="'.esc_url($logo).'" alt="Hato Libre Logo" />'; ?></a></h1>

    <?php
      wp_nav_menu( array(
        'menu'       => 'main',
        'menu_class' => 'primary-menu clear',
        'container'  => false
       ) );
    ?>
  </nav>
