<?php

namespace Works\Validation;

use Respect\Validation\Validator;

interface ValidationInterface
{
    public function validate(array $data): ?array;
}
