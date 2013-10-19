<?php 
	get_header();
?>
<section class="worked">
<?php $i=get_query_var( 'name' ) ?>
<?php $the_query = new WP_Query( array('post_type' => 'projets', 'orderby' => 'date', 'name' => $i) ); ?>
					<?php if($the_query->have_posts()): ?>
						<?php while($the_query->have_posts()) : $the_query->the_post(); ?>
		<div class="contain">
			<h3><?php the_title() ?></h3>
			<img src="<?php the_field('image_projet') ?>" width="300px" alt="<?php the_title() ?>" />
				<ul>
					<li><?php _e('Type de projet : ') ?><?php 
						$category = get_the_category();
						foreach ($category as $cat) {
							echo '<a href="'.get_category_link($cat->term_id ).'"><span class="icons-sprite '.$cat->description.'">'.$cat->cat_name.'</span></a>';
						} ?></li>
					<li><?php _e('Date : ') ?><a href="<?php echo EH_get_post_type_date_link('projets',get_the_time('Y')); ?>"><?php the_time('Y') ?></a></li>
					<li><?php _e('Technologies : '); the_tags('',' ') ?></li>
				</ul>
		</div>
	</section>
	<section class="blacky" id="description">
		<div class="contain">
			<h3><?php _e('Description du projet') ?></h3>
			<img src="" alt="" />
			<p><?php the_content() ?></p>
			</div>
					<?php endwhile; ?>
	<?php endif; ?>
<?php wp_reset_postdata(); ?>
	</section>

	<section id="catwork">
	<div class="contain">
		<?php $the_query = new WP_Query( array('post_type' => 'catpro', 'orderby' => 'rand') ); ?>
		<h3><?php  _e('Catégories de travaux')?></h3>
		<?php if($the_query->have_posts()): ?>
			<?php while($the_query->have_posts()) : $the_query->the_post(); ?>
		<figure>
			<a href="<?php the_permalink() ?>">
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