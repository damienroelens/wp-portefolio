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
				      <div class="cube-face  cube-face-front">
				      	<h4><?php echo $comp['label'] ?></h4>
				      	<dl>
				      		<dt>HTML 5</dt>
				      		<dd><progress max="100" value="90"></progress></dd>
				      		<dt>Photoshop</dt>
				      		<dd><progress max="100" value="75"></progress></dd>
				      		<dt>Javascript</dt>
				      		<dd><progress max="100" value="85"></progress></dd>
				      		<dt>PHP</dt>
				      		<dd><progress max="100" value="70"></progress></dd>
				      	</dl>
				      	<dl>
				      		<dt>CSS3</dt>
				      		<dd><progress max="100" value="85"></progress></dd>
				      		<dt>Illustrator</dt>
				      		<dd><progress max="100" value="85"></progress></dd>
				      		<dt>JQuery</dt>
				      		<dd><progress max="100" value="60"></progress></dd>
				      		<dt>MySQL</dt>
				      		<dd><progress max="100" value="65"></progress></dd>
				      	</dl>
				      	<p>CMS : Spip et Wordpress</p>
				      </div>
				      <div class="cube-face  cube-face-back"></div>
				      <div class="cube-face  cube-face-left">
				      	<h4><?php echo $expe['label'] ?></h4>
				      	  <ul>
					      	<li>Job étudiant chez Dexia département Relation client en juillet 2010 <span>Travail en équipe, Contact avec le client</span></li>
					      	<li>Divers petit boulots dans le domaine de la construction 2010-2013 <span>Travail en équipe, Savoir se surpasser</span></li>
					      	<li>Stage bénévole avec Altéo MRB juillet 2013 <span>Esprit de groupe, prise d'initiative, contact et prise en charge de personnes en situation d'handicap</span></li>
					      	<li>Divers projets de conception de site web 2010-2013 <span>Relation et accompagnement du client, prise en charge de projet complet</span></li>
					      </ul>
					  </div>
				      <div class="cube-face  cube-face-right"><h4><?php echo $form['label'] ?></h4>
				      	<ul>
				      	  <li>Secondaire supérieures en informatique à ECCSA <span>2007-2009</span></li>
					      <li>Formation à l'écoute et à l'esprit d'équipe <span>juillet 2013</span></li>
					      <li>Bachelier en Infographie à la Haute Ecole de la Province de liège <span>2009-2014</span></li>
						</ul>
					  </div>
				      <div class="cube-face  cube-face-top"><h4><?php echo $lang['label'] ?></h4>
						<dl>
				      		<dt>Français</dt>
				      		<dd><progress max="100" value="100"></progress></dd>
				      		<dt>Anglais</dt>
				      		<dd><progress max="100" value="85"></progress></dd>
				      		<dt>Neerlandais</dt>
				      		<dd><progress max="100" value="55"></progress></dd>
				      	</dl>
				      </div>
				      <div class="cube-face  cube-face-bottom"><h4><?php echo $cent['label'] ?></h4>
							<ul>
								<li>Musique </li>
								<li>Sport </li>
								<li>Technologies  </li>
								<li>Art </li>
								<li>Jeux vidéo </li>
							</ul>
				      </div>
				   </div>
				</div>
			</div>
	</section>

<?php 
	get_footer();
?>