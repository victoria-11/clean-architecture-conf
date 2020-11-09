<?php

namespace Conferences\Entities;

use Models\Entities\EntityInterface;

class ConferenceStatus implements EntityInterface
{

    public int $id;
    public string $name;
    public string $title;
}
