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
	$qual = get_field_object('field_52694ec91bf60'); 
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
				<input type="radio" id="radio-back" name="select-face"/>
				<label for="radio-back"><?php echo $qual['label'] ?></label> 
				<div class="scene">
				  <div class="cube">
				      <div class="cube-face  cube-face-front">
				      	<h4><?php echo $comp['label'] ?></h4>
				      	<dl>
				      		<dt>HTML 5</dt>
				      		<dd>
				      			<div class="progress">
				      				<div class="progress-bar ht"></div>
				      			</div>
				      		</dd>
				      		<dt>Photoshop</dt>
				      		<dd>
				      			<div class="progress">
				      				<div class="progress-bar ps"></div>
				      			</div>
				      		</dd>
				      		<dt>Javascript</dt>
				      		<dd>
				      			<div class="progress">
				      				<div class="progress-bar js"></div>
				      			</div>
				      		</dd>
				      		<dt>PHP</dt>
				      		<dd>
				      			<div class="progress">
				      				<div class="progress-bar ph"></div>
				      			</div>
				      		</dd>
				      	</dl>
				      	<dl>
				      		<dt>CSS3</dt>
				      		<dd>
				      			<div class="progress">
				      				<div class="progress-bar cs"></div>
				      			</div>
				      		</dd>
				      		<dt>Illustrator</dt>
				      		<dd>
				      			<div class="progress">
				      				<div class="progress-bar il"></div>
				      			</div>
				      		</dd>
				      		<dt>JQuery</dt>
				      		<dd>
				      			<div class="progress">
				      				<div class="progress-bar jq"></div>
				      			</div>
				      		</dd>
				      		<dt>MySQL</dt>
				      		<dd>
				      			<div class="progress">
				      				<div class="progress-bar sql"></div>
				      			</div>
				      		</dd>
				      	</dl>
				      	<p>CMS : Spip et Wordpress</p>
				      </div>
				      <div class="cube-face  cube-face-back">
				      	<h4><?php echo $qual['label'] ?></h4>
				      		<ul>
				      			<li>Conscencieux</li>
				      			<li>Perfectionniste</li>
				      			<li>Travailleur</li>
				      			<li>Assidu</li>
				      			<li>Autonome</li>
				      		</ul>
				      </div>
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
				      		<dd><div class="progress">
				      				<div class="progress-bar fr"></div>
				      			</div></dd>
				      		<dt>Anglais</dt>
				      		<dd><div class="progress">
				      				<div class="progress-bar en"></div>
				      			</div></dd>
				      		<dt>Neerlandais</dt>
				      		<dd><div class="progress">
				      				<div class="progress-bar nl"></div>
				      			</div></dd>
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