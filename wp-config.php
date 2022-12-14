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
 * @link    https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// Project root path
$root = dirname(__DIR__);

// Composer autoloader
require_once $root.'/../vendor/autoload.php';

// dotenv
$dotenv = new Dotenv\Dotenv($root.'/../');
$dotenv->load();

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', getenv('DB_DATABASE'));

/** MySQL database username */
define('DB_USER', getenv('DB_USER'));

/** MySQL database password */
define('DB_PASSWORD', getenv('DB_PASSWORD'));

/** MySQL hostname */
define('DB_HOST', getenv('DB_SERVER'));

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('WP_HOME', getenv('SITE_URL'));
define('WP_SITEURL', getenv('SITE_URL').'/wordpress');

define('DISALLOW_FILE_EDIT', true);

define('WP_AUTO_UPDATE_CORE', true);

define('DISABLE_WP_CRON', true);

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '};dR1:mdMVe7-=;&vaRFU(p}Gh7%XQ0{>gqFTk!,8{A4eI)s$2vlU9n(>vX&Ild#');
define('SECURE_AUTH_KEY',  'TL:OgKW^lWa*a-[((2(3%j|^gc0E`Raaw|*T$C:&2,O*nK8Y2ePnCf3/w[!tfy0(');
define('LOGGED_IN_KEY',    'BZ-UMs9gbo42*pWpplcZ_SlK#i0_{>H73E.1$0Xu_uI#Hgp{h1|,+/{up@Qk4e=U');
define('NONCE_KEY',        'D+h..49&K]_1pqIkI.)YDI7+I MtS(;+<G;?EJ%ga>?-)<PQ6zC}m`OH[K;76]%a');
define('AUTH_SALT',        'J6w6|~0!VW|WQr4)togqT|fsSAiXzhWZ>oFwI>U{zQ?t?*~|m}Tr*LS)&iIT<gyu');
define('SECURE_AUTH_SALT', '}6Kks[Gm>|j#!jg+<HgtiksDery2l]I/s<S}A{S2m$&:xb/~a~jGUo<&GhR`E3| ');
define('LOGGED_IN_SALT',   '+&-72}+462^sVt_FLAIlJwT%NNZ]IoHzX9F4I9>+_nA<8/^qd0M|S17OR*xF*r+<');
define('NONCE_SALT',       '+Ob5XCo]p@s}>>g-hh+Ri:K=aq n]Z,z-`H=PQ6DuS._BDaA,AmG6M-CAb|5K;Eq');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = getenv('DB_TABLE_PREFIX');

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
define('WP_DEBUG', filter_var(getenv('DEV_MODE'), FILTER_VALIDATE_BOOLEAN));

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
    define('ABSPATH', dirname(__FILE__).'/');
}

/** Sets up WordPress vars and included files. */
require_once(ABSPATH.'wp-settings.php');
