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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         ']y8@S/g;8i *oNMbnN% T-rQ?M +=!~T<QC?O{do}3)]FtZk/?)qF.3~o/2N`$=Y');
define('SECURE_AUTH_KEY',  'Gz(aUO%|v#RW#.xe %Fy~rJMYStzr5dLQ_<o&Tl|m1C.OEePBRjB~~f3S/H$w~-x');
define('LOGGED_IN_KEY',    'V.p.oiq|a}/3L.%#XX8p4e7UV7~OS4yS%KD5x2u>f4:zlT8)bX>6g7(lop_BVAC*');
define('NONCE_KEY',        'D!!Y&;u$kK*8Bqmt-!n} H+e}^Q4[tT^v36-gg%zb1ayjRx{QF%,Lqg.M-7[_eO;');
define('AUTH_SALT',        '|{&-%`&p9T7VWG/f|k<[x(1m9*;kgf|] [G/CyCWdwj|Li@:}W1G_Mmz/8YnHTFw');
define('SECURE_AUTH_SALT', 'jgd.1=::PN{u|ej<<e7F@GU.>z1%[.IikG>km>G2;~O0+jW(wa{&G5QjLRYShXlM');
define('LOGGED_IN_SALT',   '5_W7rpAX|aoU?&AUC#:uf~d=e3:^gKEWx8V5y0uPQ)6awhwl?U2r!^@poO}$k!j(');
define('NONCE_SALT',       'I2UB{;gva*7cZ2j|zOStS0r8KXZI++gG$V(rhF5z/1uVk[FMh5hCTRdRR*BvTe5S');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
