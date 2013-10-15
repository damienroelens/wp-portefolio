<?php 
	get_header();
?>

<header role="banner">
	<div id="logo"><?php _e('Mon logo'); ?></div>
	<h1><a href="<?php echo(site_url()); ?>"><?php _e('Liste des articles'); ?></a></h1>
</header>


 

<?php $the_query = new WP_Query( array('post_type' => 'post') ); ?>

<div id="articles" role="main">
	<?php if($the_query->have_posts()): ?>
		<?php while($the_query->have_posts()) : $the_query->the_post(); ?>
			<article class="post" id="post-<?php the_ID(); ?>">
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

<?php wp_reset_postdata(); ?>

<?php 
	get_footer();
?>