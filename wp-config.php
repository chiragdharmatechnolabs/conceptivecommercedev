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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dharmate_conceptivecomdev' );

/** Database username */
define( 'DB_USER', 'dharmate_conceptivecomdev' );

/** Database password */
define( 'DB_PASSWORD', 'dharmate' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'eXjo{95O.PD@07F>jtkukqiG,k#3P#C)Y[,B(c}K xGT+p_6weQ#A-S;Nl,u-s*{' );
define( 'SECURE_AUTH_KEY',  'c+ -.B]oZ1P|KJQ:@jJ8BQfw48G*I&yi}LR-!^_!/Rw?p6gO#YA7W5*0P<Z k<iX' );
define( 'LOGGED_IN_KEY',    '7W#inAx7^G:L^~1&(a011F+pDy>),~@w7#+ExdT:-+%/kJgmTQ;R<a~0hcJF4xQ1' );
define( 'NONCE_KEY',        '.HVL!*,*4!iTZ<ap#&8.tLzB<=X%nM7Ks1`^[uKS8G4J{6I?h@7.FXr+6F^L#A_J' );
define( 'AUTH_SALT',        '%rd=va464UjG[5w)4V7a <QFidI@s[> ^31TvlK!ymi9<N,Kht?|~w}39lzHhoOH' );
define( 'SECURE_AUTH_SALT', 't0O<^p`VL^Qi#D|[F,w49 s(6Kcco+d.jXe<Kb5&<$GCB-6*NXZ5s7j?H($W^w)B' );
define( 'LOGGED_IN_SALT',   '{qo+0qTVpu`{w5Dj!9mGL!#:-8@7F=lFf(YWUG#5=@R4uT%Q;_oqP+^5MQcw/M }' );
define( 'NONCE_SALT',       '{UTY`=8QM3Es7o^m{)n}%CZv=)(S`%P(QVd:l!b(bj6M842)TnSL]Gy2_l/[+s8@' );

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

/*  Hellow World*/


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php'; 
