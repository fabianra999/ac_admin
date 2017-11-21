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
define('DB_NAME', 'ac_estrategias_db');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'root');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost:8889');

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
define('AUTH_KEY', 'Z{pTl0kV+[xjT;E|CgW^Yj)vtMqOC=]rKkBm&ov@IW@?rIj@N],Ky~)o$~NLgYL%');
define('SECURE_AUTH_KEY', '#1|~5T_Eo{NOA<$%S^EvD_ce5v:]&bL0@BZ,MDIyd:$ObZ6x;99hQA_dy`xKQAz|');
define('LOGGED_IN_KEY', '4LhqC?cs5y7N&8Vo)5p,C{)H%Auz !S<i?8Sgj)2)#eP+AK|7+d0?9~y4Rfv.i|S');
define('NONCE_KEY', 'v+`U(,8f,FuD9u;sQ%~iI}1W8@IcU]Aw+W21{Eto5U|^e|5-tI@Xc9BDSS{ItV(r');
define('AUTH_SALT', 'TJbtY8vgn0N8l2|Y$[h6BECl!~V]T3`v8n;.O[`S/QC]J/iQFR[}0rHND+}:^pU2');
define('SECURE_AUTH_SALT', '^K.2@XO`%fW8^cM%Fk}f>DgVvIlx_bg`TJh@?jr7#54* 506~lah9s%JaFu..}m*');
define('LOGGED_IN_SALT', 'dyk[0FmswaHAih:jbV#jQ*iRF;q1Xzfq&[lnrZA)``c8P!P2j2ZV.1HRy02Ps<HC');
define('NONCE_SALT', '(F%^0N5`uCBUOF8Ppp4LMCr7|S.&%1faT|:q0pVi}.z<%`0UViV$^|8Is[l@Q*n;');

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
define('WP_DEBUG', true);
define('saveQueries', true);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

