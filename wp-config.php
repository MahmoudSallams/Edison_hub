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
define('DB_NAME', 'edisonhub');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '0SLO.T/DFv)K{W*i`[GJ~(IL@(<q#,4g^p`CZ>h.R`NK-|(!pfP[,{<1zD#1PGbB');
define('SECURE_AUTH_KEY',  '>7{X7xC(e=;YemGvQK$rMj]nB[dyrtcd(T?@d(L[u#S<qIm$%UJ=KHoZmN,F2u:M');
define('LOGGED_IN_KEY',    'r.GxpdxI}Z1W4FCoJ*;Zln>s[y9W;;*l#J4TN$A:hv*gBU=u!dwu!6/ml8m#1^[@');
define('NONCE_KEY',        'WnmP&&ql]krD?ux4H4R@n^gJ}qMz7+pEj[x{Qcr8{d)HJ+y<X Gj-$VEprhX,em.');
define('AUTH_SALT',        '5+3Q9JO$p7@LGbB.m66pXR1@9N*L]PS^O9ZkRq%a?2eDcHqR8n)!lJ6Jp&Bd!e6[');
define('SECURE_AUTH_SALT', '$r}lq:w=|0FP:{|&),D2s/8El0H=Qh?HSM}@|-s@aY,Jq)_qe[,+W9Ic[!l/2p`^');
define('LOGGED_IN_SALT',   '@mEj2aJ,N#!c- V9-C7fLKD+MxxM4l?}8?BI|{3IHH;38x`@vORW`#ui>@#TEZ0+');
define('NONCE_SALT',       '6Y,Kv>K7:k;Fo=Z!r:+E8u0A$;F:z#R7.2.![.!NX}NxX]v*_h*0erj*C$# GfI<');

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
