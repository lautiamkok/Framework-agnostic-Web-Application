<?php
namespace Spectre\User\Controller\Fetch;

// PSR 7 standard.
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

use \Spectre\User\Controller\Controller;
use \Spectre\User\Gateway\Fetch\Users as FetchGateway;
use \Spectre\User\Mapper\Fetch\Users as FetchMapper;

class Users extends Controller
{
    public function fetch(Request $request)
    {
        $gateway = new FetchGateway($this->database);
        $mapper = new FetchMapper($gateway);
        $collection = $mapper->fetch([
            'uuid',
            'name',
            'created_on',
            'updated_on',
        ]);

        return $collection->toArray();
    }
}
