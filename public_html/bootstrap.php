<?php

/**
 * Description of bootstrap
 * Bootstrap file
 * @author Gabriel Melo <dev.gabrielomelo@gmail.com>
 */

date_default_timezone_set('America/Sao_Paulo');
define('DS', DIRECTORY_SEPARATOR);
define('APP_ROOT', __DIR__.DS.'..');
$autoload = APP_ROOT.DS.'vendor'.DS.'autoload.php';
require_once $autoload;
session_start();
