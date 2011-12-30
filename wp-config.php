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
define('DB_NAME', 'a1903004_WP');

/** MySQL database username */
define('DB_USER', 'a1903004_dev');

/** MySQL database password */
define('DB_PASSWORD', 'hcef2012');

/** MySQL hostname */
define('DB_HOST', '31.170.160.79');

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
define('AUTH_KEY',         '#e$O;#)2qIn2kJUI1%4SgYet+m<Kj(7Y3mgpU(DjC~u,*WeW(>E =%N%@FEh0`l3');
define('SECURE_AUTH_KEY',  '[WS>/5XO=6(*jd whRav+)+I77-us.kQ(t3^uFE+qSL:XmM+Db?7@E082|fVkF`E');
define('LOGGED_IN_KEY',    'y2/E;Fa:*=j>lk1A0P+-m!SFJBqv~0X~FDjd;q!cuP!8qvBMLn=; n<|?pNPmUSC');
define('NONCE_KEY',        ' /GsRRb0L8ohK<tK^k#Y51P$7-L_=]Q&?}&M;pJRr743Ih#9E|yRm*W,~9!]m0KB');
define('AUTH_SALT',        ' yzsH-{u$4oX0#`VsLU-m#s[VtKIrIF,jjQ^vT9cnN=MIXU0td{_fF$|rPc J[72');
define('SECURE_AUTH_SALT', 'Mp|0bb[Elq#5ddV*0v*)mZA{Kp0iy`4^}5kDU]?(*W}H>w)>^gC-`n`,QsUKFy-i');
define('LOGGED_IN_SALT',   '+Ce)p|)z!qeWO* Fxe .Bk/-y7U!MB*c4@BUS?BxKFMH-u|=|=<_L3:xw-v-_mv&');
define('NONCE_SALT',       ']rAlK#oS|!y{*gloLX$|8_Ibyz(d~ 5n9eVJ4fez)T(+@CvuG?ee/Ij]Ly(Ba47V');

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
