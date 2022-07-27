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
define( 'DB_NAME', 'ma_base_wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '3w:x7ZQ&4kcDM@,!]|1wen_opD;]6UhiVc5,mX*||@D@4}5ea|Y<#RZqE^S##^k_' );
define( 'SECURE_AUTH_KEY',  'TiYu6H#YCu c`$k`r4,$bwlt ts|2v>K|MsBK0Jx}f(=s!o<ix1vxK1Fw`y;E4;z' );
define( 'LOGGED_IN_KEY',    'j6*q48*O*J~UZL4YOk=xq=]=IG@VjIbP;x5o6tcLCGU{Bm&*}5pS^V5_>!)%tYdh' );
define( 'NONCE_KEY',        'ks)PApe1@}>5;<C&cN?6rWW/SV+f%T^xY!~x>~cRAneEWSqcr_)ylgz7lcNS@:1-' );
define( 'AUTH_SALT',        'Oy-c >`e7et]^%SyzV&)RpQhFd_QBNSUw9AV 9h;bew`up>#K~nz<_9bo0;ou&t]' );
define( 'SECURE_AUTH_SALT', '3C_P|;Tm W/}1l%ng*{n&rhXl<+Z:T=WMH=p.x+MD eAPBzC,7@($f?YZ^=U|sCj' );
define( 'LOGGED_IN_SALT',   '1)*.6=2YJk8G#2oa].H|!b2jf!HAyvvS`>Y,Y6#@HlINsV%R!QcX!%(D&uefgK_N' );
define( 'NONCE_SALT',       'K~6sRBqnVg3Ux?|r#;@#^&2%.Mb/)nrExc;JpTW>%qY_s(d+rT%J.E9`sE1O2Hp$' );
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
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
