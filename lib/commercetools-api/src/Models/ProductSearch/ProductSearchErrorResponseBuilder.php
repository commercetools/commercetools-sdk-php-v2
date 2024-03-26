<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSearch;

use Commercetools\Api\Models\Error\ErrorObjectCollection;
use Commercetools\Api\Models\Error\ErrorResponse;
use Commercetools\Api\Models\Error\ErrorResponseBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ProductSearchErrorResponse>
 */
final class ProductSearchErrorResponseBuilder implements Builder
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
     * <p>The http status code of the response.</p>
     *

     * @return null|int
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }

    /**
     * <p>Describes the error.</p>
     *

     * @return null|string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * <p>The errors that caused this error response.</p>
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


    public function build(): ProductSearchErrorResponse
    {
        return new ProductSearchErrorResponseModel(
            $this->statusCode,
            $this->message,
            $this->errors
        );
    }

    public static function of(): ProductSearchErrorResponseBuilder
    {
        return new self();
    }
}
