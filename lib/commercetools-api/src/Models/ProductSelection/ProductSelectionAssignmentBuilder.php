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
 * @implements Builder<ProductSelectionAssignment>
 */
final class ProductSelectionAssignmentBuilder implements Builder
{
    /**

     * @var null|ProductReference|ProductReferenceBuilder
     */
    private $product;

    /**

     * @var null|ProductSelectionReference|ProductSelectionReferenceBuilder
     */
    private $productSelection;

    /**

     * @var null|ProductVariantSelection|ProductVariantSelectionBuilder
     */
    private $variantSelection;

    /**
     * <p>Reference to a Product that is assigned to the ProductSelection.</p>
     *

     * @return null|ProductReference
     */
    public function getProduct()
    {
        return $this->product instanceof ProductReferenceBuilder ? $this->product->build() : $this->product;
    }

    /**
     * <p>Reference to the Product Selection that this assignment is part of.</p>
     *

     * @return null|ProductSelectionReference
     */
    public function getProductSelection()
    {
        return $this->productSelection instanceof ProductSelectionReferenceBuilder ? $this->productSelection->build() : $this->productSelection;
    }

    /**
     * <p>Selects which Variants of the newly added Product will be included, or excluded, from the Product Selection.</p>
     *

     * @return null|ProductVariantSelection
     */
    public function getVariantSelection()
    {
        return $this->variantSelection instanceof ProductVariantSelectionBuilder ? $this->variantSelection->build() : $this->variantSelection;
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
     * @param ?ProductSelectionReference $productSelection
     * @return $this
     */
    public function withProductSelection(?ProductSelectionReference $productSelection)
    {
        $this->productSelection = $productSelection;

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
     * @deprecated use withProduct() instead
     * @return $this
     */
    public function withProductBuilder(?ProductReferenceBuilder $product)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * @deprecated use withProductSelection() instead
     * @return $this
     */
    public function withProductSelectionBuilder(?ProductSelectionReferenceBuilder $productSelection)
    {
        $this->productSelection = $productSelection;

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

    public function build(): ProductSelectionAssignment
    {
        return new ProductSelectionAssignmentModel(
            $this->product instanceof ProductReferenceBuilder ? $this->product->build() : $this->product,
            $this->productSelection instanceof ProductSelectionReferenceBuilder ? $this->productSelection->build() : $this->productSelection,
            $this->variantSelection instanceof ProductVariantSelectionBuilder ? $this->variantSelection->build() : $this->variantSelection
        );
    }

    public static function of(): ProductSelectionAssignmentBuilder
    {
        return new self();
    }
}
