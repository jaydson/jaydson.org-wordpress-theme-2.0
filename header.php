<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
  <meta charset="utf-8">

  <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>

  <meta name="viewport" content="width=device-width,initial-scale=1">

  <?php roots_stylesheets(); ?>

  <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> Feed" href="<?php echo home_url(); ?>/feed/">

  <script src="<?php echo get_template_directory_uri(); ?>/js/libs/modernizr-2.0.6.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/libs/jquery-1.6.4.min.js"></script>

  <?php wp_head(); ?>
  <?php roots_head(); ?>

  <script defer src="<?php echo get_template_directory_uri(); ?>/js/plugins.js"></script>
  <script defer src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
</head>

<body <?php body_class(roots_body_class()); ?>>

  <?php roots_wrap_before(); ?>
  <div id="wrap" class="container" role="document">
  <?php roots_header_before(); ?>
    <header id="banner" class="<?php global $roots_options; echo $roots_options['container_class']; ?>" role="banner">
      <?php roots_header_inside(); ?>
      <div class="container">
        <a id="" href="<?php echo home_url(); ?>/">
        </a>
       	<div class="logo-container">
		       	<img class="photo" src="<?php echo get_template_directory_uri(); ?>/img/photo.png">
		       	<img class="html5-badge" src="<?php echo get_template_directory_uri(); ?>/img/html5-badge.png">
		       	<div class="description">Web development<br>JavaScript, HTML5 and stuff</div>
					<div class="wrapper">
						<div id="letter_j" class="logo letter">J</div>
						<div class="ayd">
							<div id="letter_a" class="logo">a</div>
							<div id="letter_y" class="logo">y</div>
							<div id="letter_d" class="logo">d</div>
						</div>
						<div id="letter_s" class="logo letter">S</div>
						<div class="on">
							<div id="letter_o" class="logo">o</div>
							<div id="letter_n" class="logo">n</div>
						</div>
					</div>
				</div>
      </div>
    </header>
     <nav id="nav-main" role="navigation">
        <?php if ($roots_options['clean_menu']) { ?>
          <?php wp_nav_menu(array('theme_location' => 'primary_navigation', 'walker' => new roots_nav_walker())); ?>
        <?php } else { ?>
          <?php wp_nav_menu(array('theme_location' => 'primary_navigation')); ?>
        <?php } ?>
   		</nav>

      <?php
        $utility_nav = wp_get_nav_menu_object('Utility Navigation');
        $utility_nav_term_id = (int) $utility_nav->term_id;
        $menu_items = wp_get_nav_menu_items($utility_nav_term_id);
        if ($menu_items || !empty($menu_items)) {
      ?>
      <nav id="nav-utility">
        <?php if ($roots_options['clean_menu']) { ?>
          <?php wp_nav_menu(array('theme_location' => 'utility_navigation', 'walker' => new roots_nav_walker())); ?>
        <?php } else { ?>
          <?php wp_nav_menu(array('theme_location' => 'utility_navigation')); ?>
        <?php } ?>
      </nav>
      <?php } ?>
  <?php roots_header_after(); ?>
