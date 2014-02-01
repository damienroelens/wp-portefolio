<!doctype html>
<html lang="<?php bloginfo( 'language' ); ?>" prefix="og: http://ogp.me/ns#">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta property="og:image" content="<?php bloginfo('template_url'); ?>/img/logoa.png">
	<meta property="og:description" content="Portefolio de Damien Roelens, infographiste, web developper et web designer">
	<meta name="google-site-verification" content="7lFbBN01n0knQR5rrv7MrHOGJxMg9JpV00-0TstxiRA" />
	<meta content="width=device-width,height=device-height, initial-scale=1,minimum-scale=1, maximum-scale=1.0, user-scalable=0, target-densitydpi=device-dpi" name="viewport">
	<title><?php bloginfo( 'name' ) ?></title>
	<link rel="shortcut icon" type="image/png" href="<?php bloginfo('template_url'); ?>/img/favicon.png" />
	<link rel="stylesheet" href="<?php echo(get_stylesheet_uri()); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE9">
	<!--[if IE]>
    	<link rel="stylesheet" href="<?php bloginfo(template_url); ?>/css/styles-ie.css" media="screen">
	<![endif]-->
	<script async type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/modernizr.js"></script>
</head>
<body>
	<header ontouchstart="showMenu();">
		<div class="contain">
			<h1><a href="<?php echo(site_url()); ?>"><?php bloginfo( 'name' ) ?></a></h1>
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

							<li><a href="<?php 
								if($post->post_name=='projets'){	
									if(is_archive()){} else{
								echo(site_url());echo('/'.$post->post_name);
								}
								} else {
									if($post->post_name=='a-propos'){
										echo(get_page_link(13));
										} else {
											if($post->post_name=='contact' )
											{
											echo(get_page_link(15));
											}
										}
								}
							 ?>"><span class="icon-sprite <?php the_field('classe_icone')?>"><?php the_title(); ?></span></a></li>
							
						
						<?php endwhile; ?>
				<?php endif; ?>
			<?php wp_reset_postdata(); ?>
		</ul>
	</nav>

