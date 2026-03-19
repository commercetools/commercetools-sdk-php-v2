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
use Commercetools\History\Models\Common\ProductVariantExclusion;
use Commercetools\History\Models\Common\ProductVariantExclusionBuilder;
use Commercetools\History\Models\Common\Reference;
use Commercetools\History\Models\Common\ReferenceBuilder;

/**
 * @implements Builder<SetVariantExclusionChange>
 */
final class SetVariantExclusionChangeBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $change;

    /**

     * @var null|Reference|ReferenceBuilder
     */
    private $product;

    /**

     * @var null|ProductVariantExclusion|ProductVariantExclusionBuilder
     */
    private $previousValue;

    /**

     * @var null|ProductVariantExclusion|ProductVariantExclusionBuilder
     */
    private $nextValue;

    /**

     * @return null|string
     */
    public function getChange()
    {
        return $this->change;
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
     * <p>Value before the change.</p>
     *

     * @return null|ProductVariantExclusion
     */
    public function getPreviousValue()
    {
        return $this->previousValue instanceof ProductVariantExclusionBuilder ? $this->previousValue->build() : $this->previousValue;
    }

    /**
     * <p>Value after the change.</p>
     *

     * @return null|ProductVariantExclusion
     */
    public function getNextValue()
    {
        return $this->nextValue instanceof ProductVariantExclusionBuilder ? $this->nextValue->build() : $this->nextValue;
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
     * @param ?Reference $product
     * @return $this
     */
    public function withProduct(?Reference $product)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * @param ?ProductVariantExclusion $previousValue
     * @return $this
     */
    public function withPreviousValue(?ProductVariantExclusion $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @param ?ProductVariantExclusion $nextValue
     * @return $this
     */
    public function withNextValue(?ProductVariantExclusion $nextValue)
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

    /**
     * @deprecated use withPreviousValue() instead
     * @return $this
     */
    public function withPreviousValueBuilder(?ProductVariantExclusionBuilder $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @deprecated use withNextValue() instead
     * @return $this
     */
    public function withNextValueBuilder(?ProductVariantExclusionBuilder $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    public function build(): SetVariantExclusionChange
    {
        return new SetVariantExclusionChangeModel(
            $this->change,
            $this->product instanceof ReferenceBuilder ? $this->product->build() : $this->product,
            $this->previousValue instanceof ProductVariantExclusionBuilder ? $this->previousValue->build() : $this->previousValue,
            $this->nextValue instanceof ProductVariantExclusionBuilder ? $this->nextValue->build() : $this->nextValue
        );
    }

    public static function of(): SetVariantExclusionChangeBuilder
    {
        return new self();
    }
}
