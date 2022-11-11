<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ErrorResponse extends JsonObject
{
    public const FIELD_STATUS_CODE = 'statusCode';
    public const FIELD_MESSAGE = 'message';
    public const FIELD_ERRORS = 'errors';

    /**
     * <p>HTTP status code corresponding to the error.</p>
     *

     * @return null|int
     */
    public function getStatusCode();

    /**
     * <p>First error message in the <code>errors</code> array.</p>
     *

     * @return null|string
     */
    public function getMessage();

    /**
     * <p>Errors returned for a request.</p>
     * <p>A single error response can contain multiple errors if the errors are related to the same HTTP status code such as <code>400</code>.</p>
     *

     * @return null|ErrorObjectCollection
     */
    public function getErrors();

    /**
     * @param ?int $statusCode
     */
    public function setStatusCode(?int $statusCode): void;

    /**
     * @param ?string $message
     */
    public function setMessage(?string $message): void;

    /**
     * @param ?ErrorObjectCollection $errors
     */
    public function setErrors(?ErrorObjectCollection $errors): void;
}
