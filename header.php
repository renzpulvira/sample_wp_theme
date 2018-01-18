<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title><?php get_bloginfo('name'); ?></title>
	<?php wp_head(); ?> 
</head>
<body>

	<header>
		<nav class="navbar navbar-expand-lg">
			<div class="container">
				<a href="#" class="navbar-brand"><?php echo get_bloginfo('name'); ?></a>
				<ul class="navbar-nav ml-auto">
					<!-- Will replace for actual wordpress navigation function  -->
					<li class="nav-item"><a class="nav-link" href="#">Home</a></li>
					<li class="nav-item"><a class="nav-link" href="#">Services</a></li>
					<li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
				</ul>
			</div>
		</nav>
	</header>
