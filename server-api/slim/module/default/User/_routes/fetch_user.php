<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app->get('/api/users/{name}', function (Request $request, Response $response, $args) {

    // Autowiring the controller.
    $controller = $this->get('Spectre\User\Controller\FetchController');

    // Obtain result.
    $user = $controller->fetchUser($request, $args);

    // Convert timestamp to a local time.
    $timestamp = $this->get('Spectre\Core\Utils\TimestampConvertor');
    $user['createdOn'] = $timestamp->convert($user['createdOn']);
    $user['updatedOn'] = $timestamp->convert($user['updatedOn']);

    $response->getBody()->write(json_encode($user));
});
