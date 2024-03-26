<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSearch;

use Commercetools\Api\Models\Error\ErrorObjectCollection;
use Commercetools\Api\Models\Error\ErrorResponse;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductSearchErrorResponse extends ErrorResponse
{
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
     * <p>The errors that caused this error response.</p>
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
