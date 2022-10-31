<?php 

use Router\Router;
use App\Exceptions\NotFoundException;


require '../vendor/autoload.php';

define('VIEW', dirname(__DIR__) . DIRECTORY_SEPARATOR . 'view' . DIRECTORY_SEPARATOR);
define('SCRIPTS', dirname($_SERVER['SCRIPT_NAME']) . DIRECTORY_SEPARATOR);


$router = new Router($_GET['url']);

$router->get('/', 'App\Controllers\AppController@index');

$router->post('/login', 'App\Controllers\AppController@loginPost');
$router->get('/logout', 'App\Controllers\AppController@logout');


$router->post('/login', 'App\Controllers\AppController@login');
$router->get('/logout', 'App\Controllers\AppController@logout');

// $router->get('/register', 'App\Controllers\AppController@register');
// $router->post('/register', 'App\Controllers\AppController@register');

$router->get('/dashboard', 'App\Controllers\AppController@dashboard');
$router->get('/calendar', 'App\Controllers\AppController@calendar');
$router->get('/history', 'App\Controllers\AppController@history');
 $router->run('GET', '/');
