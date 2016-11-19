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
define('DB_NAME', 'preciweb');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '40040a');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY', 'zScsIStJ{$WehVb7m7ps2w)v7k}gP/,~Y*!%^^{D7_S)dc{w{dU8DO^lR35!fH6[');
define('SECURE_AUTH_KEY', 'CWBZM1Y8ur6@JTi-`A6EgtI:{wzjCmLM7A2DO:T9@Isrl[{0j;MbZCKt: Qx1HQY');
define('LOGGED_IN_KEY', 'kxkoxqp)`-$2lE/%U%/BC3_&_rta3><}=g/=SOk6*bTncG+J6yH-V{lrtkZ@lR^d');
define('NONCE_KEY', '4mjpmsAi,^0[QX4Y}v]%w_;v&F%x<b-42c.A?q/n~SO*,pe J+72zB3KPiSUTY^q');
define('AUTH_SALT', '{fN#&LGEPuBUS`}-U_3D%8=A-Rrm(vdoC W;pu:kF6*qE~!z-SuMA[uSj3!gVa+#');
define('SECURE_AUTH_SALT', ']%.B^=AU8y(iBZ}Nb&|<oA@ayiQh-@bfSvpWa4_Z4S0Z9!3@#1~G!#vOgSRZAHO?');
define('LOGGED_IN_SALT', 'pK@riS9CJ+4[^/kv# M<+As(+wOw~`S[-WEpV:=m@7>!Hsatr]9=lrdO3D5>sv]`');
define('NONCE_SALT', 'nu;.xr:zRiF8-nQu13Tn:xhJP- $h`(W[KAjV[-0@c&Lm^Thj4X,P20<%2^u>-Zf');

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


