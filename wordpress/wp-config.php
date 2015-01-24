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
define('DB_NAME', 'wordpresstest');

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
define('AUTH_KEY',         '5-dMa^|w |pW3Tsi(5v9{K<oJ:%IJ8d#%6%E@RNXN$d8Tp~;%YqRb2ta,mZuat=D');
define('SECURE_AUTH_KEY',  'qp-g3fG? ,rRIb.Tbs+|Xj;+=)><QOtJ{}@w7_4kt%K~#;ikB855:5=T^Rn`8iO1');
define('LOGGED_IN_KEY',    '2|8p{8?1)~Hclt78oe!F+UDhb<jG$y[tj&kHH|fgJc [=.[*-tu.3n;0MVV7E=eW');
define('NONCE_KEY',        'FWPUtG>sFL5`PG=2|B].I|(NM=@&1]xl2RoBLB(7abB^+2+@,0W//b5aUxn;; W)');
define('AUTH_SALT',        '%c_GcP.xZ-ygt=#vD3l}`T*?N5=ucid3_<kUqY >FsR{xTG9nDfdhs!T58a&] /I');
define('SECURE_AUTH_SALT', 'Og0=-7<lra`1x%y/nOht7N0G)1?h-srM&J~xT]hTR;mrgwIOaf+a9<nv?ybLWp,k');
define('LOGGED_IN_SALT',   '.NG>lFf(a@o8&>woz!FKoy4g<J=I= K~oiq6N=quV[EXe=` 2$an0-nq2xBH^] m');
define('NONCE_SALT',       '-.b^Qr2NB*N$[:X^Su#rJ1L+9RL e.LoT4qN9/|f:jd`i%<`E4tx(3y}&ad&<Ke;');

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
