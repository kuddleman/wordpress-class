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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'L5t$Qj%5D4or~kdQr,Cy@y6rk>f+B;]S~[}Z2KNO)-;]V!Rgn^D_L8tI|xt3GnNt');
define('SECURE_AUTH_KEY',  '|_6vtA|*K*(^nCObrVvV1cvr3$@_XXnNr}+5S+&~9lzLp|?IYEE1+jcEJ5Go)Jm[');
define('LOGGED_IN_KEY',    '>6lHI+Bu/1--4l/~oGUxeOZ9XHk?_[=VV)MYLcc+l,aC+nv7u~Lv/s:|Tg8s`9&X');
define('NONCE_KEY',        '>B:l?Dl?^dFC+r *h^bEQ$AV%-V@Qhb2P3Yk #%H)0U)g,mBpO+JCk)pxf[37P+k');
define('AUTH_SALT',        ']}e_*4,2<k+nXb}I0W4Jom8n2Ep?,BX<[a{Q}&f<c2Qsxj|8/(Zq54`9ByQ/TfYj');
define('SECURE_AUTH_SALT', '=pA<9p$WVENVoeAg;@ :CA%.?#&=)syiCr|i||Z<}!vVc]Iay+uL>{s:Q-,Nl7UO');
define('LOGGED_IN_SALT',   '-RcPNAD77|3wOVwNO9haA|q /_d40Wp62t|k39MA40Z!e67&tl3!@R)JOfTF WX{');
define('NONCE_SALT',       'I-|{0~dPfsAAeIr9+&[4GXS SBW{QT5s.ue%|G)v=$-w>+Bm3WporbA@Ff84HqV#');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
