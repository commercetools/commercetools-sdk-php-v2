<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Importrequests;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use Commercetools\Import\Models\Productvariants\ProductVariantImportCollection;
use stdClass;

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
     * @param ?ProductVariantImportCollection $resources
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
