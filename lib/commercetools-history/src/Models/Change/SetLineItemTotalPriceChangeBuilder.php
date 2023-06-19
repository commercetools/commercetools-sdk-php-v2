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
use Commercetools\History\Models\Common\LocalizedString;
use Commercetools\History\Models\Common\LocalizedStringBuilder;
use Commercetools\History\Models\Common\Money;
use Commercetools\History\Models\Common\MoneyBuilder;

/**
 * @implements Builder<SetLineItemTotalPriceChange>
 */
final class SetLineItemTotalPriceChangeBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $change;

    /**

     * @var null|Money|MoneyBuilder
     */
    private $previousValue;

    /**

     * @var null|Money|MoneyBuilder
     */
    private $nextValue;

    /**

     * @var null|LocalizedString|LocalizedStringBuilder
     */
    private $lineItem;

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

     * @return null|Money
     */
    public function getPreviousValue()
    {
        return $this->previousValue instanceof MoneyBuilder ? $this->previousValue->build() : $this->previousValue;
    }

    /**
     * <p>Value after the change.</p>
     *

     * @return null|Money
     */
    public function getNextValue()
    {
        return $this->nextValue instanceof MoneyBuilder ? $this->nextValue->build() : $this->nextValue;
    }

    /**
     * <p>Name of the <a href="ctp:api:type:Product">Product</a> the updated Line Item is based on.</p>
     *

     * @return null|LocalizedString
     */
    public function getLineItem()
    {
        return $this->lineItem instanceof LocalizedStringBuilder ? $this->lineItem->build() : $this->lineItem;
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
     * @param ?Money $previousValue
     * @return $this
     */
    public function withPreviousValue(?Money $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @param ?Money $nextValue
     * @return $this
     */
    public function withNextValue(?Money $nextValue)
    {
        $this->nextValue = $nextValue;

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
     * @deprecated use withPreviousValue() instead
     * @return $this
     */
    public function withPreviousValueBuilder(?MoneyBuilder $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @deprecated use withNextValue() instead
     * @return $this
     */
    public function withNextValueBuilder(?MoneyBuilder $nextValue)
    {
        $this->nextValue = $nextValue;

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

    public function build(): SetLineItemTotalPriceChange
    {
        return new SetLineItemTotalPriceChangeModel(
            $this->change,
            $this->previousValue instanceof MoneyBuilder ? $this->previousValue->build() : $this->previousValue,
            $this->nextValue instanceof MoneyBuilder ? $this->nextValue->build() : $this->nextValue,
            $this->lineItem instanceof LocalizedStringBuilder ? $this->lineItem->build() : $this->lineItem
        );
    }

    public static function of(): SetLineItemTotalPriceChangeBuilder
    {
        return new self();
    }
}
