<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Api\Models\Product\ProductReference;
use Commercetools\Api\Models\Product\ProductReferenceBuilder;
use Commercetools\Api\Models\ProductSelection\ProductVariantSelection;
use Commercetools\Api\Models\ProductSelection\ProductVariantSelectionBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<GraphQLProductPresentWithDifferentVariantSelectionError>
 */
final class GraphQLProductPresentWithDifferentVariantSelectionErrorBuilder implements Builder
{
    /**

     * @var null|ProductReference|ProductReferenceBuilder
     */
    private $product;

    /**

     * @var null|ProductVariantSelection|ProductVariantSelectionBuilder
     */
    private $existingVariantSelection;

    /**
     * <p><a href="ctp:api:type:Reference">Reference</a> to the <a href="ctp:api:type:Product">Product</a> for which the error was returned.</p>
     *

     * @return null|ProductReference
     */
    public function getProduct()
    {
        return $this->product instanceof ProductReferenceBuilder ? $this->product->build() : $this->product;
    }

    /**
     * <p>Existing Product Variant Selection or Exclusion for the <a href="/../api/projects/products">Product</a> in the <a href="/../api/projects/product-selections">Product Selection</a>.</p>
     *

     * @return null|ProductVariantSelection
     */
    public function getExistingVariantSelection()
    {
        return $this->existingVariantSelection instanceof ProductVariantSelectionBuilder ? $this->existingVariantSelection->build() : $this->existingVariantSelection;
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
     * @param ?ProductVariantSelection $existingVariantSelection
     * @return $this
     */
    public function withExistingVariantSelection(?ProductVariantSelection $existingVariantSelection)
    {
        $this->existingVariantSelection = $existingVariantSelection;

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
     * @deprecated use withExistingVariantSelection() instead
     * @return $this
     */
    public function withExistingVariantSelectionBuilder(?ProductVariantSelectionBuilder $existingVariantSelection)
    {
        $this->existingVariantSelection = $existingVariantSelection;

        return $this;
    }

    public function build(): GraphQLProductPresentWithDifferentVariantSelectionError
    {
        return new GraphQLProductPresentWithDifferentVariantSelectionErrorModel(
            $this->product instanceof ProductReferenceBuilder ? $this->product->build() : $this->product,
            $this->existingVariantSelection instanceof ProductVariantSelectionBuilder ? $this->existingVariantSelection->build() : $this->existingVariantSelection
        );
    }

    public static function of(): GraphQLProductPresentWithDifferentVariantSelectionErrorBuilder
    {
        return new self();
    }
}
