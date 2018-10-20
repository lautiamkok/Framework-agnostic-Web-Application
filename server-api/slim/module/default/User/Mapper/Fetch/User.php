<?php
namespace Spectre\User\Mapper\Fetch;

use \Spectre\User\Mapper\Mapper;

class User extends Mapper
{
    public function fetch($columns = [], $where = [])
    {
        // Throw error if where search is not provide.
        if (count($where) === 0) {
            throw new \Exception('$where is empty from the controller', 400);
        }

        $user = $this->gateway->fetch($columns, $where);

        // Throw error if no user found.
        if ($user === null) {
            throw new \Exception('No user found.', 400);
        }
        return $this->mapObject($user);
    }
}
