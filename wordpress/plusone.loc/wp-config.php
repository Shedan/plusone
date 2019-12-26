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
define( 'DB_NAME', 'plusone' );

/** MySQL database username */
define( 'DB_USER', 'plusone' );

/** MySQL database password */
define( 'DB_PASSWORD', 'plusone' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'td`7*XHpi606]Kwk[a,H!+juwxN,Uf<as}v(/9m+/dsadqKAL6,i&uIZS9if_OUv' );
define( 'SECURE_AUTH_KEY',  'z4/4ri#Qg>xkXHf?SIAolf|/ladWpGu/i;y^88-.}Uici0R2=`]^k4hAF@i/?ntX' );
define( 'LOGGED_IN_KEY',    '<!4pcJ}N?t`c.z~Q;zczq.gfIk_hPH(sH#M<=*iuQUY(xy+9fN^5VW8$9~fqr^~Y' );
define( 'NONCE_KEY',        ']fQNyyA ;.^ f[/b7D9==2^EaJ2p>ti{#{tKmF[?8 R.#{3PCshl]eOBQlf-X/-5' );
define( 'AUTH_SALT',        '*+x!ST#LnF%QWWVBLv+7^VOxT.6r,0WkM$x(.XX W?k-I:EP%~c87uF?B>/8n<=R' );
define( 'SECURE_AUTH_SALT', '+EO1@P<*f_Q=p~?%OhRo4qY2X+xk#fg2Od;,Yq)*WByAW943=kRKx&YDt]pX<<,?' );
define( 'LOGGED_IN_SALT',   'gXSS=_r)1-I%W:7I6;^&cd]*HHBYN<#={7<kgrXXeS{?@(_o^cmP1r<wdo{G)(^>' );
define( 'NONCE_SALT',       '}ivfhym!FX^ZZxr`Dt{y^V=-JZO(5h~/d+-|AOqKe|2<PZ/t0]8qMHk5]K&){y7o' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'po_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
