<?php

namespace Works\Repositories;

use Works\Repositories\RepositoryInterface;
use Works\Entities\WorkStatus;

class WorkStatusRepository implements RepositoryInterface
{
    protected string $table = 'section';

    public function get(int $id): WorkStatus {
        $status = new WorkStatus();

        return $status;
    }

    public function getByName(string $name): WorkStatus {
        $status = new WorkStatus();

        return $status;
    }
}
