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
define( 'DB_NAME', 'local' );

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
define('AUTH_KEY',         'wkSXrzivC/N6ib25eJ+MIJH+92x5diqDLNA2pT0hmNyj4k3Gb+05ORH4ZbNDzEZS+Gy644veqCAGC/a7XmNGAA==');
define('SECURE_AUTH_KEY',  'ggHZrjsyTvi951AESVCZE44U/i+Zt2pNOrvswjBtw+FjgxFxTE5+ZKA5+sEDfJjvEc9R8wuLrLtNrA2/vIjgiQ==');
define('LOGGED_IN_KEY',    'QDkm67dVrGU3BXgbHkPoyVhlOVAt0JdmwofKnHIl8CHRPag1TM4NGCDxLxD8ybY3BBl+XnI3PBD7mE7ezA6gRA==');
define('NONCE_KEY',        '8xGjfiYM11uigmyVaUdJLl78qU9hydl9eXGwJe0vxCzcTrot5wuKFaPa4X2din5/vfsYtuBue98ldt6IUaiXJw==');
define('AUTH_SALT',        'JEdjEQXowNIzBLBhIZ78zRGr1FUuo4hjUNmZwq9QiZJnivi2IU3SqlteIlNZs09Efyp+zzy9LargRhsGoAM1lQ==');
define('SECURE_AUTH_SALT', 'SYcc4iEP6dUin84NSn/iDmKtfuqKKqWBUPF+5Li39E19Nc7FNEimF3r3zD0qIupsL0wL/Q791V6MBwBJ53Qwzw==');
define('LOGGED_IN_SALT',   'wxGvQYeLk3PGSeImqYjGEyOMhmi7UCDWlESpACYfMOsAqq8E9zx5alG2RF28zjSM1mdOKte10cb5EtKAtKQI5Q==');
define('NONCE_SALT',       'coCC0aWkrtqH71uDLzhzjBTGD1PZUTV0PSE3FRHyvV4LfcQO8yQuiT+S1VGEs8QZomkX7FzdxFB1MzuQ6TmfRQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
