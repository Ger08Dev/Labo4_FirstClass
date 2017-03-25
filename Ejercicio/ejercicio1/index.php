<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require 'vendor/autoload.php';
//require 'PHP/Clases/AccesoDatos.php';
//require 'PHP/Clases/Persona.php';

$app = new \Slim\App;
$app->get('/hello/{name}', function (Request $request, Response $response) {
    $name = $request->getAttribute('name');
    $response->getBody()->write("Hello, $name");

    return $response;
});

//-- metodo 
$app->get('/', function (Request $request, Response $response) {
    //$name = $request->getAttribute('name');
    $response->getBody()->write("Hola mundo!!");

    return $response;
});

$app = new \Slim\App;
$app->get('/hello/{name}', function (Request $request, Response $response) {
    $name = $request->getAttribute('name');
    $response->getBody()->write("Hola, soy la hermosa de $name");

    return $response;
});

$app->run();