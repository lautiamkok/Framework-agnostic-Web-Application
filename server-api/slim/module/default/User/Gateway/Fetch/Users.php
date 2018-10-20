<?php
namespace Spectre\User\Gateway\Fetch;

use \Spectre\User\Gateway\Gateway;
use \Spectre\User\Model\UserModel;

class Users extends Gateway
{
    public function fetch($columns = [])
    {
        // Get user(s).
        // https://medoo.in/api/select
        $data = $this->database->select('user', $columns);

        // Return the result.
        return $data;
    }
}
