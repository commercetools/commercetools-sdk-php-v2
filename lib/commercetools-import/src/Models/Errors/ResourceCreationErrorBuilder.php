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
 * @implements Builder<ResourceCreationError>
 */
final class ResourceCreationErrorBuilder implements Builder
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
     * <p>A plain language description of the cause of an error.</p>
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


    public function build(): ResourceCreationError
    {
        return new ResourceCreationErrorModel(
            $this->message,
            $this->resource
        );
    }

    public static function of(): ResourceCreationErrorBuilder
    {
        return new self();
    }
}
