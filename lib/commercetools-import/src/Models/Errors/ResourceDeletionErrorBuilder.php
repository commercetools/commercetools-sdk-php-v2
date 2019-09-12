<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Errors;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;

/**
 * @implements Builder<ResourceDeletionError>
 */
final class ResourceDeletionErrorBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $code;

    /**
     * @var ?string
     */
    private $message;

    /**
     * @var ?JsonObject
     */
    private $resource;

    public function __construct()
    {
    }

    /**
     * @return null|string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @return null|string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @return null|JsonObject
     */
    public function getResource()
    {
        return $this->resource;
    }

    /**
     * @return $this
     */
    public function withCode(?string $code)
    {
        $this->code = $code;

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
    public function withResource(?JsonObject $resource)
    {
        $this->resource = $resource;

        return $this;
    }

    public function build(): ResourceDeletionError
    {
        return new ResourceDeletionErrorModel(
            $this->code,
            $this->message,
            $this->resource
        );
    }

    public static function of(): ResourceDeletionErrorBuilder
    {
        return new self();
    }
}
