<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'vstudiod_wor2');

/** MySQL database username */
define('DB_USER', 'vstudiod_wor2');

/** MySQL database password */
define('DB_PASSWORD', 'CE2hm0sn');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         ':I:7MfZ@3kZyPltXs(lEQ}jmy^ +C<P3$Q,J>r-r5Hh!v^PQGXmB<|@+>7wx 6KG');
define('SECURE_AUTH_KEY',  'l|~-`?.Xd;5H8<3#t67DL/|i5-&WR7|0>G({T*ap^u876(U-tJ8w=4RVTd~b`dRQ');
define('LOGGED_IN_KEY',    'l[{_VA=wyfP8R[}B$J|`3I?->9^-cztDP_p)D-@+Hu$wi_k1F@32m_F~fQ})YUi5');
define('NONCE_KEY',        '^x9{1a@<*=`{FKDZw,N-h$AW|F]-?-vP+Smc` CM_s)XB-/+q#<71(],%F3f:,h%');
define('AUTH_SALT',        '-@J7LN6Z/HUH,:LhpM ^*L0Iumy1c}tz*0((f|z=;2-^1n&uM^jUyK.:KaRi&OhM');
define('SECURE_AUTH_SALT', 's3h-2:Z4bon0^lS%w[^g%wV_XUdn@hH=-{Q.BhG&Z-?:QepN%4gd-O9TW@/>T|R{');
define('LOGGED_IN_SALT',   'F9War`C,scfO-A8&2H>TEck/GuV26eYYu3ID3Fat^5Q[cRu=+y+r2--U)REJ_AAK');
define('NONCE_SALT',       'GO`4t3 8;<=|g|<Op#Wr#-Ph]> {&{mCztL,hW[kT_/EZ|`US)^##c+RT]J+l1qI');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ety_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
