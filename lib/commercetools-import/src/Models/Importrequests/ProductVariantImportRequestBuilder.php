<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Models\Importrequests;

use Shared\Base\Builder;
use Shared\Base\DateTimeImmutableCollection;
use Shared\Base\JsonObject;
use Shared\Base\JsonObjectModel;
use Shared\Base\MapperFactory;
use stdClass;
use Models\Productvariants\ProductVariantImportCollection;

/**
 * @implements Builder<ProductVariantImportRequest>
 */
final class ProductVariantImportRequestBuilder implements Builder
{
    /**
     * @var ?ProductVariantImportCollection
     */
    private $resources;

    /**
     * <p>The product variant import resources of this request.</p>
     *
     * @return null|ProductVariantImportCollection
     */
    public function getResources()
    {
        return $this->resources;
    }

    /**
     * @return $this
     */
    public function withResources(?ProductVariantImportCollection $resources)
    {
        $this->resources = $resources;

        return $this;
    }


    public function build(): ProductVariantImportRequest
    {
        return new ProductVariantImportRequestModel(
            $this->resources
        );
    }

    public static function of(): ProductVariantImportRequestBuilder
    {
        return new self();
    }
}
