<?php 
	get_header();
?>

	<section id="wrapper">
		<div class="contain">
			<?php $the_query = new WP_Query( array('post_type' => 'galerie') ); ?>
			<h2>Galerie de projets</h2>
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
			<h3>Qui suis-je ?</h3>
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
			<h3>Catégories de travaux</h3>
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
			<h4>Projets aléatoires</h4>
			<ul>
				<li><a href=""><span class="icons-sprite icons-pencil"> Travail X</span></a></li>
				<li><a href=""><span class="icons-sprite icons-wordpress"> Travail X</span></a></li>
				<li><a href=""><span class="icons-sprite icons-mobile"> Travail X</span></a></li>
			</ul>
		</aside>
	</section>

<?php 
	get_footer();
?>






