<?php
/**
 * this file is managed by salt, please edit it in /srv/salt. If you edit 
 * it here, it will be clobbered.
 *
 * The wordpress configuration for `sexysexypenguins.com`
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
define('DB_NAME', 'WORDPRESS');

/** MySQL database username */
define('DB_USER', 'wp_user');

/** MySQL database password */
define('DB_PASSWORD', 'LexyasAd');

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

define('AUTH_KEY',         'Z csN9,MJH)?T2F&T7USB;nfZ[};k]lDWX?;>NFI$osiu@zsN5.,]p-1>&(?ydy3');
define('SECURE_AUTH_KEY',  'BY|Q?%hGh1iv$eDbyi#^vj3R;G$!^PWfh|)K+,p4(^t|@%WtThL#{6&P]Kh@X6MD');
define('LOGGED_IN_KEY',    'wAY`|(sM arxO03PI[Y%+]xYsUp-RA,S58=Ys>vVm8<3#zgLGRLI|7`D}.9[dZc_');
define('NONCE_KEY',        'D>+!lMyLR!_G|JA9[voFHLeq: D+IYPH&A>M)b+#y+e5|/w:EPG;I=wwvMeRG6C=');
define('AUTH_SALT',        'oDo-g-T`lxL9bN@d/TS1K#KK{G/#D&Kz:r[3tcFo*sQqshnQl{JnK<e[P$sbMTAQ');
define('SECURE_AUTH_SALT', '__Vry+RU/r{9-dXaxxSz6p6FvpeT;e.S4Yt/PE$JC|,x_LMG(.Kg|BKtEu=8`!/{');
define('LOGGED_IN_SALT',   ']A)rL<zg+oVh$UD]Y5D_*B>>=]c<tKoNR-SJjzB-t+X>aX,NUmxMbWxj}OLUrK*@');
define('NONCE_SALT',       'g~u-!X1~stE@-pfTD}`!V-yEo76%)h3_X?02?QHo]Q&RTR-w2W7F}V^ ^#{$,zbu');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_ssp_';

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
