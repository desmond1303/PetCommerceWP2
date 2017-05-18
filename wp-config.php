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
define('DB_NAME', 'pet_commerce');

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
define('AUTH_KEY',         'mbtch/a!3;:]=(8N.-L@p9vJSZ8%3!to_m,>u@u.J?nrzgjqg/8Doi2`)$Qpb ?r');
define('SECURE_AUTH_KEY',  'VbZg qpXNNT!1}x+&W2{+d;Zs}2$JPqJ4Z7Z?%3j[Ek3U3XmqLQ`W?rb(OF4bC,t');
define('LOGGED_IN_KEY',    '8^z=c7|EGZoVSSI(U0mA3&T]$KJ(l-!dN7`Vz$ZI{oBXG~<r D3DO7_eUedsop-=');
define('NONCE_KEY',        'UQg&ye!A>eL&GvJ$.<-RKkT@0d3dL#tK,nx#>:2y~IM!K5CqAv/s9)W(qX[H:|3O');
define('AUTH_SALT',        'IDT)%5%Wp;8`b yL<Wg$[Mp6qPy{x))T~IC62X05!hN&pKoP=cWea=b!H`OJ}uRa');
define('SECURE_AUTH_SALT', '%uAgpMcxH,.Yfv+z^:QM|%;p9hUi)tkH7a*^^n:O%$Q[4eRia/@f%%VRQ?Ot|2|<');
define('LOGGED_IN_SALT',   'x%qdQU/i,d+c 4WA~</M`rU#?p?7NFq_mH{J}/er0$QsCh7cJ[QZpZ:z[mR$MH^]');
define('NONCE_SALT',       'Zdl6`&%;@d9DhQXM8_@&%3rKx*<1_ZVz7^:BUVjc2J[y9Gj[ufgR;5 ^WdWY|;SQ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'pc_';

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
