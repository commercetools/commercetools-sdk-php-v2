<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Product\ProductReference;
use Commercetools\Api\Models\Product\ProductReferenceBuilder;
use Commercetools\Api\Models\ProductSelection\ProductVariantExclusion;
use Commercetools\Api\Models\ProductSelection\ProductVariantExclusionBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ProductSelectionProductExcludedMessagePayload>
 */
final class ProductSelectionProductExcludedMessagePayloadBuilder implements Builder
{
    /**

     * @var null|ProductReference|ProductReferenceBuilder
     */
    private $product;

    /**

     * @var null|ProductVariantExclusion|ProductVariantExclusionBuilder
     */
    private $variantExclusion;

    /**
     * <p><a href="ctp:api:type:Product">Product</a> that was excluded from the <a href="ctp:api:type:ProductSelection">Product Selection</a>.</p>
     *

     * @return null|ProductReference
     */
    public function getProduct()
    {
        return $this->product instanceof ProductReferenceBuilder ? $this->product->build() : $this->product;
    }

    /**
     * <p>Product Variant Exclusion after the <a href="ctp:api:type:ProductSelectionExcludeProductAction">Exclude Product</a> update action.</p>
     *

     * @return null|ProductVariantExclusion
     */
    public function getVariantExclusion()
    {
        return $this->variantExclusion instanceof ProductVariantExclusionBuilder ? $this->variantExclusion->build() : $this->variantExclusion;
    }

    /**
     * @param ?ProductReference $product
     * @return $this
     */
    public function withProduct(?ProductReference $product)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * @param ?ProductVariantExclusion $variantExclusion
     * @return $this
     */
    public function withVariantExclusion(?ProductVariantExclusion $variantExclusion)
    {
        $this->variantExclusion = $variantExclusion;

        return $this;
    }

    /**
     * @deprecated use withProduct() instead
     * @return $this
     */
    public function withProductBuilder(?ProductReferenceBuilder $product)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * @deprecated use withVariantExclusion() instead
     * @return $this
     */
    public function withVariantExclusionBuilder(?ProductVariantExclusionBuilder $variantExclusion)
    {
        $this->variantExclusion = $variantExclusion;

        return $this;
    }

    public function build(): ProductSelectionProductExcludedMessagePayload
    {
        return new ProductSelectionProductExcludedMessagePayloadModel(
            $this->product instanceof ProductReferenceBuilder ? $this->product->build() : $this->product,
            $this->variantExclusion instanceof ProductVariantExclusionBuilder ? $this->variantExclusion->build() : $this->variantExclusion
        );
    }

    public static function of(): ProductSelectionProductExcludedMessagePayloadBuilder
    {
        return new self();
    }
}
