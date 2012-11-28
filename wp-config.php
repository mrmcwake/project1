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
define('DB_NAME', 'wordpress1');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'boarder00');

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
define('AUTH_KEY',         '-jPZ`#>AU|M*%leb.Wh5Y{(ZR>(|r[+e(zM8Y+=:Ned}VBdkyY492[nzK4$?u2T1');
define('SECURE_AUTH_KEY',  'f>EFhL2Os@WW15MJe!nL:qpJ]gU(-XXMJrJWLS@q9SQl[3i%y}vz(!Xu;sU5/eJm');
define('LOGGED_IN_KEY',    'YVl4PtFE$-Uc^_jcp#&1jjsVkd`GCxe0&ozL2AaJ2PbaG:5vC-&}6tv$FFwTlhxX');
define('NONCE_KEY',        'AFr.;!|[rK_5/W O{{)s^n<Ayo@8-):tr5[|ZCC74R|D`CLds-.7DuY n(8I(NsV');
define('AUTH_SALT',        '$ywMt VQa >R}p/$f2~r`*wg`+|lt&M4]EVN#-?>rP(yfSwuEI$tp+jruPt4!Ifz');
define('SECURE_AUTH_SALT', 'E1vyDP5:OR]|.D8+zy:,y79vXkqn_qdy#;=o`G-y^)Onk{G<^(EIy(f$+hcQ+e~H');
define('LOGGED_IN_SALT',   'Js&KoNpBFR%U=ed,H@H1:5e#>BC]|kW+M?_,P96SH0&N;_Ym$3u?d%gI-o+(XEpL');
define('NONCE_SALT',       '+[$D]>,]Lgw,^b9I^]{xKIOe8|<A7Y?7Ib)nWRP|IBj2IH??!O~GXbm_ 3UROW4]');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
