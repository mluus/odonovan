<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'POD');

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
define('AUTH_KEY',         '4:a)w{]C/84`=+:/({384Te&BS<rte(o,-A?mB-l)K%fL]] _a$r540+?)97Zhe&');
define('SECURE_AUTH_KEY',  '|Uf2xG+j-h*U/cnc5j&0f+nqpT/LF<C,?;EIc@][;^(HcT3RYl~FOPG ^<lwnh-X');
define('LOGGED_IN_KEY',    '}/}~zDhoYZm+Nmi(*AwT|+MKQ!cffl/w;j1oCtAhQmCjZOO:k}Uo>ZFY1D8<~P|M');
define('NONCE_KEY',        '<pha2xq0V+s<=EY<M+mB|!R2=-6eJP@IJe}&-i+M_hg3j/zk59?U_M-+8?:BN.9W');
define('AUTH_SALT',        ')wf(l#]]kZ.+xz(`i9e|gh|j*w>r,y!xpYeFF*FJ&fgC=|];RG,Epj+q8PLOg6=x');
define('SECURE_AUTH_SALT', '5;-IBbif>T#G I%BM|%o:Yz0]EGo/}Y<k+i41+|y_RI-?v%w:K3-C4CVog?:ZWbL');
define('LOGGED_IN_SALT',   'R8%e+p99p7;Ve{x25Dxh4Bk%~I;}>+)G,1k?z1eW KYP>`mqZ ,2eK|rISLl~Bg+');
define('NONCE_SALT',       ')E$&S{Z10^am]X7xOZ`As{C1_*Z{jCJMu2O#^-OrVhyiFS)BoV:hVVv3`Ii {rc,');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
