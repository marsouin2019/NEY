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
define( 'DB_NAME', 'wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'dweb' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'mRSMA' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'A[|hl)xo0[LJ7(%V8$_yxHROyH;iZZWfBzeZWR8JX^).;FtdG2<Nw$vs?c[R`LG+' );
define( 'SECURE_AUTH_KEY',  'yr1$vJepZ_+2PN]c2)smdlFY^%ek-O16rH0[x@WOnwvfsvl,Y9R~N,k4VovAHuCT' );
define( 'LOGGED_IN_KEY',    '2r*~naR+tOQWNK3h@(c]1>rU4^!wSdrI@)1.CHORPJVb<Hy%K!om3m/y!nlHuXK<' );
define( 'NONCE_KEY',        '2_mvX#q:#C|coCbj&Pog4))s:t*8Yq/[a3kXc8bmF^}aajR#z-=[V1Rq[=.Mo37N' );
define( 'AUTH_SALT',        '06P%|R%&T;!:a`)mp{VGd->FqKLNjdv%z.*QT~c$]toaWwjNt-QZ[5(t!cuOIhd_' );
define( 'SECURE_AUTH_SALT', 'vUgC**tNv.yXH^JDQLN)q=u1^~j?.C+X(!`V<Ungd!e?ru:*~BS{cs[~i,xE6^|K' );
define( 'LOGGED_IN_SALT',   'flRrH*PgP:HZjaaa(d+;[#1YO~,@[*+S}04NV.myl7 RtZKEz~byku]!L@89D(I2' );
define( 'NONCE_SALT',       '$X-#n=gRsq 6%7K<+G0Gw*/r77[V2Gn/9mRG0;~PQTeVvw;kLv^kd-}o;`9&.53l' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

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

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');

