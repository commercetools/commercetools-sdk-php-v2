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
 * @implements Builder<SetLineItemTaxRateChange>
 */
final class SetLineItemTaxRateChangeBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $change;

    /**

     * @var null|TaxRate|TaxRateBuilder
     */
    private $previousValue;

    /**

     * @var null|TaxRate|TaxRateBuilder
     */
    private $nextValue;

    /**

     * @var null|LocalizedString|LocalizedStringBuilder
     */
    private $lineItem;

    /**

     * @var ?string
     */
    private $variant;

    /**

     * @var ?string
     */
    private $taxMode;

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

     * @return null|TaxRate
     */
    public function getPreviousValue()
    {
        return $this->previousValue instanceof TaxRateBuilder ? $this->previousValue->build() : $this->previousValue;
    }

    /**
     * <p>Value after the change.</p>
     *

     * @return null|TaxRate
     */
    public function getNextValue()
    {
        return $this->nextValue instanceof TaxRateBuilder ? $this->nextValue->build() : $this->nextValue;
    }

    /**
     * <p>Name of the <a href="ctp:api:type:Product">Product</a> the Line Item is based on.</p>
     *

     * @return null|LocalizedString
     */
    public function getLineItem()
    {
        return $this->lineItem instanceof LocalizedStringBuilder ? $this->lineItem->build() : $this->lineItem;
    }

    /**
     * <p><code>sku</code> or <code>key</code> of the <a href="ctp:api:type:ProductVariant">ProductVariant</a>.</p>
     *

     * @return null|string
     */
    public function getVariant()
    {
        return $this->variant;
    }

    /**
     * <p><code>&quot;External&quot;</code></p>
     *

     * @return null|string
     */
    public function getTaxMode()
    {
        return $this->taxMode;
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
     * @param ?TaxRate $previousValue
     * @return $this
     */
    public function withPreviousValue(?TaxRate $previousValue)
    {
        $this->previousValue = $previousValue;

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
     * @param ?string $taxMode
     * @return $this
     */
    public function withTaxMode(?string $taxMode)
    {
        $this->taxMode = $taxMode;

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
     * @deprecated use withLineItem() instead
     * @return $this
     */
    public function withLineItemBuilder(?LocalizedStringBuilder $lineItem)
    {
        $this->lineItem = $lineItem;

        return $this;
    }

    public function build(): SetLineItemTaxRateChange
    {
        return new SetLineItemTaxRateChangeModel(
            $this->change,
            $this->previousValue instanceof TaxRateBuilder ? $this->previousValue->build() : $this->previousValue,
            $this->nextValue instanceof TaxRateBuilder ? $this->nextValue->build() : $this->nextValue,
            $this->lineItem instanceof LocalizedStringBuilder ? $this->lineItem->build() : $this->lineItem,
            $this->variant,
            $this->taxMode
        );
    }

    public static function of(): SetLineItemTaxRateChangeBuilder
    {
        return new self();
    }
}
