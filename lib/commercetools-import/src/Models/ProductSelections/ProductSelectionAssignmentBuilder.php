<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\ProductSelections;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use Commercetools\Import\Models\Common\ProductKeyReference;
use Commercetools\Import\Models\Common\ProductKeyReferenceBuilder;
use stdClass;

/**
 * @implements Builder<ProductSelectionAssignment>
 */
final class ProductSelectionAssignmentBuilder implements Builder
{
    /**

     * @var null|ProductKeyReference|ProductKeyReferenceBuilder
     */
    private $product;

    /**

     * @var null|VariantSelection|VariantSelectionBuilder
     */
    private $variantSelection;

    /**

     * @var null|VariantExclusion|VariantExclusionBuilder
     */
    private $variantExclusion;

    /**
     * <p>Reference to the Product by key.</p>
     *

     * @return null|ProductKeyReference
     */
    public function getProduct()
    {
        return $this->product instanceof ProductKeyReferenceBuilder ? $this->product->build() : $this->product;
    }

    /**
     * <p>Variant selection specifying included SKUs.</p>
     *

     * @return null|VariantSelection
     */
    public function getVariantSelection()
    {
        return $this->variantSelection instanceof VariantSelectionBuilder ? $this->variantSelection->build() : $this->variantSelection;
    }

    /**
     * <p>Variant exclusion specifying excluded SKUs.</p>
     *

     * @return null|VariantExclusion
     */
    public function getVariantExclusion()
    {
        return $this->variantExclusion instanceof VariantExclusionBuilder ? $this->variantExclusion->build() : $this->variantExclusion;
    }

    /**
     * @param ?ProductKeyReference $product
     * @return $this
     */
    public function withProduct(?ProductKeyReference $product)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * @param ?VariantSelection $variantSelection
     * @return $this
     */
    public function withVariantSelection(?VariantSelection $variantSelection)
    {
        $this->variantSelection = $variantSelection;

        return $this;
    }

    /**
     * @param ?VariantExclusion $variantExclusion
     * @return $this
     */
    public function withVariantExclusion(?VariantExclusion $variantExclusion)
    {
        $this->variantExclusion = $variantExclusion;

        return $this;
    }

    /**
     * @deprecated use withProduct() instead
     * @return $this
     */
    public function withProductBuilder(?ProductKeyReferenceBuilder $product)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * @deprecated use withVariantSelection() instead
     * @return $this
     */
    public function withVariantSelectionBuilder(?VariantSelectionBuilder $variantSelection)
    {
        $this->variantSelection = $variantSelection;

        return $this;
    }

    /**
     * @deprecated use withVariantExclusion() instead
     * @return $this
     */
    public function withVariantExclusionBuilder(?VariantExclusionBuilder $variantExclusion)
    {
        $this->variantExclusion = $variantExclusion;

        return $this;
    }

    public function build(): ProductSelectionAssignment
    {
        return new ProductSelectionAssignmentModel(
            $this->product instanceof ProductKeyReferenceBuilder ? $this->product->build() : $this->product,
            $this->variantSelection instanceof VariantSelectionBuilder ? $this->variantSelection->build() : $this->variantSelection,
            $this->variantExclusion instanceof VariantExclusionBuilder ? $this->variantExclusion->build() : $this->variantExclusion
        );
    }

    public static function of(): ProductSelectionAssignmentBuilder
    {
        return new self();
    }
}
