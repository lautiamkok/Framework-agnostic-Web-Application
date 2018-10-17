<?php
// PSR 7 standard.
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app->delete('/api/users', function (Request $request, Response $response, $args) {

    // Autowiring the controller.
    $controller = $this->get('Spectre\User\Controller\DeleteController');

    // Obtain result.
    $result = $controller->DeleteUser($request);
    $response->getBody()->write(json_encode($result));
});
