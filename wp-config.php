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
define('AUTH_KEY',         'cKv+f8pGsnakaAYUhxDov7wzliorIj5mwJ/57liGA0fUv9tE+O3uwWmpFgMApmSdfNDuGWmWHvQOXkLZABcDrQ==');
define('SECURE_AUTH_KEY',  'xV/jExSWO0lsdCYInSj3LJTmlWPZzy60v5x/AsjUbJAIsgBBBNAxH1z3Bw/itbs877Skmbq9SeeJ8/stpwIIBw==');
define('LOGGED_IN_KEY',    'B5kjkM3v2G+SCjlfnz8ZdDYMFPH6xoVE64uBaOHMAKaiEJuQHnohNyLqLqroYjn2iJFvMsoO5zxeVjUdFZ8Auw==');
define('NONCE_KEY',        'WQQPgFHaf7HrS0lDCoeHL0w8C7Ye6mMUcLbuErWkX0zwFbhJetFjh6IMq1VCOxr/aquryTya48Qjevavef/JjA==');
define('AUTH_SALT',        'J1VuXggt1gxGVybhf99Dc+AAU0bGaxfH6wig9vcEktzYV3uvaPzn1b9gn3A3W800j2jKS+/wiotCc190xoc3MQ==');
define('SECURE_AUTH_SALT', 'RvPGzegE2+IieNHEtOjxyvCTA/4yHU4ecU+OpSZonBXIBnxmYbRli1Y+ciFEWR8AiQIUJH9xlymQYOj2frOgPA==');
define('LOGGED_IN_SALT',   'SZofbufkqYrZyyRW9wpcSUW/J7dXvn4cLmzyzLnGHvM/ti1SobpaW4zqwxzZzXNU+GYl2TO8dJhp29gI2xobXw==');
define('NONCE_SALT',       'A5UXT6zzv5oLsxwzZSIv+b0ausi8bTs+iewPxZh+gjVfezm57evswr7Nlunpi/s13U6RtQ5qBiuEzIJdKUb1mw==');

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
