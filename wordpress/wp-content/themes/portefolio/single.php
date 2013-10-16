on est dans single.php

<?php $the_query = new WP_Query( array('post_type' => 'projets', 'orderby' => 'date') ); ?>
					<?php if($the_query->have_posts()): ?>
						<?php while($the_query->have_posts()) : $the_query->the_post(); ?>

						<?php
						$arc_year = get_the_date(__('Y'));

						?>
						<a href="<?php echo EH_get_post_type_date_link('projets',$arc_year); ?>">Archive de <?php the_time('Y') ?></a>

						<p><a href=""><?php the_tags('') ?></a></p>

						<?php 
						$category = get_the_category(); 
						if($category[0]){
						echo '<a href="'.get_category_link($category[0]->term_id ).'">'.$category[0]->cat_name.'</a>';
						}
						if($category[1]){
						echo '<a href="'.get_category_link($category[1]->term_id ).'">'.$category[1]->cat_name.'</a>';
						} //TODO For each category
						?> 

					<?php endwhile; ?>
				<?php endif; ?>
			<?php wp_reset_postdata(); ?>