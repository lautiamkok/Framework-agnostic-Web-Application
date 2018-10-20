<?php
namespace Spectre\User\Mapper\Fetch;

use \Spectre\User\Mapper\Mapper;

class Users extends Mapper
{
    public function fetch($columns = [])
    {
        // Throw error if where search is not provide.
        if (count($columns) === 0) {
            throw new \Exception('$columns is empty from the controller', 400);
        }

        $collection = $this->gateway->fetch($columns);
        return $this->mapCollection($collection);
    }
}
