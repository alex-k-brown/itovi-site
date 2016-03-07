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
define('DB_NAME', 'liftmedi_itovi');
// define('DB_NAME', 'liftmedi_sandbox');
// define('DB_NAME', 'itovi');

/** MySQL database username */
define('DB_USER', 'liftmedi_itovi');
// define('DB_USER', 'liftmedi_sandbox');
// define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '=M&8zI8Tc67;');
// define('DB_PASSWORD', 'b$NMU7P}0WO}');
// define('DB_PASSWORD', '');

/** MySQL hostname */
// define('DB_HOST', '69.195.105.55:3306');
define('DB_HOST', 'box1086.bluehost.com:3306');
// define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', 'utf8_general_ci');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '{/AqY `/Ty_pNY&2H1uvc:]P1w,.T){z,C1HCr3YJsxUL{:Gk0fF=pvL7cNyw*E@');
define('SECURE_AUTH_KEY',  'fOC-aN168J|J|Z<uKLC/H7+J}|~I(A3V@-{V9g-`|@5nWn (FP_lNqVE:l1*[F}t');
define('LOGGED_IN_KEY',    'V<~q;-%,!]{49s_iDz#89{!c7+y3-|o@&-54m%V`r3E8%@1u=j<xxna9>;=`SX3-');
define('NONCE_KEY',        'qC/2/&I]4rR4+#-I3,=+r-(zg=s~f0Ku`%%Cy^d1.tu*|r]kF @(ob;wus#_OH$b');
define('AUTH_SALT',        'KbHUfT<i}Gni{w|Q>~.UMq^aqwlsrA9?a8JaL,CkMuy|1~va-VDoPlw<W{FHFng9');
define('SECURE_AUTH_SALT', ']bu(eubNat)?QyVPUI#Zs}{8-9S~sm-vJHq_OYhItU|%VSGq?O>K5db]vtyDszGP');
define('LOGGED_IN_SALT',   '~WomG/,pUT4j%q,m^RZkd)0_~dez;>*y<IL#_|hK7.DmR+<XCIef_+#!n|P2L|hG');
define('NONCE_SALT',       '3Q!uJv@Q|59mXE-.D,2?Kiv,caR,kK6<R+n^M;]OI#JgEc[;X@)^+WVIv[8BoAYD');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
