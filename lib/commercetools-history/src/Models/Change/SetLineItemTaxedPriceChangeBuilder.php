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
use Commercetools\History\Models\Common\TaxedItemPrice;
use Commercetools\History\Models\Common\TaxedItemPriceBuilder;

/**
 * @implements Builder<SetLineItemTaxedPriceChange>
 */
final class SetLineItemTaxedPriceChangeBuilder implements Builder
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
    public function withNextValueBuilder(?TaxedItemPriceBuilder $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    /**
     * @deprecated use withPreviousValue() instead
     * @return $this
     */
    public function withPreviousValueBuilder(?TaxedItemPriceBuilder $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    public function build(): SetLineItemTaxedPriceChange
    {
        return new SetLineItemTaxedPriceChangeModel(
            $this->change,
            $this->lineItem instanceof LocalizedStringBuilder ? $this->lineItem->build() : $this->lineItem,
            $this->lineItemId,
            $this->nextValue instanceof TaxedItemPriceBuilder ? $this->nextValue->build() : $this->nextValue,
            $this->previousValue instanceof TaxedItemPriceBuilder ? $this->previousValue->build() : $this->previousValue
        );
    }

    public static function of(): SetLineItemTaxedPriceChangeBuilder
    {
        return new self();
    }
}
