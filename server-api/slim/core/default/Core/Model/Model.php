<?php
namespace Spectre\Core\Model;

use \Spectre\Core\Strategy\ModelInterface;
use \Spectre\Core\Model\Utils;

abstract class Model implements ModelInterface
{
    /**
     * Import the utils.
     */
    use Utils;

    /**
     * Force Extending class to define this method.
     * @param array $params [description]
     */
    abstract public function setOptions(array $params);
}
