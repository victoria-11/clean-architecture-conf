<?php

namespace Works\Repositories;

use Works\Repositories\RepositoryInterface;
use Works\Entities\Section;

class SectionRepository implements RepositoryInterface
{
    protected string $table = 'section';

    public function get(int $id): Section {
        $section = new Section();

        return $section;
    }
}
