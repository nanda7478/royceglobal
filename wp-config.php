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
define('DB_NAME', 'trimurty_royceglobal1');

/** MySQL database username */
define('DB_USER', 'trimurty_james');

/** MySQL database password */
define('DB_PASSWORD', 'ml8(@v){RzLD');

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
define('AUTH_KEY',         '^_B}YtRy]OPD:w^O]JpSSLh+6<#d7W}zfK34G.^cjC8jl& A-b~Eoug^%G-*!pi1');
define('SECURE_AUTH_KEY',  'Vxyn(o)v:v/E(@+[yV05G`0c!]Ww6K&IIDVa$-+%0}qnM0ENwD9{v-G_)/3v>~+>');
define('LOGGED_IN_KEY',    'IsEGsDSiLV|@%qicvS)4kJS_`L_$x#4_U/jl$>[O!y[&[Kzb$g6<i`5>{}$w/AGb');
define('NONCE_KEY',        'hM ]5=iJ,ESjs520sIy!|,f.*I@4i F75h~Xf5S?%6qf?hUEA/n|Tl^a>v=+of1s');
define('AUTH_SALT',        'lEwi%.^PMd bxsd#qgEns7xACATSxoix1d:Tjb/(9pShM_PY _}MR|?hzp3~a/]A');
define('SECURE_AUTH_SALT', '{r&1eSh AR4$P)D<*c`P[/SbJ%AiRM)DPiLM7W%sO9-?Wq[{Pm*1UE,%y=@1x69{');
define('LOGGED_IN_SALT',   '3TU)CITF)5#d4Jo=46tKueWFsdZ2)P;=Pm_L}IGJMG+)t3+b2h7gERuPG_fgb:i~');
define('NONCE_SALT',       '5FpR9hPIE,yyYkmkqBP!Ji_D|{Nminzu%ET%Z-masVzJ?L Dx+lSdV)rd$w5) Qb');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wprg_';

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
