<?php

namespace Works\Entities;

use Models\Entities\EntityInterface;

class WorkFile implements EntityInterface
{

    public int $id;
    public string $type;
    public int $createdAt;
}
