<?php 

use Router\Router;
use App\Exceptions\NotFoundException;


require '../vendor/autoload.php';

$router = new Router($_GET['url']);
$router->get('/dashboard', 'App\Controllers\AppController@index');
$router->get('/', 'App\Controllers\AppController@login');
 $router->run('GET', '/');
