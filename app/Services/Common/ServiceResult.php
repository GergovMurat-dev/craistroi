<?php

namespace App\Services\Common;

class ServiceResult
{
    public bool $isError = false;
    public string $message = '';
    public mixed $data = null;
    public array $errors = [];
    public int $code;

    public static function createErrorResult(string $message, array $errors, $code = 400): self
    {
        $result = new self();
        $result->code = $code;
        $result->errors = $errors;
        $result->message = $message;
        $result->isError = true;

        return $result;
    }

    public static function createSuccessResult($data, $code = 200): self
    {
        $result = new self();
        $result->isError = false;
        $result->data = $data;
        $result->code = $code;

        return $result;
    }
}
