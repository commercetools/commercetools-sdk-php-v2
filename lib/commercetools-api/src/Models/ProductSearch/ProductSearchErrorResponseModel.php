<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSearch;

use Commercetools\Api\Models\Error\ErrorObjectCollection;
use Commercetools\Api\Models\Error\ErrorResponse;
use Commercetools\Api\Models\Error\ErrorResponseModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ProductSearchErrorResponseModel extends JsonObjectModel implements ProductSearchErrorResponse
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
     * @var ?ErrorObjectCollection
     */
    protected $errors;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?int $statusCode = null,
        ?string $message = null,
        ?ErrorObjectCollection $errors = null
    ) {
        $this->statusCode = $statusCode;
        $this->message = $message;
        $this->errors = $errors;
    }

    /**
     * <p>The HTTP status code of the response.</p>
     *
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
     * <p>Describes the error.</p>
     *
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
     * <p>The errors that caused this error response.</p>
     *
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
     * @param ?ErrorObjectCollection $errors
     */
    public function setErrors(?ErrorObjectCollection $errors): void
    {
        $this->errors = $errors;
    }
}
