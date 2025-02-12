<?php

//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL cookie settings
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
define('DB_NAME', 'pattoud959');

/** MySQL database username */
define('DB_USER', 'pattoud959');

/** MySQL database password */
define('DB_PASSWORD', '8GMrXqkmBHkV');

/** MySQL hostname */
define('DB_HOST', 'pattoud959.mysql.db:3306');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'qLBBmi25b9fd7c5FK2NnF32HoNo5v6UvT/CUBq5Nkywb/x4EejciWFiI1f3n');
define('SECURE_AUTH_KEY',  'oJto+WikjYsd+oSrb4L40RI0xRB+o9BCiomMfBAmXGW6nr3g4+ZgaVdkIcPI');
define('LOGGED_IN_KEY',    'lupvJRbu5/cdID4wsV9KdmghgFnzganrMuEozHz8np3OrVwXrjNv1O+lUxEh');
define('NONCE_KEY',        'LYz90y09FiR2hqZ3zmSmsThrHjMlvZU8zNqFEPos/1YDLDDOgoM24FLy4VF7');
define('AUTH_SALT',        'd9dw6VQdjt6OwdhkmHwne5V3rFOxiPejvG/gw01fcnwBvrRKRpMCQ7jrst8Z');
define('SECURE_AUTH_SALT', 'omDD5VYd93pIBaRs6j2ESh1/Ylk2LHaLoBktOft7cTyqV6F5wbEylGc2GEWO');
define('LOGGED_IN_SALT',   'fvyGpUmFx9vVcx8WK1uj+JDwuhUmymBfxGV75n7rjX8LHpjN5lLMnG2hXE61');
define('NONCE_SALT',       'PesDbdXiikCe5QPK3xdZ3Zy+tlJmmzGo1UxvsXC0wkutO5k9/IBu8Ua/kf9J');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'mod290_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/* Fixes "Add media button not working", see http://www.carnfieldwebdesign.co.uk/blog/wordpress-fix-add-media-button-not-working/ */
define('CONCATENATE_SCRIPTS', false );

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
