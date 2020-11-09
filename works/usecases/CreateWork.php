<?php

namespace Works\Usecases;

use Works\Usecases\UsecaseInterface;

use Works\Repositories\{
    WorkRepository,
    UserRepository,
    SectionRepository,
    WorkStatusRepository
};

use Works\Entities\{
    Work,
    User,
    Section,
    WorkStatus
};

use Works\Validation\{
    WorkValidation,
    ValidationInterface
};

class CreateWork implements UsecaseInterface
{

    public function validate(ValidationInterface $validation, array $data): void {
        $errors = $validation->validate($data);

        if($errors) {
            print_r($errors);
            die;
        }
    }

    public function create(array $data): Work {
        $validation = new WorkValidation();
        $this->validate($validation, $data);

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
