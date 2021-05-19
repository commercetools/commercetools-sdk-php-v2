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
use Commercetools\History\Models\Common\TaxRate;
use Commercetools\History\Models\Common\TaxRateBuilder;

/**
 * @implements Builder<SetCustomLineItemTaxAmountChange>
 */
final class SetCustomLineItemTaxAmountChangeBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $change;

    /**
     * @var null|LocalizedString|LocalizedStringBuilder
     */
    private $customLineItem;

    /**
     * @var ?string
     */
    private $customLineItemId;

    /**
     * @var ?string
     */
    private $taxMode;

    /**
     * @var null|TaxRate|TaxRateBuilder
     */
    private $nextValue;

    /**
     * @var null|TaxRate|TaxRateBuilder
     */
    private $previousValue;

    /**
     * <p>Update action for <code>setCustomLineItemTaxAmount</code></p>
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
    public function getCustomLineItem()
    {
        return $this->customLineItem instanceof LocalizedStringBuilder ? $this->customLineItem->build() : $this->customLineItem;
    }

    /**
     * @return null|string
     */
    public function getCustomLineItemId()
    {
        return $this->customLineItemId;
    }

    /**
     * @return null|string
     */
    public function getTaxMode()
    {
        return $this->taxMode;
    }

    /**
     * <p>Shape of the value for <code>addTaxRate</code> and <code>removeTaxRate</code> actions</p>
     *
     * @return null|TaxRate
     */
    public function getNextValue()
    {
        return $this->nextValue instanceof TaxRateBuilder ? $this->nextValue->build() : $this->nextValue;
    }

    /**
     * <p>Shape of the value for <code>addTaxRate</code> and <code>removeTaxRate</code> actions</p>
     *
     * @return null|TaxRate
     */
    public function getPreviousValue()
    {
        return $this->previousValue instanceof TaxRateBuilder ? $this->previousValue->build() : $this->previousValue;
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
     * @param ?string $taxMode
     * @return $this
     */
    public function withTaxMode(?string $taxMode)
    {
        $this->taxMode = $taxMode;

        return $this;
    }

    /**
     * @param ?TaxRate $nextValue
     * @return $this
     */
    public function withNextValue(?TaxRate $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    /**
     * @param ?TaxRate $previousValue
     * @return $this
     */
    public function withPreviousValue(?TaxRate $previousValue)
    {
        $this->previousValue = $previousValue;

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

    /**
     * @deprecated use withNextValue() instead
     * @return $this
     */
    public function withNextValueBuilder(?TaxRateBuilder $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    /**
     * @deprecated use withPreviousValue() instead
     * @return $this
     */
    public function withPreviousValueBuilder(?TaxRateBuilder $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    public function build(): SetCustomLineItemTaxAmountChange
    {
        return new SetCustomLineItemTaxAmountChangeModel(
            $this->change,
            $this->customLineItem instanceof LocalizedStringBuilder ? $this->customLineItem->build() : $this->customLineItem,
            $this->customLineItemId,
            $this->taxMode,
            $this->nextValue instanceof TaxRateBuilder ? $this->nextValue->build() : $this->nextValue,
            $this->previousValue instanceof TaxRateBuilder ? $this->previousValue->build() : $this->previousValue
        );
    }

    public static function of(): SetCustomLineItemTaxAmountChangeBuilder
    {
        return new self();
    }
}
