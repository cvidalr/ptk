<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'glpi');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'root');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'Se6g^FcCx1s!u^^xb)Qk2mAY4>,Oizq8Q90:V;sKtN-[-#HEE1|S{jsJFDkJJOZ8'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_KEY', 'dI*%|(1DB/x}d~_OO8G<ND2e`?3kn+&+s#+3[X6)#}.~})K6{ 9w)hG4Nt6_3T+f'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_KEY', 'F<}|!xos-+myRE+~a7p-u1&csO_k+*hwHNCI7#r4;O_Q:*v@+:.$S^8]WFq6@Xlb'); // Cambia esto por tu frase aleatoria.
define('NONCE_KEY', '8ZP;PcRKbuxG7Tlu>-t|/F.]]}><g[{srSQP>L+ ; oX%!q55lW}gJ5O^+z!26<f'); // Cambia esto por tu frase aleatoria.
define('AUTH_SALT', 'bK+rNqvJk!5+F`1g/;Gijc8?F.Dyr--HI=+B4Tf4>,0.H{fs!vTi7,ypyf3p2.[f'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_SALT', '<EV+@M1O>iH8wxuT0l4YIxjJ&5sc-+$FV;cGP[:xeq4@B})frR*:E|H2X_-Zfli|'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_SALT', 'c<QD89Qm7z An,QR:Sx#A>$MGL`<!+@BrBi![H)9HPuf3g<HrXrBCY6$/?Q}4==3'); // Cambia esto por tu frase aleatoria.
define('NONCE_SALT', '>SR8i+l9gX72pVY@|kLR`S%([qn3N|Z}&x6,%&[%9B8Gr?]iX9I1C|ve^|%-{!N4'); // Cambia esto por tu frase aleatoria.

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
define('FTP_HOST', 'localhost');
define('FTP_USER', 'ftpd');
define('FTP_PASS', 'root');

