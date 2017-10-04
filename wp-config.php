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
define('DB_NAME', 'voltz2');

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
define('AUTH_KEY',         'Zm_Vbf&fHARDUT?ARz^T=@xul}JHBE_st`/BS%WR)mZkoK,#ab1iXJ35Ae:7V(LP');
define('SECURE_AUTH_KEY',  '^:F{YT0vZt;ON%Kzf)sabLw)WiW4ZihcYFJw=fjeO[6&_>nv;`MGLeae#{i*YG(J');
define('LOGGED_IN_KEY',    '~1Zn4E{2.O4aO>MA&y5[A,DD;_P5%S&yhrtSDhz[T4hovW,>=Am|b$O_!eOsO~OV');
define('NONCE_KEY',        '6E@eRQEvXLZuUW(]3i(M}KTjdR{5Oi&9uV+F([55F+KBL9|{nZl3?!=MZD4Qb.P(');
define('AUTH_SALT',        '_1T.VG T@71Bk2;O=h<jEOK%Tg`wv=5[%D w,4I7=$o_wjJxnMcgjs);xLX=Oob:');
define('SECURE_AUTH_SALT', ':qZ#C`shOKegB68^C]I`2]i7et4eef.Cj596;gWis@P9jO_oL{26Xaa7]&A1zc&:');
define('LOGGED_IN_SALT',   'W~j:tsqu-w6E?5K%nzKA`/H^SP$)]$VZXtYR|A|dEUVlZGR7RG~r0ksz3T0T? ~)');
define('NONCE_SALT',       'Rq6^b,Ms)Fg]Fksj)5yqH;_@eI;DNn GGN;:SMj`)%V+80^E~fmGbeH ;2AV3wW`');

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
