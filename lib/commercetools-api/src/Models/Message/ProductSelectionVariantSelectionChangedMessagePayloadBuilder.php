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
 * @implements Builder<ProductSelectionVariantSelectionChangedMessagePayload>
 */
final class ProductSelectionVariantSelectionChangedMessagePayloadBuilder implements Builder
{
    /**

     * @var null|ProductReference|ProductReferenceBuilder
     */
    private $product;

    /**

     * @var null|ProductVariantSelection|ProductVariantSelectionBuilder
     */
    private $oldVariantSelection;

    /**

     * @var null|ProductVariantSelection|ProductVariantSelectionBuilder
     */
    private $newVariantSelection;

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
     * <p>The former Product Variant Selection if any.</p>
     *

     * @return null|ProductVariantSelection
     */
    public function getOldVariantSelection()
    {
        return $this->oldVariantSelection instanceof ProductVariantSelectionBuilder ? $this->oldVariantSelection->build() : $this->oldVariantSelection;
    }

    /**
     * <p>The updated Product Variant Selection if any.</p>
     *

     * @return null|ProductVariantSelection
     */
    public function getNewVariantSelection()
    {
        return $this->newVariantSelection instanceof ProductVariantSelectionBuilder ? $this->newVariantSelection->build() : $this->newVariantSelection;
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
     * @param ?ProductVariantSelection $oldVariantSelection
     * @return $this
     */
    public function withOldVariantSelection(?ProductVariantSelection $oldVariantSelection)
    {
        $this->oldVariantSelection = $oldVariantSelection;

        return $this;
    }

    /**
     * @param ?ProductVariantSelection $newVariantSelection
     * @return $this
     */
    public function withNewVariantSelection(?ProductVariantSelection $newVariantSelection)
    {
        $this->newVariantSelection = $newVariantSelection;

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
     * @deprecated use withOldVariantSelection() instead
     * @return $this
     */
    public function withOldVariantSelectionBuilder(?ProductVariantSelectionBuilder $oldVariantSelection)
    {
        $this->oldVariantSelection = $oldVariantSelection;

        return $this;
    }

    /**
     * @deprecated use withNewVariantSelection() instead
     * @return $this
     */
    public function withNewVariantSelectionBuilder(?ProductVariantSelectionBuilder $newVariantSelection)
    {
        $this->newVariantSelection = $newVariantSelection;

        return $this;
    }

    public function build(): ProductSelectionVariantSelectionChangedMessagePayload
    {
        return new ProductSelectionVariantSelectionChangedMessagePayloadModel(
            $this->product instanceof ProductReferenceBuilder ? $this->product->build() : $this->product,
            $this->oldVariantSelection instanceof ProductVariantSelectionBuilder ? $this->oldVariantSelection->build() : $this->oldVariantSelection,
            $this->newVariantSelection instanceof ProductVariantSelectionBuilder ? $this->newVariantSelection->build() : $this->newVariantSelection
        );
    }

    public static function of(): ProductSelectionVariantSelectionChangedMessagePayloadBuilder
    {
        return new self();
    }
}
