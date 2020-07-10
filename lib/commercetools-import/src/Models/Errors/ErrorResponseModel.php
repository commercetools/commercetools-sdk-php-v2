<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Models\Errors;

use Shared\Base\DateTimeImmutableCollection;
use Shared\Base\JsonObject;
use Shared\Base\JsonObjectModel;
use Shared\Base\MapperFactory;
use stdClass;


/**
 * @internal
 */
final class ErrorResponseModel extends JsonObjectModel implements ErrorResponse
{

    /**
     * @var ?int
     */
    protected $statusCode;

    /**
     * @var ?string
     */
    protected $message;

    /**
     * @var ?string
     */
    protected $error;

    /**
     * @var ?string
     */
    protected $error_description;

    /**
     * @var ?ErrorObjectCollection
     */
    protected $errors;


    public function __construct(
        int $statusCode = null,
        string $message = null,
        string $error = null,
        string $error_description = null,
        ErrorObjectCollection $errors = null
    ) {
        $this->statusCode = $statusCode;
        $this->message = $message;
        $this->error = $error;
        $this->error_description = $error_description;
        $this->errors = $errors;

    }

    /**
     * <p>The http status code of the response.</p>
     *
     * @return null|int
     */
    public function getStatusCode()
    {
        if (is_null($this->statusCode)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(ErrorResponse::FIELD_STATUS_CODE);
            if (is_null($data)) {
                return null;
            }
            $this->statusCode = (int) $data;
        }

        return $this->statusCode;
    }

    /**
     * <p>Describes the error.</p>
     *
     * @return null|string
     */
    public function getMessage()
    {
        if (is_null($this->message)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ErrorResponse::FIELD_MESSAGE);
            if (is_null($data)) {
                return null;
            }
            $this->message = (string) $data;
        }

        return $this->message;
    }

    /**
     * <p>This property is only used for OAuth2 errors.
     * Contains the error code.</p>
     *
     * @return null|string
     */
    public function getError()
    {
        if (is_null($this->error)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ErrorResponse::FIELD_ERROR);
            if (is_null($data)) {
                return null;
            }
            $this->error = (string) $data;
        }

        return $this->error;
    }

    /**
     * <p>This property is only used for OAuth2 errors.
     * Additional information to assist the client developer in
     * understanding the error.</p>
     *
     * @return null|string
     */
    public function getError_description()
    {
        if (is_null($this->error_description)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ErrorResponse::FIELD_ERROR_DESCRIPTION);
            if (is_null($data)) {
                return null;
            }
            $this->error_description = (string) $data;
        }

        return $this->error_description;
    }

    /**
     * <p>The errors that caused this error response.</p>
     *
     * @return null|ErrorObjectCollection
     */
    public function getErrors()
    {
        if (is_null($this->errors)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(ErrorResponse::FIELD_ERRORS);
            if (is_null($data)) {
                return null;
            }
            $this->errors = ErrorObjectCollection::fromArray($data);
        }

        return $this->errors;
    }

    public function setStatusCode(?int $statusCode): void
    {
        $this->statusCode = $statusCode;
    }

    public function setMessage(?string $message): void
    {
        $this->message = $message;
    }

    public function setError(?string $error): void
    {
        $this->error = $error;
    }

    public function setError_description(?string $error_description): void
    {
        $this->error_description = $error_description;
    }

    public function setErrors(?ErrorObjectCollection $errors): void
    {
        $this->errors = $errors;
    }



}
