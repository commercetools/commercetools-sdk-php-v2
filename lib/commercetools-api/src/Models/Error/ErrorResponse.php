<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Base\JsonObject;

interface ErrorResponse extends JsonObject
{
    const FIELD_STATUS_CODE = 'statusCode';
    const FIELD_MESSAGE = 'message';
    const FIELD_ERROR = 'error';
    const FIELD_ERROR_DESCRIPTION = 'error_description';
    const FIELD_ERRORS = 'errors';

    /**
     * @return null|int
     */
    public function getStatusCode();

    /**
     * @return null|string
     */
    public function getMessage();

    /**
     * @return null|string
     */
    public function getError();

    /**
     * @return null|string
     */
    public function getError_description();

    /**
     * @return null|ErrorObjectCollection
     */
    public function getErrors();

    public function setStatusCode(?int $statusCode): void;

    public function setMessage(?string $message): void;

    public function setError(?string $error): void;

    public function setError_description(?string $error_description): void;

    public function setErrors(?ErrorObjectCollection $errors): void;
}
