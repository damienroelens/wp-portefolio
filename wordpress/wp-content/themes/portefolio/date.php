on est dans date
<?php the_permalink(); ?> 
<?php the_time( 'Y' ) ?>



<?php $the_query = new WP_Query( array('post_type' => 'projets' ,'year' => get_the_time('Y')) ); ?>
					<?php if($the_query->have_posts()): ?>
						<?php while($the_query->have_posts()) : $the_query->the_post(); ?>
								fuck
							<?php the_title() ?>
					<?php endwhile; ?>
				<?php endif; ?>
			<?php wp_reset_postdata(); ?>