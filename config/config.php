<?php

    /************************************************
     * Configuración de variables globales
    *************************************************/
    # Variables generales
    // error_reporting(0);
    $url_actual = $_SERVER['HTTP_HOST'];
    define('URL', 'http://'.$url_actual.'/Phissas/');
    define('NOMBRE_SITIO', 'PHIS S.A.S');

    # Variables SQL
    define('DB_HOST', 'localhost');
    define('DB_NAME', 'phissas');
    define('DB_USER', 'root');
    define('DB_PASS', '');
    define('DB_CHAR', 'utf8mb4');
?>