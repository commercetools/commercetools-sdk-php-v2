<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Variant;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<VariantBulkUpdateSuccessResult>
 */
final class VariantBulkUpdateSuccessResultBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $id;

    /**

     * @var ?string
     */
    private $key;

    /**

     * @var null|VariantBulkUpdateResource|VariantBulkUpdateResourceBuilder
     */
    private $resource;

    /**
     * <p>Unique identifier of the Variant from the request. Present when the Variant was identified by <code>id</code>.</p>
     *

     * @return null|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * <p>User-defined unique identifier of the Variant from the request. Present when the Variant was identified by <code>key</code>.</p>
     *

     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * <p>A lightweight reference containing the <code>id</code> and updated <code>version</code> of the Variant.</p>
     *

     * @return null|VariantBulkUpdateResource
     */
    public function getResource()
    {
        return $this->resource instanceof VariantBulkUpdateResourceBuilder ? $this->resource->build() : $this->resource;
    }

    /**
     * @param ?string $id
     * @return $this
     */
    public function withId(?string $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @param ?string $key
     * @return $this
     */
    public function withKey(?string $key)
    {
        $this->key = $key;

        return $this;
    }

    /**
     * @param ?VariantBulkUpdateResource $resource
     * @return $this
     */
    public function withResource(?VariantBulkUpdateResource $resource)
    {
        $this->resource = $resource;

        return $this;
    }

    /**
     * @deprecated use withResource() instead
     * @return $this
     */
    public function withResourceBuilder(?VariantBulkUpdateResourceBuilder $resource)
    {
        $this->resource = $resource;

        return $this;
    }

    public function build(): VariantBulkUpdateSuccessResult
    {
        return new VariantBulkUpdateSuccessResultModel(
            $this->id,
            $this->key,
            $this->resource instanceof VariantBulkUpdateResourceBuilder ? $this->resource->build() : $this->resource
        );
    }

    public static function of(): VariantBulkUpdateSuccessResultBuilder
    {
        return new self();
    }
}
