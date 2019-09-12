<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Errors;

use Commercetools\Base\JsonObjectModel;
use stdClass;

final class ErrorResponseModel extends JsonObjectModel implements ErrorResponse
{
    /**
     * @var ?string
     */
    protected $error_description;

    /**
     * @var ?string
     */
    protected $error;

    /**
     * @var ?string
     */
    protected $message;

    /**
     * @var ?ErrorObjectCollection
     */
    protected $errors;

    /**
     * @var ?int
     */
    protected $statusCode;

    public function __construct(
        string $error_description = null,
        string $error = null,
        string $message = null,
        ErrorObjectCollection $errors = null,
        int $statusCode = null
    ) {
        $this->error_description = $error_description;
        $this->error = $error;
        $this->message = $message;
        $this->errors = $errors;
        $this->statusCode = $statusCode;
    }

    /**
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

    /**
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

    public function setError_description(?string $error_description): void
    {
        $this->error_description = $error_description;
    }

    public function setError(?string $error): void
    {
        $this->error = $error;
    }

    public function setMessage(?string $message): void
    {
        $this->message = $message;
    }

    public function setErrors(?ErrorObjectCollection $errors): void
    {
        $this->errors = $errors;
    }

    public function setStatusCode(?int $statusCode): void
    {
        $this->statusCode = $statusCode;
    }
}
