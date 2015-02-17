<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width">
		<title><?php bloginfo('name'); ?> | <?php is_home() ? bloginfo('description') : wp_title(''); ?></title>
		<link href="<?= get_bloginfo('template_directory') ?>/style.css?v=1" rel="stylesheet" type="text/css">
		<script src="http://code.jquery.com/jquery-latest.min.js"></script>
		<script src="<?= get_bloginfo('template_directory') ?>/script.js"></script>
	</head>

	<body <?php body_class(); ?>>
		<header>
			<div>
				<img src="<?= get_bloginfo('template_directory') ?>/images/logo.png" alt="Frontline Coaching">
				<div class="menu">
				<ul>
					<?php wp_list_pages('title_li='); ?>
				</ul>
				</div>
			</div>
		</header>
