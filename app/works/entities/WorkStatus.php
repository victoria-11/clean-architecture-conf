<?php

namespace Works\Entities;

use Models\Entities\EntityInterface;

class WorkStatus implements EntityInterface
{

    const NEW = 'new';

    public int $id;
    public string $name;
    public string $title;
}
