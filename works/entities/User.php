<?php

namespace Works\Entities;

use Works\Entities\EntityInterface;

class User implements EntityInterface
{

    protected int $id;
    protected string $firstName;
    protected string $lastName;
}
