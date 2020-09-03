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
define( 'DB_NAME', 'farmdmc' );

/** MySQL database username */
define( 'DB_USER', 'wp' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wp' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'D0B|}dIjsD&&(op5|fpl8%Fm!wH*Yq~(h<L8c|% SY]VK$/MzRf()a0EfJQn1myE' );
define( 'SECURE_AUTH_KEY',   'j-$$yULV_x[*W:GFz6F5rJ(6`Iav~fY/_*,9VUfJY8? qDwx6UeA&=YO# C`AuA@' );
define( 'LOGGED_IN_KEY',     'c`19*_7N6^ 4iwl`w]`EN6vncY42@@DXl^+dT2d-9$p`e5i3gHQ|@JYMl53B9_-q' );
define( 'NONCE_KEY',         'l](_Hs=UN@)`pccfvMnbRw]k&$FkL0>OFxlm)e Z^aX9_GF:Y>JBE96o?;.~J.4e' );
define( 'AUTH_SALT',         'K9vQ]DG/. Vz^BjLN.<m*Fc.1|Bi6<xKUnp?uguag9^t<>:@?ydR(=/my`ZlC=Y2' );
define( 'SECURE_AUTH_SALT',  'hZJ2H9%S~RQoc aB=Ec_sX&-l(<BX;+G?7u,lhAxIf(eCt&tzwFs8*0X:8C]tGMh' );
define( 'LOGGED_IN_SALT',    'dx]ZVpVP.~$l3p S]1cgK*KA==,(jXN{dF?r]mxfXG1d.>SDUx{n[ks+?8FnGrMf' );
define( 'NONCE_SALT',        'c-^3`B}=LC+eQ.c~e<&o7kcgQ#7*Dp0N[yjzl&&sW3WDTC+b2F.`u&?fPyKm^3HU' );
define( 'WP_CACHE_KEY_SALT', 'J4(r[)Tf96>jJ_^u^k{J,)H|:!j;8(GHaaHMQ@j6D}lyNK`(2Fk?zp?9Qx_73mac' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


define( 'WP_DEBUG', true );
define( 'SCRIPT_DEBUG', true );


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
