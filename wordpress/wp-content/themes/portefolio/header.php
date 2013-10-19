<!doctype html>
<html lang="<?php bloginfo( 'language' ); ?>">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title><?php bloginfo( 'name' ) ?></title>
	<link rel="stylesheet" href="<?php echo(get_stylesheet_uri()); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE9">
	<!--[if IE]>
    	<link rel="stylesheet" href="<?php bloginfo(template_url); ?>/css/styles-ie.css" media="screen">
	<![endif]-->
	<script async type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/modernizr.js"></script>
</head>
<body>
	<header>
		<div class="contain">
			<h1><a href="<?php echo(site_url()); ?>"><?php $tit=get_bloginfo('name'); echo(substr($tit,0,14)) ?></a></h1>
			<p><em>&lt; </em><?php  _e('Web Developper') ?><em>/</em> <?php  _e('Web Designer') ?> <em>&gt;</em></p>
		</div>
	</header>
	<nav class="nav-container">
		<h2 class="h2hid"><?php  _e('Navigation') ?></h2>
		<ul>
			<li><a href="<?php echo(site_url()); ?>"><span class="icon-sprite icons-home">Home</span></a></li>

			<?php $the_query = new WP_Query( array('post_type' => 'menu', 'orderby' => 'date', 'order' => 'ASC') ); ?>
				<?php if($the_query->have_posts()): ?>
					<?php while($the_query->have_posts()) : $the_query->the_post(); ?>

							<li><a href="<?php the_field('lien_menu_navigation')?>"><span class="icon-sprite <?php the_field('classe_icone')?>"><?php the_title(); ?></span></a></li>
			
						
						<?php endwhile; ?>
				<?php endif; ?>
			<?php wp_reset_postdata(); ?>
		</ul>
	</nav>

