<?php 
	get_header();
?>

	<section id="wrapper">
		<div class="contain">
			<?php $the_query = new WP_Query( array('post_type' => 'galerie') ); ?>
			<h2><?php _e('Galerie de projets') ?></h2>
			<?php if($the_query->have_posts()): ?>
				<?php while($the_query->have_posts()) : $the_query->the_post(); ?>
				<figure>
					<a href="#">
					<img src="<?php the_field('image_slider') ?>" alt="">
					<figcaption>
						<h3><?php the_title() ?></h3>
						<p><?php the_field('texte_slider') ?></p>
					</figcaption>
					</a>
				</figure>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
		<?php wp_reset_postdata(); ?>
	</section>
	<section id="present">
		<div class="contain">
			<?php $the_query = new WP_Query( array('post_type' => 'moi') ); ?>
			<?php if($the_query->have_posts()): ?>
				<?php while($the_query->have_posts()) : $the_query->the_post(); ?>
			<h3><?php the_title() ?></h3>
			<p><?php the_field('pres_left') ?></p>
			<div class="presimg">
				<img src="<?php the_field('pres_image'); ?>" alt="Photo Damien Roelens" />
				<div class="trame"></div>
			</div>
			<p><?php the_field('pres_right') ?></p>
			<?php endwhile; ?>
			<?php endif; ?>
			<?php wp_reset_postdata(); ?>
		</div>
	</section>
	<section id="catwork">
		<div class="contain">
			<?php $the_query = new WP_Query( array('post_type' => 'catpro', 'orderby' => 'rand') ); ?>
			<h3><?php  _e('Catégories de travaux')?></h3>
			<?php if($the_query->have_posts()): ?>
				<?php while($the_query->have_posts()) : $the_query->the_post(); ?>
			<figure>
				<a href="">
					<img src="<?php the_field('image_cat') ?>" alt="">
					<figcaption><?php the_title() ?><p><?php the_field('texte_categorie') ?></p></figcaption>
				</a>
			</figure>
			<?php endwhile; ?>
			<?php endif; ?>
			<?php wp_reset_postdata(); ?>
		</div>
		<aside>
			<h4><?php  _e('Projets aléatoires')?></h4>
			<ul>
				<?php $the_query = new WP_Query( array('post_type' => 'projets', 'orderby' => 'rand') ); ?>
					<?php if($the_query->have_posts()): ?>
						<?php while($the_query->have_posts()) : $the_query->the_post(); ?>
				<li><a href="<?php the_permalink() ?>"><span class="icons-sprite <?php $cats = get_the_category(); $cat_name = $cats[0]->description; echo($cat_name); ?>"> <?php the_title() ?></span></a></li>
					<?php endwhile; ?>
				<?php endif; ?>
			<?php wp_reset_postdata(); ?>
			</ul>
		</aside>
	</section>

<?php 
	get_footer();
?>






