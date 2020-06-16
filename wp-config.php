<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'wordpress');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'wordpressuser');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'wordpressrfc');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'mysql');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');
define('WP_ALLOW_REPAIR', true);
/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ')oH3&` G^t?%q%y3-X (Nt~]ogW4mWQ3TBUEif5`w?x7-EZGo8I>67 $l=Ah;hOL');
define('SECURE_AUTH_KEY',  ':e*u!us<RV93$z_CNs+oxvHPoFX7`2UZ!QO?41 IFLZi8Zy U/XxI3r%M>sX=X=*');
define('LOGGED_IN_KEY',    'JHnSUO&v=.od1SmHCoUlI:d(d}Nlmo[pt?$13^m#gVVv5h<<z|r*_$a`5Rc|jzZy');
define('NONCE_KEY',        '}x&>#B.>H?{=mfs($-Q2ucCtME2zf7bT,8.:~U/F&R=yCMkUj26Ry:b1Gf2e-5T#');
define('AUTH_SALT',        ' n*@&XYa.#N?7{wW$+&>!8lt ;oM~+q2EgDo=Qb28Px*pm8uetHvd[r^iGi}sWl,');
define('SECURE_AUTH_SALT', '!qy5{8Edr}qt}x}d)afC!~/;%cQ(YPR{U&e/plsir 0h3S9~Y?~{3l+@NTR6K3V~');
define('LOGGED_IN_SALT',   ',uj9%87Kvx`I1htO88UfAfE.-UL.}.i)]Q.:%iw2n[LO4=_o[oVDY5!W51Sf gU!');
define('NONCE_SALT',       'Z7?.vos,GaB|_qB*PB,t<H8DMOVARR`|4mrEakF=&((M9BhAN@bz@6pPS:::;B/g');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_rf_';
define( 'WPCF7_AUTOP', false );

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');