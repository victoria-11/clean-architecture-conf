<?php

namespace Conferences\Repositories;

use Models\Repositories\RepositoryInterface;
use Conferences\Entities\Section;

class SectionRepository implements RepositoryInterface
{
    protected string $table = 'section';

    public function get(int $id): Section {
        $section = new Section();

        return $section;
    }
}
