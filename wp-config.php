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
define('DB_NAME', 'wordpress_3');

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
define('AUTH_KEY',         'KjBe`5MvxzgdG1 5`N4B#Dzd~Y;zbrF$v1l6c$ubNZerL|;F5vpiNnb/PEtVF4nZ');
define('SECURE_AUTH_KEY',  '[`C!d[(X-{|-FeT(7~cP(wYp/`K+%Ofgh]#V64er<raYbn^v,Y7`u81beGkt`?[?');
define('LOGGED_IN_KEY',    ']=uRMoIn]c)FKLzP3REdZQY.%DLL#E4tsY0MAb#>esQw(s?CZrbJQi}%Thi@eru`');
define('NONCE_KEY',        'th2Zh><^>%zGb-0hB> +s_B:NchGTNmd8.Y|M$[jkmoTKul}Z`@2|!$j ao#9MB}');
define('AUTH_SALT',        '{5B *>1(Ym3|Io+{0S*.>ircf xG4{c sPSj^+g/?uc ~^k}:hbm%n{QaWT.gF)N');
define('SECURE_AUTH_SALT', '4+RxYV>%vGjc[|y!7fe*}arTbhrBdUQk^Ai}B7K(AdNE<!!.oZ=|BguV0LM/WM11');
define('LOGGED_IN_SALT',   'z+`NJpN9&-;t,u=MD~@Gh5.c(+yq!q_vkQxJr){>e_./=cWif8&V$#wc%/*eL(Bh');
define('NONCE_SALT',       '..^nZf,&{aW`WUVt1b0,3/*>)9&i._)`(cDQ#EWJ)+iz^S>#UDZlc8OpW1g[L->{');

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
