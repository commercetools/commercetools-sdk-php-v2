<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<SetLineItemTotalPriceAction>
 */
final class SetLineItemTotalPriceActionBuilder implements Builder
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
     * @var null|Money|MoneyBuilder
     */
    private $nextValue;

    /**
     * @var null|Money|MoneyBuilder
     */
    private $previousValue;

    /**
     * <p>Update action for <code>setLineItemTotalPrice</code></p>
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
     * @return null|Money
     */
    public function getNextValue()
    {
        return $this->nextValue instanceof MoneyBuilder ? $this->nextValue->build() : $this->nextValue;
    }

    /**
     * @return null|Money
     */
    public function getPreviousValue()
    {
        return $this->previousValue instanceof MoneyBuilder ? $this->previousValue->build() : $this->previousValue;
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
     * @param ?Money $nextValue
     * @return $this
     */
    public function withNextValue(?Money $nextValue)
    {
        $this->nextValue = $nextValue;

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
     * @return $this
     */
    public function withLineItemBuilder(?LocalizedStringBuilder $lineItem)
    {
        $this->lineItem = $lineItem;

        return $this;
    }

    /**
     * @return $this
     */
    public function withNextValueBuilder(?MoneyBuilder $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    /**
     * @return $this
     */
    public function withPreviousValueBuilder(?MoneyBuilder $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    public function build(): SetLineItemTotalPriceAction
    {
        return new SetLineItemTotalPriceActionModel(
            $this->change,
            $this->lineItem instanceof LocalizedStringBuilder ? $this->lineItem->build() : $this->lineItem,
            $this->nextValue instanceof MoneyBuilder ? $this->nextValue->build() : $this->nextValue,
            $this->previousValue instanceof MoneyBuilder ? $this->previousValue->build() : $this->previousValue
        );
    }

    public static function of(): SetLineItemTotalPriceActionBuilder
    {
        return new self();
    }
}
