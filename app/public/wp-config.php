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

// ** MySQL settings ** //
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
define('AUTH_KEY',         'SkcgUvlk54OMoFUon/+Jw4tziGAKCgVK36BaakXFqBXd4CnVHwjELtZ4wklWLyb9/12G9DczE8DyCtoUYjiVIg==');
define('SECURE_AUTH_KEY',  'Lk9tw3p5lW2rleSeSJCBbaqwJS/bEEzMfu0Q+ZkLzrmoFGPn1kQoSTkW59Jr491pdgFFHsmr0+2LXiuejPgI1g==');
define('LOGGED_IN_KEY',    'zfHMCtrIgccJuPKTHEYGAPbGA2r0wWzzFdaOwdsiBIaIkh9hV15+juPxnPl9yQS1MQeQvX1SvL8AJQdlnFUXjw==');
define('NONCE_KEY',        'Upu4HXScaHSCuWW67JOXNOEak5AdkLpdmLLhDOZfQd+wmHHaPOWO3NMnRCylBWTZeT6SRiHunpFKPwQ16fSr6w==');
define('AUTH_SALT',        '35SoShGSnzmLrxkU9pta2Cjxaa4F1J/F8SISI0bb4GBzx3FvypF/i2JS6ApdSeOWOB/RKAOC01dnmDaZQcgITw==');
define('SECURE_AUTH_SALT', 'hYEXX/YMRYBxHCxFlbKWyD5PVirDbIZQOLSwLIydyCwmR2WbeiVxFknkem3tEb0FYXVJituEvYohqd2wKR/NJg==');
define('LOGGED_IN_SALT',   'BqYHjiRZHYcH4wxvwgiBKZYfu8Zi91kb4A4UPOqfn60iJjZKvJ/TJ4N7t9QZJqxU3M1dBu0VJM4e8qsheJ+fcQ==');
define('NONCE_SALT',       'nSqei67EKreiZYYOCRuqOn7smlD9xuE67pBezSTPPMmiI1KFWvoUZdlv4V9KPgWJEMWyBuVsw5y/zM1+nnRMBw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
