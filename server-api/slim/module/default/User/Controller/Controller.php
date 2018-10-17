<?php
namespace Spectre\User\Controller;

use \Spectre\Core\Controller\Controller as CoreController;
use \Medoo\Medoo;
use \Monolog\Logger;

abstract class Controller extends CoreController
{
    protected $database;

    public function __construct(
        Medoo $database,
        Logger $logger
    ) {
        $this->database = $database;

        // Log anything.
        $logger->addInfo("Logged from Spectre\User\Controller\Controller");
    }
}
