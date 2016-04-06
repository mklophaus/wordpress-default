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
define('DB_NAME', 'wordpress_default');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'lO4E?ALyvUUb#J)j}B{@9U*v9SZAuO#ex*{yr4YbQju;j<:yMo_qvd[0GuP;8+jc');
define('SECURE_AUTH_KEY',  '{]v3,$+=mIl4@2*i.}y*gAf$wwi&on@zpn(P5kF6JLUf9D10c&3KF$8~eX3QJBmz');
define('LOGGED_IN_KEY',    'H]ahX!d^jX*`!AexpYlaqw?K>2AT$(vBW>JOK$rqJP9DAek,o0Wlp{+|Qg+hR5<r');
define('NONCE_KEY',        '3lIZibk@{eQ1@f$Zc$Ic[LP8n|pT`6qgX=c0*98NwKlnhKc^%$t@ojW62JR:wKsi');
define('AUTH_SALT',        's^a*Y:fbT5/a`4Vx?S+/B&aWIxWQF*Y*Wy#aM^e<d2;.Tn %ArR%$`F>*4L;]h7I');
define('SECURE_AUTH_SALT', '1JarN[6!Ri{@ja|d`E!H>f}ka)gbaUQJ5(bn9d,4efg*],/H*Pp{4:WtsXftM@<p');
define('LOGGED_IN_SALT',   '8#=x8j~z1;v)Xj[^I#wt(J{`= 5LGoNw}K0#RB2}%BGX1v7ABu(0AzCM14>R3_={');
define('NONCE_SALT',       '~1e3N8djR=o;-%e6L71/D/H;.N+Qqsq<pWCk!WEQxT8f#Q1g|zFdC,UdZlm4F(96');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_uninc';

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
