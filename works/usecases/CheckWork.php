<?php

namespace Works\Usecases;

use Works\Usecases\UsecaseInterface;

use Works\Repositories\{
    WorkRepository,
    WorkStatusRepository
};

use Works\Entities\{
    Work,
    WorkStatus
};

class CheckWork implements UsecaseInterface
{

    public function save(array $data): void {
        $work = $this->getWork($data['work_id']);
        $work->status = $this->getStatus($data['status_id']);

        $repository = new WorkRepository();
        $repository->update($work);
    }

    protected function getStatus(int $id): WorkStatus {
        $repository = new WorkStatusRepository();

        return $repository->get($id);
    }

    protected function getWork(int $id): Work {
        $repository = new WorkRepository();

        return $repository->get($id);
    }
}
