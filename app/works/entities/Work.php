<?php

namespace Works\Entities;

use Models\Entities\EntityInterface;
use Conferences\Entities\Section;

class Work implements EntityInterface
{

    public int $id;
    public string $title;
    public WorkFile $workFile;
    public User $author;
    public University $university;
    public Section $section;
    public bool $published;
    public WorkStatus $status;
}
