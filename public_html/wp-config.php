<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u472523277_vlDdM' );

/** Database username */
define( 'DB_USER', 'u472523277_ZscGo' );

/** Database password */
define( 'DB_PASSWORD', '73xFFGO0uV' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '%Omio;*E1!.iv#.27,x)phx)NA^Hx]I>?[@%6B|the&:/mr qyZijlPdn-r}dP?~' );
define( 'SECURE_AUTH_KEY',   'DVkQf>pTtFuLXxXQAv*H1$Jx2<KOWb+nDXQ(hHA6@v}CnWi*{~HGZ=K$t2/uMw32' );
define( 'LOGGED_IN_KEY',     'duzZZAij2R_rS3.e[acfVF%0Y=Cn*Uv0dQva}LF-Jfx$svfW`1*AQs*nLOP=3L 9' );
define( 'NONCE_KEY',         'IFIzk.q]+=u(1AIfdiZ<{@a Y*3Pze1U67fH]D*n+!o[D3MYV%%n/*u[8!:0p;C6' );
define( 'AUTH_SALT',         'phICg9}RN<{D*zy#2{`hkRRL_hEl5Yu$pR}~q!o42:3! X3f.[}:qc@Vki+Y]BR.' );
define( 'SECURE_AUTH_SALT',  '{bq5/VrHsG8Q<d(EJ[<uvQ:=xXFS*_FI+it)H<p4xs?s<kMX=Ed>Xc*=N?b0WY(p' );
define( 'LOGGED_IN_SALT',    '*t;Ri&|N<3v> Vb63fhxv5u0H~y~d^f)Iw~1hRADw`[z_cZIU3>MGp?8vD}1}Y.U' );
define( 'NONCE_SALT',        '(SMkuO[-c1NGafxboAHqa@csW{n$@%((+>} SZ]lN*59@;Pw@h%L*X~VR&p[[/7u' );
define( 'WP_CACHE_KEY_SALT', '?u}Nzr>U}oCbG=TYb}oJ0ak,Lii.kENWUk!|~=th[dFGcLegQ;Z<&&0qm,qS926w' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );


/* Add any custom values between this line and the "stop editing" line. */



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
