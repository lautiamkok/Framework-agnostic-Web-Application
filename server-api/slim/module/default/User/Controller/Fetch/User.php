<?php
namespace Spectre\User\Controller\Fetch;

// PSR 7 standard.
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

use \Spectre\User\Controller\Controller;
use \Spectre\User\Gateway\Fetch\User as FetchGateway;
use \Spectre\User\Mapper\Fetch\User as FetchMapper;

class User extends Controller
{
    public function fetch(Request $request, array $args)
    {
        $gateway = new FetchGateway($this->database);
        $mapper = new FetchMapper($gateway);
        $model = $mapper->fetch([
            'uuid',
            'name',
            'email',
            'created_on',
            'updated_on',
        ], [
            "name" => $args['name']
        ]);

        return $model->toArray();
    }
}
