<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>

		<?php wp_head(); ?>

		<!-- Custom styles for this template -->
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	</head>
	<body>
		<div class="container">
			<div class="header">
				<div class="hat">
					<div class="logo col-2">
						<?php the_custom_logo(); ?>
					</div>
					<div class="phone">
						+380 689 89 90
					</div>
				</div><!-- /.hat -->
				
				<nav class="navbar navbar-expand-md navbar-light">
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>

					<div class="collapse navbar-collapse" id="navbarsExampleDefault">
						<?php wp_nav_menu( array(
							'theme_location'  => '',
							'menu'            => '',
							'container'       => 'ul',
							'container_class' => 'navbar-nav mr-auto',
							'container_id'    => '',
							'menu_class'      => 'navbar-nav mr-auto',
							'menu_id'         => '',
							'echo'            => true,
							'fallback_cb'     => 'wp_page_menu',
							'before'          => '',
							'after'           => '',
							'link_before'     => '',
							'link_after'      => '',
							'items_wrap'      => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
							'depth'           => 0,
							'walker'          => '',
						) ); ?>

						<?php dynamic_sidebar( 'menu-sidebar' ) ?>
						<!-- <form class="form-inline">
					    <input class="form-control mr-sm-2" type="search" placeholder="Поиск" aria-label="Search">
					  </form> -->
					</div>
				</nav>
			</div><!-- /.header -->