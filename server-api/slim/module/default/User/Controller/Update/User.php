<?php
namespace Spectre\User\Controller\Update;

// PSR 7 standard.
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

use \Spectre\User\Controller\Controller;
use \Spectre\User\Gateway\Update\User as UpdateGateway;
use \Spectre\User\Mapper\Update\User as UpdateMapper;

class User extends Controller
{
    public function update(Request $request)
    {
        // Get params and validate them here.
        $uuid = $request->getParam('uuid');
        $name = $request->getParam('name');
        $email = $request->getParam('email');

        // Throw if empty.
        if (!$uuid) {
            throw new \Exception('$uuid is empty', 400);
        }

        // Throw if empty.
        if (!$name) {
            throw new \Exception('$name is empty', 400);
        }

        // Throw if empty.
        if (!$email) {
            throw new \Exception('$email is empty', 400);
        }

        // Create a timestamp.
        $date = new \DateTime();
        $timestamp = $date->getTimestamp();

        $gateway = new UpdateGateway($this->database);
        $mapper = new UpdateMapper($gateway);
        $model = $mapper->update([
            "uuid" => $uuid,
            "name" => $name,
            "email" => $email,
            'updated_on' => $timestamp,
        ], [
            "uuid" => $uuid
        ]);

        return $model->toArray();
    }
}
