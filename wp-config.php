<?php
define('WP_MEMORY_LIMIT', '64M');
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
define('DB_NAME', 'db1053102_intuceo');

/** MySQL database username */
define('DB_USER', 'u1053102_intuceo');

/** MySQL database password */
define('DB_PASSWORD', 'Intu330#789');

/** MySQL hostname */
define('DB_HOST', 'lin-mysql15.hostmanagement.net');

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
define('AUTH_KEY',         'w4?Vc|e}C/+OoWLD80 ^e_9+R}{V5%-Bs4l[in>, r/}:0CfQ{cKy`/Y,{fdxu#Y');
define('SECURE_AUTH_KEY',  'xLoj70?+p>IN+0w 4X=f2m}}!W;TDy;wL_sy~!U+In0,pP,9@5r3FI%!KY;g9eHE');
define('LOGGED_IN_KEY',    '] .iBfP>Vz4+9n9p(vtxtG:-@-__q_?9~Rhy`KvQi%b3MIQWDsL;?9ge8 s,$K+v');
define('NONCE_KEY',        '!w/s7L_dQ+MaQcy<n#P6(YR)gk%8BPv`ZO-]pMc}nxghi2~Ob{tX+{6Ay/84+ |B');
define('AUTH_SALT',        'N>= z+=dA=g-#~c@!{8eIg@=-@H>eKmtJ:#sD3VK`eN79++5N.YJ:}0w@1@`jOQP');
define('SECURE_AUTH_SALT', './um/(XP2U#-=:$R _eo}$pM|4c<DQw))ZLPk_k;(=Gll+E|9h|>/X=MqEZhCFB>');
define('LOGGED_IN_SALT',   'U^4[]iA#Y|+Twj%ey!5xb)+_HeX|Wm8pE%-Mw<L)f{phr9`6*<]H?yQFs/~^M?.]');
define('NONCE_SALT',       'au-a9#lt71i=}S=-[mn&>a1]dg/v9$6A7%|Ws_kau+Jcqc|O0H6|BwLeiRyPO+a|');

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
?>