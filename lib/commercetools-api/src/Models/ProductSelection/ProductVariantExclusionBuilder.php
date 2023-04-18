<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSelection;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ProductVariantExclusion>
 */
final class ProductVariantExclusionBuilder implements Builder
{
    /**

     * @var ?array
     */
    private $skus;

    /**
     * <p>Non-empty array of SKUs representing Product Variants to be included in the Product Selection with <code>IndividualExclusion</code> <a href="ctp:api:type:ProductSelectionMode">ProductSelectionMode</a>.</p>
     *

     * @return null|array
     */
    public function getSkus()
    {
        return $this->skus;
    }

    /**
     * @param ?array $skus
     * @return $this
     */
    public function withSkus(?array $skus)
    {
        $this->skus = $skus;

        return $this;
    }


    public function build(): ProductVariantExclusion
    {
        return new ProductVariantExclusionModel(
            $this->skus
        );
    }

    public static function of(): ProductVariantExclusionBuilder
    {
        return new self();
    }
}
