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
     * <p>Reference to a Product that is assigned to the ProductSelection.</p>
     *
     * @return null|ProductReference
     */
    public function getProduct()
    {
        return $this->product instanceof ProductReferenceBuilder ? $this->product->build() : $this->product;
    }

    /**
     * <p>Reference to the ProductSelection that this assignment is part of.</p>
     *
     * @return null|ProductSelectionReference
     */
    public function getProductSelection()
    {
        return $this->productSelection instanceof ProductSelectionReferenceBuilder ? $this->productSelection->build() : $this->productSelection;
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

    public function build(): ProductSelectionAssignment
    {
        return new ProductSelectionAssignmentModel(
            $this->product instanceof ProductReferenceBuilder ? $this->product->build() : $this->product,
            $this->productSelection instanceof ProductSelectionReferenceBuilder ? $this->productSelection->build() : $this->productSelection
        );
    }

    public static function of(): ProductSelectionAssignmentBuilder
    {
        return new self();
    }
}
