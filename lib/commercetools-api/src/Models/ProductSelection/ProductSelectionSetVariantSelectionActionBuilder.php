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
 * @implements Builder<ProductSelectionSetVariantSelectionAction>
 */
final class ProductSelectionSetVariantSelectionActionBuilder implements Builder
{
    /**

     * @var null|ProductResourceIdentifier|ProductResourceIdentifierBuilder
     */
    private $product;

    /**

     * @var null|ProductVariantSelection|ProductVariantSelectionBuilder
     */
    private $variantSelection;

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
     * <p>Determines which Variants of the previously added Product are to be included in, or excluded from, the Product Selection.
     * Leave it empty to unset an existing Variant Selection.</p>
     *

     * @return null|ProductVariantSelection
     */
    public function getVariantSelection()
    {
        return $this->variantSelection instanceof ProductVariantSelectionBuilder ? $this->variantSelection->build() : $this->variantSelection;
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
    public function withProductBuilder(?ProductResourceIdentifierBuilder $product)
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

    public function build(): ProductSelectionSetVariantSelectionAction
    {
        return new ProductSelectionSetVariantSelectionActionModel(
            $this->product instanceof ProductResourceIdentifierBuilder ? $this->product->build() : $this->product,
            $this->variantSelection instanceof ProductVariantSelectionBuilder ? $this->variantSelection->build() : $this->variantSelection
        );
    }

    public static function of(): ProductSelectionSetVariantSelectionActionBuilder
    {
        return new self();
    }
}
