<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Errors;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ResourceNotFoundError>
 */
final class ResourceNotFoundErrorBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $message;

    /**
     * @var null|mixed|mixed
     */
    private $resource;

    /**
     * <p>This is a placeholder for an actual platform error message.</p>
     *
     * @return null|string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @return null|mixed
     */
    public function getResource()
    {
        return $this->resource;
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
     * @param mixed $resource
     * @return $this
     */
    public function withResource($resource)
    {
        $this->resource = $resource;

        return $this;
    }


    public function build(): ResourceNotFoundError
    {
        return new ResourceNotFoundErrorModel(
            $this->message,
            $this->resource
        );
    }

    public static function of(): ResourceNotFoundErrorBuilder
    {
        return new self();
    }
}
