<?php

namespace Conferences\Entities;

use Models\Entities\EntityInterface;

class Conference implements EntityInterface
{

    public int $id;
    public string $title;
    public int $createdAt;
    public string $description;
    public int $startDate;
    public int $deadlineDate;
    public Status $status;
}
