<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Oppo
 */

?>
<!DOCTYPE html>
<html>
<head>
	<title> <?php bloginfo('name'); ?> - <?php bloginfo('description')?> </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link href="<?php echo get_template_directory_uri(); ?>/style.css" type="text/css" rel="stylesheet">
	<?php wp_head(); ?> 
</head>
<body style="background: url(<?php bloginfo('template_url'); ?>/images/back.png) no-repeat;background-size: cover;">
	<header>
		<nav class="navbar navbar-light">
			<img src="<?php bloginfo('template_url'); ?>/images/logo.png">
		</nav>
	</header>
	<div class="container">
