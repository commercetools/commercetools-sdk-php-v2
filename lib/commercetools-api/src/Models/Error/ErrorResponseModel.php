<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ErrorResponseModel extends JsonObjectModel implements ErrorResponse
{
    /**
     *
     * @var ?int
     */
    protected $statusCode;

    /**
     *
     * @var ?string
     */
    protected $message;

    /**
     *
     * @var ?string
     */
    protected $error;

    /**
     *
     * @var ?string
     */
    protected $error_description;

    /**
     *
     * @var ?ErrorObjectCollection
     */
    protected $errors;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?int $statusCode = null,
        ?string $message = null,
        ?string $error = null,
        ?string $error_description = null,
        ?ErrorObjectCollection $errors = null
    ) {
        $this->statusCode = $statusCode;
        $this->message = $message;
        $this->error = $error;
        $this->error_description = $error_description;
        $this->errors = $errors;
    }

    /**
     *
     * @return null|int
     */
    public function getStatusCode()
    {
        if (is_null($this->statusCode)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_STATUS_CODE);
            if (is_null($data)) {
                return null;
            }
            $this->statusCode = (int) $data;
        }

        return $this->statusCode;
    }

    /**
     *
     * @return null|string
     */
    public function getMessage()
    {
        if (is_null($this->message)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_MESSAGE);
            if (is_null($data)) {
                return null;
            }
            $this->message = (string) $data;
        }

        return $this->message;
    }

    /**
     *
     * @return null|string
     */
    public function getError()
    {
        if (is_null($this->error)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ERROR);
            if (is_null($data)) {
                return null;
            }
            $this->error = (string) $data;
        }

        return $this->error;
    }

    /**
     *
     * @return null|string
     */
    public function getError_description()
    {
        if (is_null($this->error_description)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ERROR_DESCRIPTION);
            if (is_null($data)) {
                return null;
            }
            $this->error_description = (string) $data;
        }

        return $this->error_description;
    }

    /**
     *
     * @return null|ErrorObjectCollection
     */
    public function getErrors()
    {
        if (is_null($this->errors)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_ERRORS);
            if (is_null($data)) {
                return null;
            }
            $this->errors = ErrorObjectCollection::fromArray($data);
        }

        return $this->errors;
    }


    /**
     * @param ?int $statusCode
     */
    public function setStatusCode(?int $statusCode): void
    {
        $this->statusCode = $statusCode;
    }

    /**
     * @param ?string $message
     */
    public function setMessage(?string $message): void
    {
        $this->message = $message;
    }

    /**
     * @param ?string $error
     */
    public function setError(?string $error): void
    {
        $this->error = $error;
    }

    /**
     * @param ?string $error_description
     */
    public function setError_description(?string $error_description): void
    {
        $this->error_description = $error_description;
    }

    /**
     * @param ?ErrorObjectCollection $errors
     */
    public function setErrors(?ErrorObjectCollection $errors): void
    {
        $this->errors = $errors;
    }
}
