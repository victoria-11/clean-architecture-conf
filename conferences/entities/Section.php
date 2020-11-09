<?php

namespace Conferences\Entities;

use Models\Entities\EntityInterface;

class Section implements EntityInterface
{

    public int $id;
    public string $title;
    public array $curators;
}
