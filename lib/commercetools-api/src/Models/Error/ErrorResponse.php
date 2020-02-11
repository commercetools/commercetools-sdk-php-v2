<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface ErrorResponse extends JsonObject
{

    public const FIELD_STATUS_CODE = 'statusCode';
    public const FIELD_MESSAGE = 'message';
    public const FIELD_ERROR = 'error';
    public const FIELD_ERROR_DESCRIPTION = 'error_description';
    public const FIELD_ERRORS = 'errors';

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
