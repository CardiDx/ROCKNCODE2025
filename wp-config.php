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
define( 'DB_NAME', 'style' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',          '8:|cH}avGw&Y$-r`xI#f]#|2E][5j.t:BHLUZsTV<4RgpQ|sCACjr<tMEs7$P3Yp' );
define( 'SECURE_AUTH_KEY',   'YhpM(1A`;,>tt*{/NW%We.V^{KFi!(zBb6@T|ES-E9)xUF=&] -mA+z%0@WTp[7:' );
define( 'LOGGED_IN_KEY',     '//yV3;8Dc?|GiY6C8Q/-Dc^H@/f]8^@9`P7ODOt=2|yV6,>Q-@-ho1;w>Je:E!I,' );
define( 'NONCE_KEY',         ';]$&.%Sm[ -Jh~^Z+ML]&CufT?2V/.6%oQ<2nDmuN9ZaDnh9KA[|~^==@1FWz=z{' );
define( 'AUTH_SALT',         'T_h0VK-g5e[z=>Gx}[]@)volYPSB|yED(O2;rUg[j.K:O=V:EzzQmtV7dhKGAOl}' );
define( 'SECURE_AUTH_SALT',  '=67W00WemkcHL+Mr#HXwo/Vx!DO@:R[n%RI|Sc`7$BM:BN4L+(tO_rJ<Mh`I7Rp/' );
define( 'LOGGED_IN_SALT',    '`!gwNzPYVff2q-NM#}<gii:.+RuCrc|b|O[Lva#0)O*HU;bDzpP,vP}*D|%exfTr' );
define( 'NONCE_SALT',        'zX;)~B+3A.gV+ap|`+:!N@g]Mg@Jb&*M<*<+dve.},7S-O`^fz**Y_$ {.$<H_V!' );
define( 'WP_CACHE_KEY_SALT', 'Gt`Uaq-;?NR_fozZ)K)cRV3].Fq=IB{JBi@@#KqWmfpM#<I J{p>G;Z$ `p-M5u_' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'stl_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
