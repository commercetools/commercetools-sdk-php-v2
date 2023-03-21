<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSelection;

use Commercetools\Api\Models\Product\ProductReference;
use Commercetools\Api\Models\Product\ProductReferenceBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<AssignedProductReference>
 */
final class AssignedProductReferenceBuilder implements Builder
{
    /**

     * @var null|ProductReference|ProductReferenceBuilder
     */
    private $product;

    /**

     * @var null|ProductVariantSelection|ProductVariantSelectionBuilder
     */
    private $variantSelection;

    /**

     * @var null|ProductVariantExclusion|ProductVariantExclusionBuilder
     */
    private $variantExclusion;

    /**
     * <p>Reference to a Product that is assigned to the Product Selection.</p>
     *

     * @return null|ProductReference
     */
    public function getProduct()
    {
        return $this->product instanceof ProductReferenceBuilder ? $this->product->build() : $this->product;
    }

    /**
     * <p>The Variants of the Product that are included from the Product Selection.</p>
     * <p>This field may exist only for the <a href="ctp:api:type:IndividualProductSelectionType">IndividualProductSelectionType</a>.
     * In absence of this field, all Variants are deemed to be included.</p>
     *

     * @return null|ProductVariantSelection
     */
    public function getVariantSelection()
    {
        return $this->variantSelection instanceof ProductVariantSelectionBuilder ? $this->variantSelection->build() : $this->variantSelection;
    }

    /**
     * <p>The Variants of the Product that are excluded from the Product Selection.</p>
     * <p>This field may exist only for the <a href="ctp:api:type:IndividualExclusionProductSelectionType">IndividualExclusionProductSelectionType</a>.
     * In absence of this field, all Variants are deemed to be excluded.</p>
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
     * @param ?ProductVariantSelection $variantSelection
     * @return $this
     */
    public function withVariantSelection(?ProductVariantSelection $variantSelection)
    {
        $this->variantSelection = $variantSelection;

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
     * @deprecated use withVariantSelection() instead
     * @return $this
     */
    public function withVariantSelectionBuilder(?ProductVariantSelectionBuilder $variantSelection)
    {
        $this->variantSelection = $variantSelection;

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

    public function build(): AssignedProductReference
    {
        return new AssignedProductReferenceModel(
            $this->product instanceof ProductReferenceBuilder ? $this->product->build() : $this->product,
            $this->variantSelection instanceof ProductVariantSelectionBuilder ? $this->variantSelection->build() : $this->variantSelection,
            $this->variantExclusion instanceof ProductVariantExclusionBuilder ? $this->variantExclusion->build() : $this->variantExclusion
        );
    }

    public static function of(): AssignedProductReferenceBuilder
    {
        return new self();
    }
}
