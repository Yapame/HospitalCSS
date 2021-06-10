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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'cirugiascentroso_wp' );

/** MySQL database username */
define( 'DB_USER', 'cirugiascentroso_admin' );

/** MySQL database password */
define( 'DB_PASSWORD', '@Yk1Fo%HiP=]3tY_]R' );

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
define( 'AUTH_KEY',         'a^(@hm0u4(4/LfEll2Lrqqs$<wG&4>>%q5VD`gHznG@PVAD)^9_qEq(25;_v8AK)' );
define( 'SECURE_AUTH_KEY',  'u[8`tYV1%@N+:,9}(b|t3H,+w%Db[#cMC[A&6}:}pil&7u>]Vw:J,=9MFi#1z;e6' );
define( 'LOGGED_IN_KEY',    'lk6ANn//YYCvF8HuH4k>49=(q}A_hOJSjJE s.*sF[mkY(*jpc%zO,j5s-hXE+&Z' );
define( 'NONCE_KEY',        'USf*Vb_^RAC_#*xr:)A8>3w51^fH#;3*?|O_|`ix/KIQtAm5gkzY[b6jD9 0wy~0' );
define( 'AUTH_SALT',        'v9>e}+=H{-_@EMt C<YJA~oNZxbP_s[SdgPbp_t 9KVl!rhzX9`c5:E.yz8SQ.Nd' );
define( 'SECURE_AUTH_SALT', '~rx`Iy~]AssP@}~tLVV]Rna/_<g; jZMy59hLZ<@&YZ>;Pg<s1JQ;_k6_Fw[G0qd' );
define( 'LOGGED_IN_SALT',   'n{GK~a1eP>(?sd1ohCw+./&vq<^|6.2X^c,9I> sF4:/8hlo=QC?Z{PGD4kptMQ:' );
define( 'NONCE_SALT',       'TN#SGIpJ,4=_sJX1CGG.<?Njbo}Lw2*RZhF}ilj0sm!l:s13]q:jB$+:}.pnhC$Y' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
