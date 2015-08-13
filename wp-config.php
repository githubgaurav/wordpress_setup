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
define('DB_NAME', 'h2blackcab-wordpress');

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
define('AUTH_KEY',         '8W^b>fK c=Kg [SqA8m:MU6q6u2:8#~S3K6;0N4WkC[_zA>N3:-r#2_E<DtlPBL:');
define('SECURE_AUTH_KEY',  ',zS7CoZPp(:-g+w*F%V|[PA<hcRmL YH#6L,?}im%SxQg41G_I9&k(>B@D>Uz}-v');
define('LOGGED_IN_KEY',    'Ja~xX(i~e7R>[t;7b!emh#bI#6jAnd!N:H[YLMutd#?`nGZ>M>q]z.NL:#*]*R{6');
define('NONCE_KEY',        'z<IX@|5@C]iv{*~vf7V*4NO{|GM&Av0I-I&!7XI1>=vC7T;#imizYN`b<`<8&2Mw');
define('AUTH_SALT',        'l>o_!ZeQDiy@K|9#TQM;T#l2?S:{boRsp(nr:`QKLd#|da+WhOU9K?!8Be+i5I*T');
define('SECURE_AUTH_SALT', ';_:U,:|]L5g/!e4TXP>j7dD@gZ~{;JqF|_~tcM:AM[Nd8!L1@Z/h<OT.B|^6/ H]');
define('LOGGED_IN_SALT',   'Fh%sFYgo9>5HDEnS@8a8q(PwPMv5:x.fl7Z*/AD*I9zI!,>/ s?565@30LjjeCO>');
define('NONCE_SALT',       '=e3}cwKEn&Mbm,cqUX1LyK_LnAR5?^@w ZGTC9~i65,??zNE{Pk~9/iBx@xTRNC(');

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
