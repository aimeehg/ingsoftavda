<?php
session_start();
#Constantes de conexion
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','seguimiento_academico');
#Constantes de la APP
define('HTML_DIR','html/');
define('APP_TITLE','Sistema de seguimiento');
define('APP_URL', 'http://localhost/mvc/');
#Estructura
require('vendor/autoload.php');
require('core/models/class.Conexion.php');
require('core/bin/functions/Encrypt.php');
require('core/bin/functions/Users.php');

$users = Users();
?>