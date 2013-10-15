<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur 
 * {@link http://codex.wordpress.org/Editing_wp-config.php Modifier
 * wp-config.php} (en anglais). C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'wp-portefolio');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

/** Type de collation de la base de données. 
  * N'y touchez que si vous savez ce que vous faites. 
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant 
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '6Ci3i:i@NrGhq1CU$UeMb<@4Ene*l!Gir}dezC?P`mI}c,uS`%2H?Zr=U]/$|4W#');
define('SECURE_AUTH_KEY',  '}/A$g`]]5vz&,>n>9/d4@mF!JbHr9qvNZjSllZTuN6R:1~:JQ?~P>Zavz,[mfXko');
define('LOGGED_IN_KEY',    '*O3WS#x._?1nW @^BieV/5 +/f4SQH~%wS)*9(x@)]vFz^pcUD<1KfG0gK+T(S*u');
define('NONCE_KEY',        '40yj+}d%T3_uY2$Vf4zKN>jzEAoo$>q KXs>Y+G=$h HEuM^IM:i(z~O!^W3cJ(H');
define('AUTH_SALT',        'OJgG?(}VDgP6q(<$`ED{8r(7V5JB.nFO)m[C:1qBjXOkv/@UsM/zAcj VqVZ[OY.');
define('SECURE_AUTH_SALT', '*&1VwGaFvy$-M;Iiv[a1y-K:VS.~BRhb~1`A;BK?Uw t(o6DN$US{P1[ qZJwB_;');
define('LOGGED_IN_SALT',   's6~XMNrGGq46}vWA&&BqptjP/<hqvrWm.cw|,tc[OFi;M[LyUtKSd@mRa#xL0d =');
define('NONCE_SALT',       'S#oVW`XLI)9f]#q]_be)5VE#)Iy)d;#HtI5^ugkz4!@e1V(eflUaP`udaZshE?GX');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

/**
 * Langue de localisation de WordPress, par défaut en Anglais.
 *
 * Modifiez cette valeur pour localiser WordPress. Un fichier MO correspondant
 * au langage choisi doit être installé dans le dossier wp-content/languages.
 * Par exemple, pour mettre en place une traduction française, mettez le fichier
 * fr_FR.mo dans wp-content/languages, et réglez l'option ci-dessous à "fr_FR".
 */
define('WPLANG', 'fr_FR');

/** 
 * Pour les développeurs : le mode deboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 */ 
define('WP_DEBUG', false); 

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');