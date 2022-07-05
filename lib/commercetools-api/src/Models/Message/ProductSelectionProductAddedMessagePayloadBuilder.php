<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

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
 * @implements Builder<ProductSelectionProductAddedMessagePayload>
 */
final class ProductSelectionProductAddedMessagePayloadBuilder implements Builder
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
     * <p><a href="ctp:api:type:Reference">Reference</a> to a <a href="ctp:api:type:Product">Product</a>.</p>
     *

     * @return null|ProductReference
     */
    public function getProduct()
    {
        return $this->product instanceof ProductReferenceBuilder ? $this->product->build() : $this->product;
    }

    /**
     * <p>Polymorphic base type for Product Variant Selections. The actual type is determined by the <code>type</code> field.</p>
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
     * @deprecated use withVariantSelection() instead
     * @return $this
     */
    public function withVariantSelectionBuilder(?ProductVariantSelectionBuilder $variantSelection)
    {
        $this->variantSelection = $variantSelection;

        return $this;
    }

    public function build(): ProductSelectionProductAddedMessagePayload
    {
        return new ProductSelectionProductAddedMessagePayloadModel(
            $this->product instanceof ProductReferenceBuilder ? $this->product->build() : $this->product,
            $this->variantSelection instanceof ProductVariantSelectionBuilder ? $this->variantSelection->build() : $this->variantSelection
        );
    }

    public static function of(): ProductSelectionProductAddedMessagePayloadBuilder
    {
        return new self();
    }
}
