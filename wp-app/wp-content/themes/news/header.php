<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <title>
    <?php wp_title(); ?>
  </title>
  <?php wp_head(); ?>
</head>

<body>
  <div class="navbarContainer">
    <p class="brandName">Tech news today</p>
    <ul class="navLinks">
      <?php
      wp_nav_menu(
        array('theme_location' => 'primary')
      );
      ?>
    </ul>
  </div>
