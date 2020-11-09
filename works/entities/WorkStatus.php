<?php

namespace Works\Entities;

use Works\Entities\EntityInterface;

class WorkStatus implements EntityInterface
{

    const NEW = 'new';

    protected int $id;
    protected string $name;
    protected string $title;
}
