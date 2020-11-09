<?php

namespace Works\Repositories;

use Works\Repositories\RepositoryInterface;
use Works\Entities\Work;

class WorkRepository implements RepositoryInterface
{
    protected string $table = 'works';

    public function insert(Work $work): int {
        return 1;
    }

    public function update(Work $work): void {
    }

    public function get(int $id): Work {
        $work = new Work();

        return $work;
    }
}
