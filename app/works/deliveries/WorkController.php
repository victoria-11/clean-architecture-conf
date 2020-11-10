<?php

namespace Works\Deliveries;

use Works\Usecases\{
    CreateWork,
    CheckWork
};

use Models\Usecases\UsecaseInterface;

class WorkController
{

    public function create(): void {
        $data = [
            'title' => 'test',
            'user_id' => 1,
            'published' => false,
            'section_id' => 1,
        ];

        $usecase = new CreateWork();

        $work = $usecase->create($data);
    }

    public function check(): void {
        $data = [
            'work_id' => 1,
            'status_id' => 1,
        ];

        $usecase = new CheckWork();
        $usecase->save($data);
    }
}
