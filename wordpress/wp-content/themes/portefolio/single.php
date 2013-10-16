on est dans single.php

<?php $the_query = new WP_Query( array('post_type' => 'projets', 'orderby' => 'date') ); ?>
					<?php if($the_query->have_posts()): ?>
						<?php while($the_query->have_posts()) : $the_query->the_post(); ?>
						<a href="<?php get_year_link('')?>"><?php the_field('date') ?></a>
						<p><a href=""><?php the_tags('') ?></a></p>

						<?php 
						$category = get_the_category(); 
						if($category[0]){
						echo '<a href="'.get_category_link($category[0]->term_id ).'">'.$category[0]->cat_name.'</a>';
						}
						?>

					<?php endwhile; ?>
				<?php endif; ?>
			<?php wp_reset_postdata(); ?>


			<a href="<?php echo get_year_link(get_the_time('Y')) ?>"><?php the_time(__('Y', 'f2')); ?></a>