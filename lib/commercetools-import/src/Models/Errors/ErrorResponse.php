<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Models\Errors;

use Shared\Base\JsonObject;
use Shared\Base\DateTimeImmutableCollection;

interface ErrorResponse extends JsonObject
{

    public const FIELD_STATUS_CODE = 'statusCode';
    public const FIELD_MESSAGE = 'message';
    public const FIELD_ERROR = 'error';
    public const FIELD_ERROR_DESCRIPTION = 'error_description';
    public const FIELD_ERRORS = 'errors';

    /**
     * <p>The http status code of the response.</p>
     *
     * @return null|int
     */
    public function getStatusCode();

    /**
     * <p>Describes the error.</p>
     *
     * @return null|string
     */
    public function getMessage();

    /**
     * <p>This property is only used for OAuth2 errors.
     * Contains the error code.</p>
     *
     * @return null|string
     */
    public function getError();

    /**
     * <p>This property is only used for OAuth2 errors.
     * Additional information to assist the client developer in
     * understanding the error.</p>
     *
     * @return null|string
     */
    public function getError_description();

    /**
     * <p>The errors that caused this error response.</p>
     *
     * @return null|ErrorObjectCollection
     */
    public function getErrors();

    public function setStatusCode(?int $statusCode): void;

    public function setMessage(?string $message): void;

    public function setError(?string $error): void;

    public function setError_description(?string $error_description): void;

    public function setErrors(?ErrorObjectCollection $errors): void;
}
