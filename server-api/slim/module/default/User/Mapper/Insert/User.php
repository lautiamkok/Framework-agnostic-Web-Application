<?php
namespace Spectre\User\Mapper\Insert;

use \Spectre\User\Mapper\Mapper;

class User extends Mapper
{
    public function insert($params = [])
    {
        // Throw error if array is empty.
        if (count($params) === 0) {
            throw new \Exception('$params is empty from the controller', 400);
        }

        $model = $this->mapObject($params);
        return $this->gateway->insert($model);
    }
}
