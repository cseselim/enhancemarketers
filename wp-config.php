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
define( 'DB_NAME', 'mor_enhance' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'H(xt;LQ-J@MTG`/`c,~c:k`k9+9G2qvx~!b/=|Vs}TM+B3yMg {Zr9vpHk]4BpGI' );
define( 'SECURE_AUTH_KEY',  'HXK/l{7cOu!PR8&B-_<*}N0m~OK.A?;=:M.=AdRP_3NlZ~8#4h OZ{LCuKqf`a6R' );
define( 'LOGGED_IN_KEY',    't3RHqvA4q/Z}::6eBq:d),Iy]5+${-BMs>?+^4}}i@4vgN=qdr_aK(TEKtLHh)t5' );
define( 'NONCE_KEY',        'tNd kPh<+[Vq-..Kw>:[wKn?N[^A$JY%o:&~?CwK4jZhCQS*KOgUJy&XUXdyz[B;' );
define( 'AUTH_SALT',        '&D~v:6T+zK9YnCKvv_7u m=.!n<l[$ >Jkka+ZcnZ>*E$ZN6S4wRHYOm.SfH@^y+' );
define( 'SECURE_AUTH_SALT', '*=i,f*p%4$-p#V{&8UWCMV{N}yn=U;Dpi(t&9lx7b7tN@gyaMJX6`-&DiH5v~[Qy' );
define( 'LOGGED_IN_SALT',   'gy[PRJEfy$Nw7xezj!Q5w8$r9;wf$Y|j]*{){g/o~A|Pon.qCkTMOTs#u3-EUB{0' );
define( 'NONCE_SALT',       '<c9KpBnvngo^]x_pC^{HqtJ5JME9AZ)[L7#pf0bTH#qJvfG>1uq;.J>X>~ i`-f%' );

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
