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
 * @implements Builder<SetLineItemTaxedPriceAction>
 */
final class SetLineItemTaxedPriceActionBuilder implements Builder
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
    private $lineItemId;

    /**
     * @var null|TaxedItemPrice|TaxedItemPriceBuilder
     */
    private $nextValue;

    /**
     * @var null|TaxedItemPrice|TaxedItemPriceBuilder
     */
    private $previousValue;

    /**
     * <p>Update action for <code>setLineItemTaxedPrice</code></p>
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
    public function getLineItemId()
    {
        return $this->lineItemId;
    }

    /**
     * @return null|TaxedItemPrice
     */
    public function getNextValue()
    {
        return $this->nextValue instanceof TaxedItemPriceBuilder ? $this->nextValue->build() : $this->nextValue;
    }

    /**
     * @return null|TaxedItemPrice
     */
    public function getPreviousValue()
    {
        return $this->previousValue instanceof TaxedItemPriceBuilder ? $this->previousValue->build() : $this->previousValue;
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
     * @param ?string $lineItemId
     * @return $this
     */
    public function withLineItemId(?string $lineItemId)
    {
        $this->lineItemId = $lineItemId;

        return $this;
    }

    /**
     * @param ?TaxedItemPrice $nextValue
     * @return $this
     */
    public function withNextValue(?TaxedItemPrice $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    /**
     * @param ?TaxedItemPrice $previousValue
     * @return $this
     */
    public function withPreviousValue(?TaxedItemPrice $previousValue)
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
    public function withNextValueBuilder(?TaxedItemPriceBuilder $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    /**
     * @return $this
     */
    public function withPreviousValueBuilder(?TaxedItemPriceBuilder $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    public function build(): SetLineItemTaxedPriceAction
    {
        return new SetLineItemTaxedPriceActionModel(
            $this->change,
            $this->lineItem instanceof LocalizedStringBuilder ? $this->lineItem->build() : $this->lineItem,
            $this->lineItemId,
            $this->nextValue instanceof TaxedItemPriceBuilder ? $this->nextValue->build() : $this->nextValue,
            $this->previousValue instanceof TaxedItemPriceBuilder ? $this->previousValue->build() : $this->previousValue
        );
    }

    public static function of(): SetLineItemTaxedPriceActionBuilder
    {
        return new self();
    }
}
