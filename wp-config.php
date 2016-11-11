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

define('WP_HOME','http://localhost:8888/projet-wordpress');
define('WP_SITEURL','http://localhost:8888/projet-wordpress');

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'megaprem_projet-wordpress');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'megaprem_projetW');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '5d*}5MgFdszT');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', '178.79.169.213');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         '3A G{`j_N2-(nA!fP-~fC=M&u@WQ^oTu}0p%]Op^S0>H%-;Wu&9~!Y#M_$We7|H,');
define('SECURE_AUTH_KEY',  '4f;uNZD@whD-%2o+WP{;=~|[-mP+u(.{`k1<=bk1RXx2c~f<u@D69gBLyeN2m`ah');
define('LOGGED_IN_KEY',    '5IL}0gz)eY=tV}HYGB)[44?&a[/3yp9&@5K Y^~C60I&s,8kFv`}Ko7Wp9rVXKX=');
define('NONCE_KEY',        'H@< whyY#br@2vf2wtda!kHW*!WIoXXVaV=KnbP@*8yl(+jv#X7oROV6bEL>jl#J');
define('AUTH_SALT',        'h}@IEji?3j>4lFhNIa7f!=~dyi5EX9r5}VM^4Gsl|}d~wiQ(RnmI6F-BV6TjU!p4');
define('SECURE_AUTH_SALT', '?tO2zkM=%,[f,]cMq|l2]BMIMYFnrrcJ*n{E@xE XB)BkUe1eVv& tN9|>2nIRQ6');
define('LOGGED_IN_SALT',   '~V[je~<wQK+LX$H]tkDJVC/YrS>.-.Qnj+-3$dz>A/!l`LlPi;.w%4;/dmNa+iR$');
define('NONCE_SALT',       'b0?Rrl,MsuQedEB9H:X%w:1hT~o=;LAn>9Ns-7XSjxz*&1sjrDP&!0kjDU%>mcxf');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wpRGEM_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d'information sur les autres constantes qui peuvent être utilisées
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