<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
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
define('DB_NAME', 'ctp37_test');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'ctp37');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'Poire2erioP');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'hostingmysql290.amen.fr');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'foL8u1gP?!_@ca{=rFga(51Hg]l=8W!DmA6cW(z}j~9OYU3 UwR~E;Lw} t92DUc');
define('SECURE_AUTH_KEY',  '+#{~c,Js}Lhu!|,9h0`;;{/$: 8S7rm++gm9i!:R;6z{~udHS(@f$I?dd*3!2q/U');
define('LOGGED_IN_KEY',    '0eJ%4xE%NU:,v d8<qH9(fd).N[xs)vIp4I;5;8$]aT[QYg=)Vc+Ki/-Htb,W%Kx');
define('NONCE_KEY',        '<77TS?E57>hlT5-u-NmRR[{=fQ76m~re1#+ot-=926Cv,c,Y>Xe/@/O@P{Cz/L/+');
define('AUTH_SALT',        '-R;R2?c6<,ySooJ-&/CI>} fQL+8:)(;aEz+k|U=R5>O{e/%(i;;$dZZ9Z._o>7J');
define('SECURE_AUTH_SALT', 'lp~Xo2Sw|mM67xd=NN$u zeiP=d4%2QyQI}-CTuTOUSp$Jr~u,0zj/=PM+J14KZ|');
define('LOGGED_IN_SALT',   'Ei`scz*XE-u5vG$kc6SoZi=jt: Si+^<XLqpt iZI|)uyv%d0cT0qmE}?SNyZV|,');
define('NONCE_SALT',       'Q8uzo=X-XMSh#Qpn2pwzqTWbfIuL[ `3I*Y~=y#(b;Rj~J@CSp^QUiTg+1[4 *8}');
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
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant vos essais.
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