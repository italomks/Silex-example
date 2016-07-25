<?php
define('APP_ROOT', dirname(__DIR__));
chdir(APP_ROOT);

use Silex\Application;
use Symfony\component\HttpFoundation\Request;
use Symfony\component\HttpFoundation\Response;

require 'vendor/autoload.php';

$app = new Application();


$app->get('/', function () use ($app){
    return 'Hello word ';
});

/*
$app->before(function (Request $request){
    print 'Antes das rotas - ';
});

$app->after(function (Request $request, Response $response){
    print 'Vai ser execultado depois que o response for enviado para o browser ! - ';
});

*/

$app->get ('users/{name}', function($name){
        return 'Hello, ' . $name;
});

$app->run();