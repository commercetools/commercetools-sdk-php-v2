<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\History\Models\Common\ProductVariantSelection;
use Commercetools\History\Models\Common\ProductVariantSelectionBuilder;
use Commercetools\History\Models\Common\Reference;
use Commercetools\History\Models\Common\ReferenceBuilder;

/**
 * @implements Builder<SetVariantSelectionChange>
 */
final class SetVariantSelectionChangeBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $change;

    /**

     * @var null|ProductVariantSelection|ProductVariantSelectionBuilder
     */
    private $previousValue;

    /**

     * @var null|ProductVariantSelection|ProductVariantSelectionBuilder
     */
    private $nextValue;

    /**

     * @var null|Reference|ReferenceBuilder
     */
    private $product;

    /**

     * @return null|string
     */
    public function getChange()
    {
        return $this->change;
    }

    /**
     * <p>Value before the change.</p>
     *

     * @return null|ProductVariantSelection
     */
    public function getPreviousValue()
    {
        return $this->previousValue instanceof ProductVariantSelectionBuilder ? $this->previousValue->build() : $this->previousValue;
    }

    /**
     * <p>Value after the change.</p>
     *

     * @return null|ProductVariantSelection
     */
    public function getNextValue()
    {
        return $this->nextValue instanceof ProductVariantSelectionBuilder ? $this->nextValue->build() : $this->nextValue;
    }

    /**
     * <p>Reference to the updated <a href="ctp:api:type:Product">Product</a>.</p>
     *

     * @return null|Reference
     */
    public function getProduct()
    {
        return $this->product instanceof ReferenceBuilder ? $this->product->build() : $this->product;
    }

    /**
     * @param ?string $change
     * @return $this
     */
    public function withChange(?string $change)
    {
        $this->change = $change;

        return $this;
    }

    /**
     * @param ?ProductVariantSelection $previousValue
     * @return $this
     */
    public function withPreviousValue(?ProductVariantSelection $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @param ?ProductVariantSelection $nextValue
     * @return $this
     */
    public function withNextValue(?ProductVariantSelection $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    /**
     * @param ?Reference $product
     * @return $this
     */
    public function withProduct(?Reference $product)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * @deprecated use withPreviousValue() instead
     * @return $this
     */
    public function withPreviousValueBuilder(?ProductVariantSelectionBuilder $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @deprecated use withNextValue() instead
     * @return $this
     */
    public function withNextValueBuilder(?ProductVariantSelectionBuilder $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    /**
     * @deprecated use withProduct() instead
     * @return $this
     */
    public function withProductBuilder(?ReferenceBuilder $product)
    {
        $this->product = $product;

        return $this;
    }

    public function build(): SetVariantSelectionChange
    {
        return new SetVariantSelectionChangeModel(
            $this->change,
            $this->previousValue instanceof ProductVariantSelectionBuilder ? $this->previousValue->build() : $this->previousValue,
            $this->nextValue instanceof ProductVariantSelectionBuilder ? $this->nextValue->build() : $this->nextValue,
            $this->product instanceof ReferenceBuilder ? $this->product->build() : $this->product
        );
    }

    public static function of(): SetVariantSelectionChangeBuilder
    {
        return new self();
    }
}
