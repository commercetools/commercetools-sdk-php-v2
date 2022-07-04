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
 * @implements Builder<AssignedProductSelection>
 */
final class AssignedProductSelectionBuilder implements Builder
{
    /**
     * @var null|ProductSelectionReference|ProductSelectionReferenceBuilder
     */
    private $productSelection;

    /**
     * @var null|ProductVariantSelection|ProductVariantSelectionBuilder
     */
    private $variantSelection;

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

    public function build(): AssignedProductSelection
    {
        return new AssignedProductSelectionModel(
            $this->productSelection instanceof ProductSelectionReferenceBuilder ? $this->productSelection->build() : $this->productSelection,
            $this->variantSelection instanceof ProductVariantSelectionBuilder ? $this->variantSelection->build() : $this->variantSelection
        );
    }

    public static function of(): AssignedProductSelectionBuilder
    {
        return new self();
    }
}
