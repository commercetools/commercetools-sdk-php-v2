<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Api\Models\ProductSearch\ProductSearchErrorResponse;
use Commercetools\Api\Models\ProductSearch\ProductSearchErrorResponseBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ErrorResponse>
 */
final class ErrorResponseBuilder implements Builder
{
    /**

     * @var ?int
     */
    private $statusCode;

    /**

     * @var ?string
     */
    private $message;

    /**

     * @var ?ErrorObjectCollection
     */
    private $errors;

    /**
     * <p>HTTP status code corresponding to the error.</p>
     *

     * @return null|int
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }

    /**
     * <p>First error message in the <code>errors</code> array.</p>
     *

     * @return null|string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * <p>Errors returned for a request.</p>
     * <p>A single error response can contain multiple errors if the errors are related to the same HTTP status code such as <code>400</code>.</p>
     *

     * @return null|ErrorObjectCollection
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * @param ?int $statusCode
     * @return $this
     */
    public function withStatusCode(?int $statusCode)
    {
        $this->statusCode = $statusCode;

        return $this;
    }

    /**
     * @param ?string $message
     * @return $this
     */
    public function withMessage(?string $message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * @param ?ErrorObjectCollection $errors
     * @return $this
     */
    public function withErrors(?ErrorObjectCollection $errors)
    {
        $this->errors = $errors;

        return $this;
    }


    public function build(): ErrorResponse
    {
        return new ErrorResponseModel(
            $this->statusCode,
            $this->message,
            $this->errors
        );
    }

    public static function of(): ErrorResponseBuilder
    {
        return new self();
    }
}
