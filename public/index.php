<?php

 header("Access-Control-Allow-Origin: *");

use \Psr\Http\Message\ServerRequestInterface as req;
use \Psr\Http\Message\ResponseInterface as res;

require '../src/bootstrap.php';
require '../src/handlers.php';

$app = new \Slim\App;

$app->get('/api/{table}', function (req $request, res $response) {
  return getHandler($request, $response);
});

$app->get('/api/{table}/{id}', function (req $request, res $response) {
  return getOneHandler($request, $response);
});

$app->post('/api/users', function (req $request, res $response) {
  $entityBody = file_get_contents('php://input');
  var_dump($entityBody);
  return postUserHandler($request, $response);
});

$app->delete('/api/{table}/{id}', function (req $request, res $response) {
  return deleteRowHandler($request, $response);
});

$app->post('/api/{table}/{id}', function (req $request, res $response) {
  return updateUserHandler($request, $response);
});

$app->run();
