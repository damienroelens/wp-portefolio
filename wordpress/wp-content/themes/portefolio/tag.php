<?php 
	get_header();
 ?>
<?php $t=get_query_var('tag'); ?>
<section class="worked">
			<div class="contain">
			<h3><?php _e('Projets avec le mot-clé ');echo $t ?></h3>
<?php $the_query = new WP_Query( array('post_type' => 'projets', 'orderby' => 'rand', 'tag' => $t )) ?>
					<?php if($the_query->have_posts()): ?>
						<?php while($the_query->have_posts()) : $the_query->the_post(); ?>
			<div class="trava">
			<a href="<?php the_permalink() ?>">
			<h4><?php the_title() ?></h4>
			<img src="<?php the_field('image_projet') ?>" width="300px" alt="<?php the_title() ?>" />
			</a>
				<ul>
					<li><?php _e('Type de projet : ') ?><?php 
						$category = get_the_category();
						foreach ($category as $cat) {
							echo ('<a href="'.get_category_link($cat->term_id ).'"><span class="icons-sprite '.$cat->description.'">'.$cat->cat_name.'</span></a> ');
						}; ?></li>
					<li><?php _e('Date : ') ?><a href="<?php echo EH_get_post_type_date_link('projets',get_the_time('Y')); ?>"><?php the_time('Y') ?></a></li>
					<li><?php _e('Technologies : '); the_tags('',' ') ?></li>
					<li><?php _e('Résumé : ') ?><p><?php the_excerpt() ?> <a href="<?php the_permalink() ?>"><?php _e("[lire plus...]") ?></a></p></li>
				</ul>
			</div>
				 <?php endwhile; ?>
	<?php endif; ?>
		</div>
<?php wp_reset_postdata(); ?>
	</section>


<?php 
	get_footer();
 ?>