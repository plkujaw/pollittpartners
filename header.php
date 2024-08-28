<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and start of the <body> section
 *
 */

$is_mobile = wp_is_mobile() ? 'is-mobile' : '';
$body_class = 'preload ' . $is_mobile . sanitize_title(get_the_title());
$backround_colour = get_field('page_background_colour');
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <!-- Start cookieyes banner -->
  <!-- <script id="cookieyes" type="text/javascript" src="https://cdn-cookieyes.com/client_data/87bb05f0e3ee89cb62f38fad/script.js"></script> -->
  <!-- End cookieyes banner -->
  <?php wp_head(); ?>
</head>

<body <?php body_class($body_class); ?>>
  <?php get_template_part('inc/template-parts/parts/cursor') ?>
  <?php get_template_part('inc/template-parts/parts/mobile-menu') ?>
  <?php wp_body_open(); ?>
  <div id="site" <?php echo $backround_colour == 'black' ? "class='bg-black'" : '' ?>>
    <header class="header">
      <div class="container">
        <div class="header__row">
          <div class="header__logo">
            <a href="<?php echo esc_url(site_url()) ?>">&</a>
          </div>
          <div class="header__menu">
            <?php wp_nav_menu(array(
              'theme_location' => 'primary-menu',
              'menu_class' => 'main-menu',
              'container' => 'nav',
            )); ?>
          </div>
          <div class="hamburger">
            <button class="burger js-mobile-menu-trigger" type="button" aria-expanded="false">
              <span class="burger__line burger__line--1"></span>
              <span class="burger__line burger__line--2"></span>
              <span class="burger__line burger__line--3"></span>
            </button>
          </div>
        </div>
      </div>
    </header>
    <main>