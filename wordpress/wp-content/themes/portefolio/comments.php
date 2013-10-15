<?php 
	if(have_comments()):
 ?>

<ul>

<?php 
while(have_comments()):the_comment();
 ?>

<li><?php comment_text() ?></li>

 <?php endwhile; ?>

 </ul>

  <?php endif; ?>

  <?php comment_form(); ?>
