<?php
// PSR 7 standard.
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app->delete('/api/users', function (Request $request, Response $response, $args) {

    // Autowiring the controller.
    $controller = $this->get('Spectre\User\Controller\Delete\User');

    // Obtain result.
    $result = $controller->Delete($request);
    $response->getBody()->write(json_encode($result));
});
