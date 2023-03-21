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
 * @implements Builder<ProductSelectionVariantExclusionChangedMessagePayload>
 */
final class ProductSelectionVariantExclusionChangedMessagePayloadBuilder implements Builder
{
    /**

     * @var null|ProductReference|ProductReferenceBuilder
     */
    private $product;

    /**

     * @var null|ProductVariantExclusion|ProductVariantExclusionBuilder
     */
    private $oldVariantExclusion;

    /**

     * @var null|ProductVariantExclusion|ProductVariantExclusionBuilder
     */
    private $newVariantExclusion;

    /**
     * <p><a href="ctp:api:type:Product">Product</a> for which the Product Variant Exclusion changed.</p>
     *

     * @return null|ProductReference
     */
    public function getProduct()
    {
        return $this->product instanceof ProductReferenceBuilder ? $this->product->build() : $this->product;
    }

    /**
     * <p>Product Variant Exclusion before the <a href="ctp:api:type:ProductSelectionSetVariantExclusionAction">Set Variant Exclusion</a> update action.</p>
     *

     * @return null|ProductVariantExclusion
     */
    public function getOldVariantExclusion()
    {
        return $this->oldVariantExclusion instanceof ProductVariantExclusionBuilder ? $this->oldVariantExclusion->build() : $this->oldVariantExclusion;
    }

    /**
     * <p>Product Variant Exclusion after the <a href="ctp:api:type:ProductSelectionSetVariantExclusionAction">Set Variant Exclusion</a> update action.</p>
     *

     * @return null|ProductVariantExclusion
     */
    public function getNewVariantExclusion()
    {
        return $this->newVariantExclusion instanceof ProductVariantExclusionBuilder ? $this->newVariantExclusion->build() : $this->newVariantExclusion;
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
     * @param ?ProductVariantExclusion $oldVariantExclusion
     * @return $this
     */
    public function withOldVariantExclusion(?ProductVariantExclusion $oldVariantExclusion)
    {
        $this->oldVariantExclusion = $oldVariantExclusion;

        return $this;
    }

    /**
     * @param ?ProductVariantExclusion $newVariantExclusion
     * @return $this
     */
    public function withNewVariantExclusion(?ProductVariantExclusion $newVariantExclusion)
    {
        $this->newVariantExclusion = $newVariantExclusion;

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
     * @deprecated use withOldVariantExclusion() instead
     * @return $this
     */
    public function withOldVariantExclusionBuilder(?ProductVariantExclusionBuilder $oldVariantExclusion)
    {
        $this->oldVariantExclusion = $oldVariantExclusion;

        return $this;
    }

    /**
     * @deprecated use withNewVariantExclusion() instead
     * @return $this
     */
    public function withNewVariantExclusionBuilder(?ProductVariantExclusionBuilder $newVariantExclusion)
    {
        $this->newVariantExclusion = $newVariantExclusion;

        return $this;
    }

    public function build(): ProductSelectionVariantExclusionChangedMessagePayload
    {
        return new ProductSelectionVariantExclusionChangedMessagePayloadModel(
            $this->product instanceof ProductReferenceBuilder ? $this->product->build() : $this->product,
            $this->oldVariantExclusion instanceof ProductVariantExclusionBuilder ? $this->oldVariantExclusion->build() : $this->oldVariantExclusion,
            $this->newVariantExclusion instanceof ProductVariantExclusionBuilder ? $this->newVariantExclusion->build() : $this->newVariantExclusion
        );
    }

    public static function of(): ProductSelectionVariantExclusionChangedMessagePayloadBuilder
    {
        return new self();
    }
}
