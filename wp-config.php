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
define('DB_NAME', 'oueryconsulting_wp');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'mot de passe');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'tK2t%g4!k{nL%qHMFBNUmR82upY|.nC 2oj_;ngjvsXSda(5TUo3Pu.FrRQI=wuY');
define('SECURE_AUTH_KEY',  'dN!d}}ym?FNzZ-!_d:x~x<v6gfvTsl9tM:ERja<(f!%iN%Kq=!h*wA|7=a1CG,!i');
define('LOGGED_IN_KEY',    'ISmtJzTFm!ZvH,oal00>&+s3T=r!,[fe:{qtO1MQD@std%r*{R$-qN-D+I8s8O}D');
define('NONCE_KEY',        '[9DK:W_Q$Ls]MpQYKhRM^f,^W!^L#|p-n1EF|(SJnxjzG[jJB0)~M`iNPy;g}v51');
define('AUTH_SALT',        'bNg,Vk@;MSF^_l#^HlHu~`n/f1X(OvI3ja,Ci.k%c:w7JaoH0i51_zhmDH#WsIo-');
define('SECURE_AUTH_SALT', 'KO`2q[5x}Ppn?22>Ku&<v1zGtQH-bQp40PBO`%Q4~3Kpcw,ZtMbn5ueOoLf)gkn5');
define('LOGGED_IN_SALT',   'kv:*^c[H+0%&di%qxr?%b*|4e:JLtVZB2`)B/?W8Y(rL{kUAVXoVrq^p7#wk:/2.');
define('NONCE_SALT',       '7<C$eq+pytAjeUtsu3wD&@QbM^9=sK`3RnCjiU[>}(hS]0abw6NDQZSZrS8+|L.]');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

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