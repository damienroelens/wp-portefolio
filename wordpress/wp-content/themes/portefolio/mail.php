<?php  
/*
Template Name:mail
*/
?>
<?php get_header() ?>

<section class="contac">
		<div class="contain">
					<p>
					<?php
				
				ini_set("SMTP","smtp.damien-roelens.be" );
				ini_set("smtp_port","587" );
				

				$destinataire = 'roelens_dam@hotmail.com';
				// Pour les champs $expediteur / $copie / $destinataire, séparer par une virgule s'il y a plusieurs adresses
				$expediteur = htmlspecialchars($_POST['Email']);
				$sujet = htmlspecialchars($_POST['Prenom']).' '.htmlspecialchars($_POST['Nom']) ;
				$objet = 'Damien-Roelens.be, courrier venant de ' . $sujet; // Objet du message
				$message = htmlspecialchars($_POST['Message']);
				$syntaxe = '#^[\w.-]+@[\w.-]+\.[a-zA-Z]{2,6}$#';
				$syntaxe2 = '#\w*\s\w*#';
				if (preg_match($syntaxe,$expediteur))
				{
					if(preg_match($syntaxe2,$sujet))
					{
						if(htmlspecialchars($_POST['Message']) != '')
						{
							$expediteur = htmlspecialchars($_POST['Email']);
							mail($destinataire,$objet,$message);
							echo 'Votre message a bien &eacute;t&eacute; envoy&eacute; ';
						}
						else
						{
							echo "Votre message n'a pas pu &ecirc;tre envoy&eacute, car la zone de texte n'a pas &eacute;t&eacute; remplie correctement.";
						}
					}
					else
					{
						echo "Votre message n'a pas pu &ecirc;tre envoy&eacute, car votre nom ou pr&eacute;nom n'a pas &eacute;t&eacute; rempli correctement.";
					}
				}
				else // Non envoyé
				{
					echo "Votre message n'a pas pu &ecirc;tre envoy&eacute, car votre e-mail n'est pas valide.";
				}
				?>
				</p>

				<a href="contact">Retour à la page contact</a>
		</div>
	</section>
	<?php get_footer() ?>