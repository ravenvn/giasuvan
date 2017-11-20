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
define('DB_NAME', 'giasuvan_bc');

/** MySQL database username */
define('DB_USER', 'blogbc');

/** MySQL database password */
define('DB_PASSWORD', 'Mickey02$');

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
define('AUTH_KEY',         'A[88b-mTnRjR/~0&ZAO-L(T4iO}M3+0(x9sf)uED T7({zr~=hiLfw|rfae`1X^M');
define('SECURE_AUTH_KEY',  '}?fFk%J9N#~-dJMSD*o7GbFxo~Zag+Bs}Zu3=8|<}byhOYZp~q8]3ZLOo8I.bH]1');
define('LOGGED_IN_KEY',    'MKIe)kR`vjE?`tH[AT[8!Ot4VS`bWUyR^!-df.{ZR3M6>_Gb+Zdh#Vn_S/&<g^ta');
define('NONCE_KEY',        '#G#v=|_34wY#8-Qlksf8#F3?V`%@k?9 `$spngS?mT$X/d}aVE^]{ j!=2Q-Ehp/');
define('AUTH_SALT',        'YV}23eKU~;~B4ek_9Tg|X%y1al0R|(]C7wE8I._zcioo,E<C!zYiZ*ZD..<{h2L^');
define('SECURE_AUTH_SALT', '?TRP}xy!ZVNiDgXRfIO3}mH,WN`90K*}q5P]YH&!a(1U]ut-dL9]!8t|fwVA`zkB');
define('LOGGED_IN_SALT',   '1]tcXW:lsIdw%SExB)FRP-NoDg@Eg# {OGXD57aj$2ql|sA*5]9?S&b2ZzQoG[&+');
define('NONCE_SALT',       'wOXCzT%/-Q L_q/j,TGtO#&w(2>uJ!KCkP%fTc`LP*O<q`_0[Wtb]^H^f(Ppy?tw');

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
