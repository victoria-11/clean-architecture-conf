<?php

namespace Works\Usecases;

use Models\Usecases\UsecaseInterface;

use Works\Repositories\{
    WorkRepository,
    UserRepository,
    WorkStatusRepository
};

use Works\Entities\{
    Work,
    User,
    WorkStatus
};

use Works\Validation\{
    WorkValidation,
};

use Models\Validation\ValidationInterface;

use Conferences\Entities\Section;
use Conferences\Repositories\SectionRepository;

class CreateWork implements UsecaseInterface
{

    public function create(array $data): Work {
        $validation = new WorkValidation();
        $validation->validate($data);

        $work = $this->createEntity($data);

        $repository = new WorkRepository();
        $id = $repository->insert($work);

        $work->id = $id;

        return $work;
    }

    public function createEntity(array $data): Work {
        $statusName = WorkStatus::NEW;

        $work = new Work();
        $work->title = $data['title'];
        $work->published = $data['published'];
        $work->user = $this->getUser($data['user_id']);
        $work->section = $this->getSection($data['user_id']);
        $work->status = $this->getStatus($statusName);

        return $work;
    }

    protected function getUser(int $id): User {
        $repository = new UserRepository();

        return $repository->get($id);
    }

    protected function getSection(int $id): Section {
        $repository = new SectionRepository();

        return $repository->get($id);
    }

    protected function getStatus(string $status): WorkStatus {
        $repository = new WorkStatusRepository();

        return $repository->getByName($status);
    }
}
