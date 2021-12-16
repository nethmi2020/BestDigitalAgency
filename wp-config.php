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
define( 'DB_NAME', 'agencydb2' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'WA- >5eV~uba71B#@riQ.g`Q_#6?KbcvfHHmZFyj3~:Vu!G3^P}{l#&4`>jJL1{$' );
define( 'SECURE_AUTH_KEY',  'UgF}1KW|6tO{N`G7(-mAFcL#6TfNF;BC6O-5:Rq!=5Q$jm=<u)Mm|k992hBohk%$' );
define( 'LOGGED_IN_KEY',    ' -1;29M<Tv&+J!x&YtuEq2NUAo*`HD~I$(LwTw5SLTTzgHWb_`*hX*!<bnmmxwb$' );
define( 'NONCE_KEY',        '~#.R5^M]=Vfm>92<{EHTAygiZNkUOt-X|Kvsn=uftW6L<NC1w5nt`ifTl]< $#=w' );
define( 'AUTH_SALT',        ':kN-eYka2i+dDzPSE:q9&LJ*^Wn@Yo)Z7U;kX/3PB$3xvS*|G~T2`,8Jprj(p5ng' );
define( 'SECURE_AUTH_SALT', '!kS7gV*R!&U7vOLjrf!sO2:V$snx!YA*Tq`ce*r8}v7+dV^ZuMPJIs@n= y`7;A5' );
define( 'LOGGED_IN_SALT',   ',T_e-gk?8u#Nj`&l,(dL_Xtbhx{Zu!:Gq~H6_(|tIHKa%@[~gvvrME*wZz6ZwPz)' );
define( 'NONCE_SALT',       'Fhv;Z$L,=_kM*/9Wn[hm(nOj<G@se]#;=krP;W`3?%[efd<}p,ca;%nDls.Fpg0u' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'agencydb2';

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
