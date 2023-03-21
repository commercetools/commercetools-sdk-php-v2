<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSelection;

use Commercetools\Api\Models\Product\ProductResourceIdentifier;
use Commercetools\Api\Models\Product\ProductResourceIdentifierBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ProductSelectionSetVariantExclusionAction>
 */
final class ProductSelectionSetVariantExclusionActionBuilder implements Builder
{
    /**

     * @var null|ProductResourceIdentifier|ProductResourceIdentifierBuilder
     */
    private $product;

    /**

     * @var null|ProductVariantExclusion|ProductVariantExclusionBuilder
     */
    private $variantExclusion;

    /**
     * <p>ResourceIdentifier of the Product</p>
     *

     * @return null|ProductResourceIdentifier
     */
    public function getProduct()
    {
        return $this->product instanceof ProductResourceIdentifierBuilder ? $this->product->build() : $this->product;
    }

    /**
     * <p>Determines which Variants of the previously excluded Product are to be included in the Product Selection of type Individual Exclusion.
     * Leave it empty to unset an existing Variant Exclusion.</p>
     *

     * @return null|ProductVariantExclusion
     */
    public function getVariantExclusion()
    {
        return $this->variantExclusion instanceof ProductVariantExclusionBuilder ? $this->variantExclusion->build() : $this->variantExclusion;
    }

    /**
     * @param ?ProductResourceIdentifier $product
     * @return $this
     */
    public function withProduct(?ProductResourceIdentifier $product)
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
    public function withProductBuilder(?ProductResourceIdentifierBuilder $product)
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

    public function build(): ProductSelectionSetVariantExclusionAction
    {
        return new ProductSelectionSetVariantExclusionActionModel(
            $this->product instanceof ProductResourceIdentifierBuilder ? $this->product->build() : $this->product,
            $this->variantExclusion instanceof ProductVariantExclusionBuilder ? $this->variantExclusion->build() : $this->variantExclusion
        );
    }

    public static function of(): ProductSelectionSetVariantExclusionActionBuilder
    {
        return new self();
    }
}
