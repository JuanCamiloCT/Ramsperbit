<?php

/**
 * MINI - an extremely simple naked PHP application
 *
 * @package mini
 * @author Panique
 * @link https://github.com/panique/mini/
 * @license http://opensource.org/licenses/MIT MIT License
 */

// TODO get rid of this and work with namespaces + composer's autoloader

// set a constant that holds the project's folder path, like "/var/www/".
// DIRECTORY_SEPARATOR adds a slash to the end of the path
define('ROOT', dirname(__DIR__) . DIRECTORY_SEPARATOR);
// set a constant that holds the project's "application" folder, like "/var/www/application".
define('APP', ROOT . 'application' . DIRECTORY_SEPARATOR);


// load application config (error reporting etc.)
require APP . 'config/config.php';

//require APP . 'libs/Conexion.php';
//require APP . 'libs/ajax.php';
//require APP . 'libs/Encrypt.php';
//require APP . 'libs/goLogin.php';
//require APP . 'libs/users.php';


define('PUBLICAPP', ROOT . 'public' . DIRECTORY_SEPARATOR);

//global $settings;

//$settings = [
  //'public_folder' => PUBLICAPP ,
  //'uploads_imagen' => PUBLICAPP . 'uploads/img/',
  //'public_uploads_imagen' => 'uploads/img/'
//];

//require APP . 'libs/uploads.php';
// load application class
require APP . 'core/application.php';
require APP . 'core/controller.php';


// start the application
$app = new Application();
//$users = Users();
