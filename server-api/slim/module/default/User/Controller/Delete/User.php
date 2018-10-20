<?php
namespace Spectre\User\Controller\Delete;

// PSR 7 standard.
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

use \Spectre\User\Controller\Controller;
use \Spectre\User\Gateway\Delete\User as DeleteGateway;
use \Spectre\User\Mapper\Delete\User as DeleteMapper;

class User extends Controller
{
    public function delete(Request $request)
    {
        // Get params and validate them here.
        $uuid = $request->getParam('uuid');

        // Throw if empty.
        if (!$uuid) {
            throw new \Exception('$uuid is empty', 400);
        }

        $gateway = new DeleteGateway($this->database);
        $mapper = new DeleteMapper($gateway);
        $model = $mapper->delete([
            "uuid" => $uuid
        ]);

        return $model->toArray();
    }
}
