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
define('DB_NAME', 'lightup_db');

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
define('AUTH_KEY',         '446A<Y#}|**4CTZ8ZmZl6@0%f}12[J.y7.! ?}M:KN&D#05V:^|1.;Vb<U8qXF4=');
define('SECURE_AUTH_KEY',  '<l,G8*yWmg#F7OZ}5a4)MU%mEJh+1/UZ;-DPq17PoJei+/z{NV@=g6`D<xG:m?|k');
define('LOGGED_IN_KEY',    '48XADQLYi78Me~^[0j[QB[ID!L5K+E>;sEIX% l8z`[IeU~iLbB+1~qeQaLBQ@&D');
define('NONCE_KEY',        '~k~~cCxwvhNNL*^h21A6dLJ$Le}<WumlwK4Z[K?RuCcQpTP:t6}%> Yr2bvl{C^r');
define('AUTH_SALT',        'jGY4U^$eNA=HUU2r>sZH/<yL3m++(d#87VM[`Eb2@SzzcL2&,:NO<fM!<oyYGD >');
define('SECURE_AUTH_SALT', 'hthj$ux*wch/P(BsLtc.3ghy/d7wRYPSwfip^s0QBRvSX+t0F#Ew?)>i(y!<Eofz');
define('LOGGED_IN_SALT',   'hMr)|X=%;2]{3LvXJbJ)WLQnGeCV/)Xs?F9AbrQY?AGECHllPJUOXf7NxWkFSH&f');
define('NONCE_SALT',       'AA8F$%_^X::sT8LxLw,PNwuv@P_e3H*p9V83cn][N4&y<d~6O=K}dZ~*O^RV.c!D');

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
