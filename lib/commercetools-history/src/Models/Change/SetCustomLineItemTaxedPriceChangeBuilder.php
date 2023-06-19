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
 * @implements Builder<SetCustomLineItemTaxedPriceChange>
 */
final class SetCustomLineItemTaxedPriceChangeBuilder implements Builder
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
    private $customLineItem;

    /**

     * @var ?string
     */
    private $customLineItemId;

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
     * <p>Name of the updated <a href="ctp:api:type:CustomLineItem">CustomLineItem</a>.</p>
     *

     * @return null|LocalizedString
     */
    public function getCustomLineItem()
    {
        return $this->customLineItem instanceof LocalizedStringBuilder ? $this->customLineItem->build() : $this->customLineItem;
    }

    /**
     * <p><code>id</code> of the updated <a href="ctp:api:type:CustomLineItem">CustomLineItem</a>.</p>
     *

     * @return null|string
     */
    public function getCustomLineItemId()
    {
        return $this->customLineItemId;
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
     * @param ?LocalizedString $customLineItem
     * @return $this
     */
    public function withCustomLineItem(?LocalizedString $customLineItem)
    {
        $this->customLineItem = $customLineItem;

        return $this;
    }

    /**
     * @param ?string $customLineItemId
     * @return $this
     */
    public function withCustomLineItemId(?string $customLineItemId)
    {
        $this->customLineItemId = $customLineItemId;

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
     * @deprecated use withCustomLineItem() instead
     * @return $this
     */
    public function withCustomLineItemBuilder(?LocalizedStringBuilder $customLineItem)
    {
        $this->customLineItem = $customLineItem;

        return $this;
    }

    public function build(): SetCustomLineItemTaxedPriceChange
    {
        return new SetCustomLineItemTaxedPriceChangeModel(
            $this->change,
            $this->previousValue instanceof MoneyBuilder ? $this->previousValue->build() : $this->previousValue,
            $this->nextValue instanceof MoneyBuilder ? $this->nextValue->build() : $this->nextValue,
            $this->customLineItem instanceof LocalizedStringBuilder ? $this->customLineItem->build() : $this->customLineItem,
            $this->customLineItemId
        );
    }

    public static function of(): SetCustomLineItemTaxedPriceChangeBuilder
    {
        return new self();
    }
}
