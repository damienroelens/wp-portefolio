<?php  
/*
Template Name:Contact
*/
?>
<?php get_header() ?>

<section class="contac">
		<div class="contain">
			<h3>Contact</h3>
			<div class="info">
				<div id="hcard-<?php the_field('prenom') ?>-<?php the_field('nom') ?>" class="vcard">
					<div class="presimg">
						<img src="<?php the_field('image_contact') ?>" class="photo" alt="Photo <?php the_field('prenom') ?> <?php the_field('nom') ?>s" />
						<div class="trame"></div>
					</div>
					<span class="fn n icons-sprite">
					      <span class="given-name"><?php the_field('prenom') ?></span> 
						  <span class="family-name"><?php the_field('nom') ?></span>
					</span>
				    <a class="email icons-sprite" href="mailto:<?php the_field('email') ?>"><?php the_field('email') ?></a>
					<div class="adr">
						<div class="street-address icons-sprite"><?php the_field('adresse_rue') ?></div>
						<span class="postal-code"><?php the_field('adresse_code') ?></span>
						<span class="locality"><?php the_field('adresse_ville') ?></span>
						<span class="country-name"><?php the_field('adresse_pays') ?></span>
					</div>
					<div class="tel icons-sprite"><?php the_field('telephone') ?></div>
				</div>
			</div>
			<form action="/mail" method="post">
				<fieldset>
					<legend>Me contacter</legend>
					<label for="nam">Nom : </label>
					<input type="text" id="nam" name="Nom">
					<label for="pnam">Prénom : </label>
					<input type="text" id="pnam" name="Prenom">
					<label for="mail">E-mail : </label>
					<input type="email" id="mail" name="Email">
					<label for="txta">Message : </label>
					<textarea name="Message" id="txta" cols="30" rows="10"></textarea>
					<input type="submit" value="Envoyer">

				</fieldset>
			</form>
		</div>
	</section>
	<?php get_footer() ?>