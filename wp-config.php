<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', '4w4-test-bd' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', '' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         't2 $KHX5-{T&;4NLgB_#83n6s]ia4l~_3;e(e2F^SMd[w3Zh$Ji&-Og$&XSD|Gd&' );
define( 'SECURE_AUTH_KEY',  '.QGS{|(`0.gR|D^ovHG&T{XRD`G@sTa_c}e]#hyr5cl5JB_fkQii;Dn6+^w;f=@t' );
define( 'LOGGED_IN_KEY',    'ZD) MMX}$t&mZ4}>HV9wGxffV&[/<V1#KWkr$z{lTZsX9pk&+Ut`:;@>-t$-_pkF' );
define( 'NONCE_KEY',        '893,TT@Y~I]@};,/L~kS9|q/4V}~E<+ThU_>M50bf)QG5qt11HNZ^&hS?r`+7Zk-' );
define( 'AUTH_SALT',        'y^t`Wd1y;*+!#>+eiyD` f J5DR~J_3AikE-[R!]K9PeC@:1ayCgr^K>dDjuT+&x' );
define( 'SECURE_AUTH_SALT', 'upAML_NMp1z6lzRE@K5709~{B3sp`4%0yl,%w7bZnDKF!noa$HS&S%%{r?gDJgr^' );
define( 'LOGGED_IN_SALT',   '/u22QNMXY+#h 6HxkPE5N2EJ05,.$C4+9?m^%?Y@.Bw DSpqkS$;hW$0+nhEWUWB' );
define( 'NONCE_SALT',       'bJa>X.4fF^u7Y8D^D:q{D4%M~o``K#v^u)<Fs-&cYHr;mO/ZV;Z?%8TePcwAwwR!' );
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
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', true);
define( 'WP_ENVIRONMENT_TYPE', 'development' );
/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
