<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Base\Builder;

/**
 * @implements Builder<ErrorResponse>
 */
final class ErrorResponseBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $error_description;

    /**
     * @var ?string
     */
    private $error;

    /**
     * @var ?string
     */
    private $message;

    /**
     * @var ?ErrorObjectCollection
     */
    private $errors;

    /**
     * @var ?int
     */
    private $statusCode;

    public function __construct()
    {
    }

    /**
     * @return null|string
     */
    public function getError_description()
    {
        return $this->error_description;
    }

    /**
     * @return null|string
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * @return null|string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @return null|ErrorObjectCollection
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * @return null|int
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }

    /**
     * @return $this
     */
    public function withError_description(?string $error_description)
    {
        $this->error_description = $error_description;

        return $this;
    }

    /**
     * @return $this
     */
    public function withError(?string $error)
    {
        $this->error = $error;

        return $this;
    }

    /**
     * @return $this
     */
    public function withMessage(?string $message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * @return $this
     */
    public function withErrors(?ErrorObjectCollection $errors)
    {
        $this->errors = $errors;

        return $this;
    }

    /**
     * @return $this
     */
    public function withStatusCode(?int $statusCode)
    {
        $this->statusCode = $statusCode;

        return $this;
    }

    public function build(): ErrorResponse
    {
        return new ErrorResponseModel(
            $this->error_description,
            $this->error,
            $this->message,
            $this->errors,
            $this->statusCode
        );
    }

    public static function of(): ErrorResponseBuilder
    {
        return new self();
    }
}
