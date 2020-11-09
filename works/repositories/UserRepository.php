<?php

namespace Works\Repositories;

use Works\Repositories\RepositoryInterface;
use Works\Entities\User;

class UserRepository implements RepositoryInterface
{
    protected string $table = 'users';

    public function get(int $id): User {
        $user = new User();

        return $user;
    }
}
