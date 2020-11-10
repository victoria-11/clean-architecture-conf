<?php

namespace Works\Entities;

use Models\Entities\EntityInterface;

class User implements EntityInterface
{

    public int $id;
    public string $firstName;
    public string $lastName;
}
