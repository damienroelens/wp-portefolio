<?php  
/*
	Template Name: Blog
*/
?>

<?php 
	get_header();
?>

je suis dans une page de blog
<header role="banner">
	<div id="logo"><?php _e('Mon logo'); ?></div>
	<h1><a href="<?php echo(site_url()); ?>"><?php _e('Liste des articles'); ?></a></h1>
</header>
<div id="articles" role="main">
	<?php if(have_posts()): ?>
		<?php while(have_posts()) : the_post(); ?>
			<article class="post" id="post-<?php the_ID() ?>">
				<h2 class="post-title"role="heading" aria-level="2">
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				</h2>
				<time date="<?php get_the_date('Y-m-d'); ?>" pubdate><?php echo(get_the_date()); ?></time>
				<div class="post-content">
					<?php the_content(); ?>
				</div>
			</article>
		<?php endwhile; ?>
	<?php endif; ?>
</div>

<?php comments_template(); ?>

<?php 
	get_footer();
?>