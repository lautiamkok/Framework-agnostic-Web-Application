<?php
namespace Spectre\User\Mapper\Delete;

use \Spectre\User\Mapper\Mapper;

class User extends Mapper
{
    public function delete($data = [])
    {
        // Throw error if array is empty.
        if (count($data) === 0) {
            throw new \Exception('$data is empty from the controller', 400);
        }

        $model = $this->mapObject($data);
        return $this->gateway->delete($model);
    }
}
