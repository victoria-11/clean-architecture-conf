<?php

namespace Works\Entities;

use Works\Entities\EntityInterface;

class WorkFile implements EntityInterface
{

    public int $id;
    public string $type;
    public int $createdAt;
}
