<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Works\Usecases\CreateWork;

final class CreateWorkTest extends TestCase
{
    public function testDataValidated(): void {
        $data = [
            'title' => 'test',
            'user_id' => 1,
            'published' => false,
        ];

        $usecase = new CreateWork();

        $this->expectException(Respect\Validation\Exceptions\Exception::class);

        $usecase->create($data);
    }
}
