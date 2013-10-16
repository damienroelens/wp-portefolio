	<footer>
		<div class="contain">
			<div class="menu">
				<ul>
					<li><a href="<?php echo(site_url()); ?>">Home</a></li>

					<?php $the_query = new WP_Query( array('post_type' => 'menu', 'orderby' => 'date', 'order' => 'ASC') ); ?>
						<?php if($the_query->have_posts()): ?>
							<?php while($the_query->have_posts()) : $the_query->the_post(); ?>

									<li><a href="<?php the_field('lien_menu_navigation')?>"><?php the_title(); ?></a></li>
					
								
								<?php endwhile; ?>
						<?php endif; ?>
					<?php wp_reset_postdata(); ?>
				</ul>
			</div>
			<div class="socio">
				<ul>
					<li><a href="">f</a></li>
					<li><a href="">t</a></li>
					<li><a href="">i</a></li>
				</ul>
			</div>
			<p>&copy; All Rights Reserved 2013</p>
		</div>
	</footer>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/min/script.min.js"></script>
</body>
</html>