on est dans category

<?php $i=get_query_var( 'cat' )?>


<?php $the_query = new WP_Query( array('post_type' => 'projets', 'cat' => $i ) ); ?>
					<?php if($the_query->have_posts()): ?>
						<?php while($the_query->have_posts()) : $the_query->the_post(); ?>
								fuck
							<?php the_title() ?>
					<?php endwhile; ?>
				<?php endif; ?>
			<?php wp_reset_postdata(); ?>