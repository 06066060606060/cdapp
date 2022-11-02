<?php 

use Router\Router;
use App\Exceptions\NotFoundException;


require '../vendor/autoload.php';

define('VIEW', dirname(__DIR__) . DIRECTORY_SEPARATOR . 'view' . DIRECTORY_SEPARATOR);
define('SCRIPTS', dirname($_SERVER['SCRIPT_NAME']) . DIRECTORY_SEPARATOR);


$router = new Router($_GET['url']);

$router->get('/api', 'App\Controllers\AppController@getApi');

$router->post('/login', 'App\Controllers\AppController@loginPost');
$router->get('/logout', 'App\Controllers\AppController@logout');

 $router->run('GET', '/');
