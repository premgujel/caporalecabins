<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Caporalecabins</title>
		<script src="https://code.jquery.com/jquery-1.8.3.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.pano.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/custom.js"></script>
		 <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/custom.css">
		 <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
		 <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Oswald" />
		 <?php wp_head();?>
	</head>
	<body>
	<header id="header">
	<div id="logo">
	<h1><a href="//" rel="home" title="Fully responsive unique theme that looks great on any device.">
	<img src="/wp-content/themes/caporalecabins/images/royalgold-logo.png" alt="RoyalGold"></a></h1>
	<div class="menu-toggle"><span class="tooltip"></span></div>
	</div>
	<nav id="menu" class="expand-childs">
	<?php $args = array(
	'theme_location' => 'header-menu',
    'menu_class' => 'expand-childs',        
    'menu' => 'menu'
	);
	wp_nav_menu( $args ); ?>
	</nav>
	</header>