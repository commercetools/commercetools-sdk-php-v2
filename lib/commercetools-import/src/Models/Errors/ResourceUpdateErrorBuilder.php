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
 * @implements Builder<ResourceUpdateError>
 */
final class ResourceUpdateErrorBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $message;

    /**
     * @var ?JsonObject
     */
    private $resource;

    /**
     * <p>The error's description.</p>
     *
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

    public function build(): ResourceUpdateError
    {
        return new ResourceUpdateErrorModel(
            $this->message,
            $this->resource
        );
    }

    public static function of(): ResourceUpdateErrorBuilder
    {
        return new self();
    }
}
