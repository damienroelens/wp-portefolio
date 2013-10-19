on est dans tag

<?php $t=get_query_var('tag'); ?>

<?php $the_query = new WP_Query( array('post_type' => 'projets', 'tag' => $t ) ); ?>
					<?php if($the_query->have_posts()): ?>
						<?php while($the_query->have_posts()) : $the_query->the_post(); ?>
								fuck
							<?php the_title() ?>
					<?php endwhile; ?>
				<?php endif; ?>
			<?php wp_reset_postdata(); ?>