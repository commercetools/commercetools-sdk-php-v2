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
use Commercetools\History\Models\Common\DiscountedLineItemPrice;
use Commercetools\History\Models\Common\DiscountedLineItemPriceBuilder;

/**
 * @implements Builder<SetShippingInfoDiscountedPriceChange>
 */
final class SetShippingInfoDiscountedPriceChangeBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $change;

    /**

     * @var null|DiscountedLineItemPrice|DiscountedLineItemPriceBuilder
     */
    private $previousValue;

    /**

     * @var null|DiscountedLineItemPrice|DiscountedLineItemPriceBuilder
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
     * <p>Value before the change.</p>
     *

     * @return null|DiscountedLineItemPrice
     */
    public function getPreviousValue()
    {
        return $this->previousValue instanceof DiscountedLineItemPriceBuilder ? $this->previousValue->build() : $this->previousValue;
    }

    /**
     * <p>Value after the change.</p>
     *

     * @return null|DiscountedLineItemPrice
     */
    public function getNextValue()
    {
        return $this->nextValue instanceof DiscountedLineItemPriceBuilder ? $this->nextValue->build() : $this->nextValue;
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
     * @param ?DiscountedLineItemPrice $previousValue
     * @return $this
     */
    public function withPreviousValue(?DiscountedLineItemPrice $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @param ?DiscountedLineItemPrice $nextValue
     * @return $this
     */
    public function withNextValue(?DiscountedLineItemPrice $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    /**
     * @deprecated use withPreviousValue() instead
     * @return $this
     */
    public function withPreviousValueBuilder(?DiscountedLineItemPriceBuilder $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @deprecated use withNextValue() instead
     * @return $this
     */
    public function withNextValueBuilder(?DiscountedLineItemPriceBuilder $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    public function build(): SetShippingInfoDiscountedPriceChange
    {
        return new SetShippingInfoDiscountedPriceChangeModel(
            $this->change,
            $this->previousValue instanceof DiscountedLineItemPriceBuilder ? $this->previousValue->build() : $this->previousValue,
            $this->nextValue instanceof DiscountedLineItemPriceBuilder ? $this->nextValue->build() : $this->nextValue
        );
    }

    public static function of(): SetShippingInfoDiscountedPriceChangeBuilder
    {
        return new self();
    }
}
