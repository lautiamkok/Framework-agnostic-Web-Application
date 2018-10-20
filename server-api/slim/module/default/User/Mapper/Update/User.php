<?php
namespace Spectre\User\Mapper\Update;

use \Spectre\User\Mapper\Mapper;

class User extends Mapper
{
    public function update($data = [], $where = [])
    {
        // Throw error if array is empty.
        if (count($data) === 0) {
            throw new \Exception('$data is empty from the controller', 400);
        }

        // Throw error if array is empty.
        if (count($where) === 0) {
            throw new \Exception('$where is empty from the controller', 400);
        }

        $model = $this->mapObject($data);
        return $this->gateway->update($model, $where);
    }
}
