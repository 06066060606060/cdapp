<?php 

use Router\Router;
use App\Exceptions\NotFoundException;


require '../vendor/autoload.php';

$router = new Router($_GET['url']);
