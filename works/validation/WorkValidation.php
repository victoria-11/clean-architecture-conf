<?php

namespace Works\Validation;

use Models\Validation\ValidationInterface;
use Respect\Validation\Validator;

class WorkValidation implements ValidationInterface
{

    public function validate(array $data): ?array {
        $errors = null;

        try {
            Validator::stringType()->check($data['title']);
            Validator::intType()->check($data['user_id']);
            Validator::boolType()->check($data['published']);
            Validator::intType()->check($data['section_id']);
        } catch (Respect\Validation\Exceptions\Exception $e) {
            $errors = $e->getMessages();
        }

        return $errors;
    }
}
