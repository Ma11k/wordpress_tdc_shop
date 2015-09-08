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
define('DB_NAME', 'maiik_tdc_shop');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'tdc_2008_2015');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'aH_VB_u;v8^xG5nq[I@Lz((gNqbdI Sm}mi)eCp=swMsu:Gi7A{BvH8:z6{crcT:');
define('SECURE_AUTH_KEY',  'e Nl7c+Nk/~jeC17B,R~T`ZyZ&yU>&Vy;D78DMCMZk/V6B+)~_boas]yABLk*(92');
define('LOGGED_IN_KEY',    'fQv;xl2{F8EqkmVqgi(SbjOMv0St1r=!cW[W5@K]85%Mip/JA^UFdph0yC*3R>vR');
define('NONCE_KEY',        'jEbp_eQr5# I2(3}FmOhk[~lTE.;/2B136]@z9aI^r2sR3PLFP}lmch4H#Lu-r<h');
define('AUTH_SALT',        'Sz0=i:3faCDTuT|uj(cbtD:ga;y]$:C4_@gi7oPQD){9q6]m+7R)HWi2=}dNQWH|');
define('SECURE_AUTH_SALT', 'x1A#]XB*|*Q|]##CI>7kMtARpCcKOxFIT.Kup6oMh~v|2sJW^ R^L7{ey^^>gXl(');
define('LOGGED_IN_SALT',   'a%2LjtpJB-]8<-]/O*}P1ljBuk9L6IKTm0q^7y0?jC%}p^+Wt8CD.9c_gt,crm2!');
define('NONCE_SALT',       '~R033(fKP]Sk,.d{=Ec%jChgSWA%xUrgdc~gCY?BuZ/5`-!duNdo9_q(b-VY{#Pi');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'tdc_';

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

//define('RELOCATE',true);