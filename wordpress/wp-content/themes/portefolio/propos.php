<?php 
/* 
Template name:Propos 
*/ 
?>
<?php 
	get_header();
?>


<?php 
	$comp = get_field_object('field_52625893fdaed'); 
	$expe = get_field_object('field_52625961fdaee'); 
	$form = get_field_object('field_52625979fdaef'); 
	$lang = get_field_object('field_52625989fdaf0');
	$cent = get_field_object('field_526259abfdaf1'); 
?>

<section class="propos">
		<div class="contain">
			<h3>A propos</h3>
			<div class="comp">
				<input type="radio" checked id="radio-front" name="select-face"/> 
				<label for="radio-front"><?php echo $comp['label'] ?></label>   
				<input type="radio" id="radio-left" name="select-face"/>
				<label for="radio-left"><?php echo $expe['label'] ?></label>   
				<input type="radio" id="radio-right" name="select-face"/>
				<label for="radio-right"><?php echo $form['label'] ?></label>   
				<input type="radio" id="radio-top" name="select-face"/>
				<label for="radio-top"><?php echo $lang['label'] ?></label>   
				<input type="radio" id="radio-bottom" name="select-face"/>
				<label for="radio-bottom"><?php echo $cent['label'] ?></label>   
				<div class="scene">
				  <div class="cube">
				      <div class="cube-face  cube-face-front"><h4><?php echo $comp['label'] ?></h4><p><?php echo $comp['value'] ?></p></div>
				      <div class="cube-face  cube-face-back"></div>
				      <div class="cube-face  cube-face-left"><h4><?php echo $expe['label'] ?></h4><p><?php echo $expe['value'] ?></p></div>
				      <div class="cube-face  cube-face-right"><h4><?php echo $form['label'] ?></h4><p><?php echo $form['value'] ?></p></div>
				      <div class="cube-face  cube-face-top"><h4><?php echo $lang['label'] ?></h4><p><?php echo $lang['value'] ?></p></div>
				      <div class="cube-face  cube-face-bottom"><h4><?php echo $cent['label'] ?></h4><p><?php echo $cent['value'] ?></p></div>
				   </div>
				</div>
			</div>
	</section>

<?php 
	get_footer();
?>