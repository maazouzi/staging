<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'dbtesting');

/** MySQL database username */
define('DB_USER', 'bbcebce9c539cd');

/** MySQL database password */
define('DB_PASSWORD', '41019425');

/** MySQL hostname */
define('DB_HOST', 'us-cdbr-azure-west-c.cloudapp.net');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'q5Q$~?iZyyfMrrm/f*=1I`TUM()~/#Mrxpb=kM_|=`8m>V]m:iU]Hh#+4&e.Tok,');
define('SECURE_AUTH_KEY',  '[lb(W,gA.xdfz[ZOT[g/<@xB9~g>pG!LAn >V`WTf]t1_L|pM]sYM:qrGT>gf2=2');
define('LOGGED_IN_KEY',    '^}Q=GChx1a})iXR/{a%S7#2qh}qb[Lt$.L,N#Jg8@>%F!4Lm.4(ZYmu9{uJ4,?UP');
define('NONCE_KEY',        '{|]wHU+^}&[f%) &]tYj(bO&L6pSC+B[B?;A}3Wa9=#^3Ogk5zVuB/Zz?:vp+4-F');
define('AUTH_SALT',        'Exn+8;l+A|OX]}kX6{vDI!X|H+07T7>tF2l0B_+cPWn^{]NtG48M^D5DTs3L!h/P');
define('SECURE_AUTH_SALT', 'RQZ94&OV~9XAMsNG5S[KGO@Sm49r-`/@`cu]wGLKr,J6|>!c6lAd2M0)Io#1w]6~');
define('LOGGED_IN_SALT',   '*?cr&-Av}qW6+%s6]3+x op*N%L7a%_?F`xJp1PsZ0`b*IwN>IWd@ERfYj.ich]P');
define('NONCE_SALT',       '`<B&4YrpBNQj.W54-.v,0qh?JvZL<lR3{-r;pPfcowc_UT`<yl(*Uh3bL:oonX<l');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);
/* Multisite */
define( 'WP_ALLOW_MULTISITE', true );
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'um6p-testing.azurewebsites.net');
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
