<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<AuthErrorResponse>
 */
final class AuthErrorResponseBuilder implements Builder
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

     * @var ?string
     */
    private $error;

    /**

     * @var ?string
     */
    private $error_description;

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
     * <p>Authentication and authorization-related errors returned for a request.</p>
     *

     * @return null|ErrorObjectCollection
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * <p>Error code as per the <a href="https://tools.ietf.org/html/rfc6749#section-5.2">OAuth 2.0 specification</a>. For example: <code>&quot;access_denied&quot;</code>.</p>
     *

     * @return null|string
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * <p>Plain text description of the first error.</p>
     *

     * @return null|string
     */
    public function getError_description()
    {
        return $this->error_description;
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

    /**
     * @param ?string $error
     * @return $this
     */
    public function withError(?string $error)
    {
        $this->error = $error;

        return $this;
    }

    /**
     * @param ?string $error_description
     * @return $this
     */
    public function withError_description(?string $error_description)
    {
        $this->error_description = $error_description;

        return $this;
    }


    public function build(): AuthErrorResponse
    {
        return new AuthErrorResponseModel(
            $this->statusCode,
            $this->message,
            $this->errors,
            $this->error,
            $this->error_description
        );
    }

    public static function of(): AuthErrorResponseBuilder
    {
        return new self();
    }
}
