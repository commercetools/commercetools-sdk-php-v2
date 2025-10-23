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
use Commercetools\History\Models\Common\TaxedPrice;
use Commercetools\History\Models\Common\TaxedPriceBuilder;

/**
 * @implements Builder<SetOrderTaxedPriceChange>
 */
final class SetOrderTaxedPriceChangeBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $change;

    /**

     * @var null|TaxedPrice|TaxedPriceBuilder
     */
    private $previousValue;

    /**

     * @var null|TaxedPrice|TaxedPriceBuilder
     */
    private $nextValue;

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

     * @return null|TaxedPrice
     */
    public function getPreviousValue()
    {
        return $this->previousValue instanceof TaxedPriceBuilder ? $this->previousValue->build() : $this->previousValue;
    }

    /**
     * <p>Value after the change.</p>
     *

     * @return null|TaxedPrice
     */
    public function getNextValue()
    {
        return $this->nextValue instanceof TaxedPriceBuilder ? $this->nextValue->build() : $this->nextValue;
    }

    /**
     * <p>Indicates how taxes are set on the Cart.</p>
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
     * @param ?TaxedPrice $previousValue
     * @return $this
     */
    public function withPreviousValue(?TaxedPrice $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @param ?TaxedPrice $nextValue
     * @return $this
     */
    public function withNextValue(?TaxedPrice $nextValue)
    {
        $this->nextValue = $nextValue;

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
    public function withPreviousValueBuilder(?TaxedPriceBuilder $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @deprecated use withNextValue() instead
     * @return $this
     */
    public function withNextValueBuilder(?TaxedPriceBuilder $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    public function build(): SetOrderTaxedPriceChange
    {
        return new SetOrderTaxedPriceChangeModel(
            $this->change,
            $this->previousValue instanceof TaxedPriceBuilder ? $this->previousValue->build() : $this->previousValue,
            $this->nextValue instanceof TaxedPriceBuilder ? $this->nextValue->build() : $this->nextValue,
            $this->taxMode
        );
    }

    public static function of(): SetOrderTaxedPriceChangeBuilder
    {
        return new self();
    }
}
