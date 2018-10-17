<?php
namespace Spectre\User\Gateway;

use \Spectre\Core\Gateway\Gateway as CoreGateway;
use \Medoo\Medoo;

abstract class Gateway extends CoreGateway
{
    protected $database;

    public function __construct(Medoo $database)
    {
        $this->database = $database;
    }
}
