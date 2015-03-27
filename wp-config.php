<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
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
define('AUTH_KEY',         ']oh0r)+87?JozNYeX@886#~Q |lL;C:-(kTB_pX-B1,@|wFCe&L4JS4k9#{s68LK');
define('SECURE_AUTH_KEY',  'EY#W13)UrVuH]9IX-kFUF9H&P$h}Hf3H1H$FZ>4W@o4]6t7`r},!S#f#Z*[{z;k(');
define('LOGGED_IN_KEY',    'Z-I>h)&G-0B}*</_#YP@)-|BX5#mq7xry%P-Ig?Ar:O%Es l,S&fJe y[}D4X:%E');
define('NONCE_KEY',        'mp; zQF!0lllRpnw6!5[UqGLi;opu(>D0KiqiuQ0{a+/7q^}_uJDe!zT_z,D(qF+');
define('AUTH_SALT',        '1QT@v~~E$^e^^>_LM%B6;h?Dkdlai<Q;{v89{U]z&*821)J/uZO<@78Yq%:#Qwa?');
define('SECURE_AUTH_SALT', '=Cx2zmsoC+>@-r~{nHb(!4=8<$B0 Rs_CGE)]-H-X?~BhF{Ji||3h:&uxO?`~j5n');
define('LOGGED_IN_SALT',   'u;%c|+q,E=[GpZYiiVeY/yO2=`5j30ip#.MJxicT@xJ2{2X,AqkC_omoE|]1&0)W');
define('NONCE_SALT',       '_;=$k-I,?UkBWNM_>!@L)|N%8>F=}J$jZ{V3364b(vJ-rG{+>jd}OmWt<=x,vw+r');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
