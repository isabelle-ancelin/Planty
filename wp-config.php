<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'planty' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost:3306' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '&rjOHC[w @&@ti3y)oExz8,CQBI.N|z/g]^.J .Ve%v3!gP*5+I7NLRwT([p{YLw' );
define( 'SECURE_AUTH_KEY',  'x,i3ku<}RL:I>we<^-jc87(<?3#e|!2dieubI[xAg/R*zhni< 9sVl}Z:bQE U]E' );
define( 'LOGGED_IN_KEY',    '.hq!R&.s6IYOErMFE%$2>I2RHq4[qlp,#yy1aIG?}f|n> <M01y{b^/FgNn>vX(q' );
define( 'NONCE_KEY',        'iyCm@fuJ]0NnZ`_l`%[Ax%Yk{zX/_hcQry:.GqbOPE@aEINjn3DQA4lhy5 <a/N5' );
define( 'AUTH_SALT',        '2HiT^E?+q+L~1Te:[vK^FxLL{_j=fCoz~gvTPq%Ng^R>}I[]Do@~eU42OF$&|Vg/' );
define( 'SECURE_AUTH_SALT', '6WSxTq6.?h53UYWY/^<hP;e_km5u_$3VS]<vpgZ%Le99e~a3Y>^@{(v*e`CprpBt' );
define( 'LOGGED_IN_SALT',   'E#tC6dOIuEV4 0Rbj&CU.-?L )_%X |P>lJk;=YL7){tEV,Tx2?VE;&R:a3_B:<[' );
define( 'NONCE_SALT',       'D7:aUSc(X=Mgn+S+&mXYE /1/_aKI6f899gUEd,$t:JaVAPW]Rx_Ro#RlX]FI`WW' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
