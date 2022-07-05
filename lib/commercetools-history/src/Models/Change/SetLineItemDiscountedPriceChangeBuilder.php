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
use Commercetools\History\Models\Common\LocalizedString;
use Commercetools\History\Models\Common\LocalizedStringBuilder;

/**
 * @implements Builder<SetLineItemDiscountedPriceChange>
 */
final class SetLineItemDiscountedPriceChangeBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $change;

    /**

     * @var null|LocalizedString|LocalizedStringBuilder
     */
    private $lineItem;

    /**

     * @var ?string
     */
    private $variant;

    /**

     * @var null|DiscountedLineItemPrice|DiscountedLineItemPriceBuilder
     */
    private $nextValue;

    /**

     * @var null|DiscountedLineItemPrice|DiscountedLineItemPriceBuilder
     */
    private $previousValue;

    /**
     * <p>Update action for <code>setLineItemDiscountedPrice</code></p>
     *

     * @return null|string
     */
    public function getChange()
    {
        return $this->change;
    }

    /**

     * @return null|LocalizedString
     */
    public function getLineItem()
    {
        return $this->lineItem instanceof LocalizedStringBuilder ? $this->lineItem->build() : $this->lineItem;
    }

    /**

     * @return null|string
     */
    public function getVariant()
    {
        return $this->variant;
    }

    /**

     * @return null|DiscountedLineItemPrice
     */
    public function getNextValue()
    {
        return $this->nextValue instanceof DiscountedLineItemPriceBuilder ? $this->nextValue->build() : $this->nextValue;
    }

    /**

     * @return null|DiscountedLineItemPrice
     */
    public function getPreviousValue()
    {
        return $this->previousValue instanceof DiscountedLineItemPriceBuilder ? $this->previousValue->build() : $this->previousValue;
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
     * @param ?LocalizedString $lineItem
     * @return $this
     */
    public function withLineItem(?LocalizedString $lineItem)
    {
        $this->lineItem = $lineItem;

        return $this;
    }

    /**
     * @param ?string $variant
     * @return $this
     */
    public function withVariant(?string $variant)
    {
        $this->variant = $variant;

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
     * @param ?DiscountedLineItemPrice $previousValue
     * @return $this
     */
    public function withPreviousValue(?DiscountedLineItemPrice $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @deprecated use withLineItem() instead
     * @return $this
     */
    public function withLineItemBuilder(?LocalizedStringBuilder $lineItem)
    {
        $this->lineItem = $lineItem;

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

    /**
     * @deprecated use withPreviousValue() instead
     * @return $this
     */
    public function withPreviousValueBuilder(?DiscountedLineItemPriceBuilder $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    public function build(): SetLineItemDiscountedPriceChange
    {
        return new SetLineItemDiscountedPriceChangeModel(
            $this->change,
            $this->lineItem instanceof LocalizedStringBuilder ? $this->lineItem->build() : $this->lineItem,
            $this->variant,
            $this->nextValue instanceof DiscountedLineItemPriceBuilder ? $this->nextValue->build() : $this->nextValue,
            $this->previousValue instanceof DiscountedLineItemPriceBuilder ? $this->previousValue->build() : $this->previousValue
        );
    }

    public static function of(): SetLineItemDiscountedPriceChangeBuilder
    {
        return new self();
    }
}
