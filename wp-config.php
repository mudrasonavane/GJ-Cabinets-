<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'techn43k_theme_test');

/** MySQL database username */
define('DB_USER', 'techn43k_theme_t');

/** MySQL database password */
define('DB_PASSWORD', 'pass-123');

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
define('AUTH_KEY',         '::DX2W],=8-~-MDJK53d]_&mF&O|Ur%XQ#%8QPP%@H;g4KbQEI&:[ciuA-R>7xrp');
define('SECURE_AUTH_KEY',  'BGdcj]$uWO<v(42CR+O~Y1G(]s*GVY^>J7=qW%R-nya&m|2<7hmk>I7.|Xh&+nF;');
define('LOGGED_IN_KEY',    'z<ZO=;AvNcnP{)YHAf-+zsU=u-@x<>$|hlNT}PF!VCmb+,Ca{?(<+oVACyLAuf3j');
define('NONCE_KEY',        '9%jOt&hNuP<sxT[^BOt[Si0cpQP@|X?1bm/|W2-w%K%`vp---.4-sIiWGu%>]<vj');
define('AUTH_SALT',        'h<k!|;=6RBbTX^TP]?y;jLRPl{5`/XRD/5[Dnn_$?y}3OgJgu%rwVVeB~<Z^o5(y');
define('SECURE_AUTH_SALT', 'JLK=o=G5~RWoBjLF1,YB^+78e-#Z.422I-a1n2eB!B!DG|&;zB40#C.SS/G$j(/n');
define('LOGGED_IN_SALT',   ';Ing#=yp=e8OrcXNc11E0Q6(w8z[TG(eJPE0`Gv.+FS!,CY@AwLNPf}|>gwOy-U(');
define('NONCE_SALT',       '3`vWwn*eVj[H`+h{pXK<!YBn?b0L`;[Z#KT%cT+Wepa~.Z_N(DLpf0qAm+(K{47S');

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
