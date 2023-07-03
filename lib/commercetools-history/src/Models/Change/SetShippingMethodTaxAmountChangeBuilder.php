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
use Commercetools\History\Models\ChangeValue\ShippingMethodTaxAmountChangeValue;
use Commercetools\History\Models\ChangeValue\ShippingMethodTaxAmountChangeValueBuilder;

/**
 * @implements Builder<SetShippingMethodTaxAmountChange>
 */
final class SetShippingMethodTaxAmountChangeBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $change;

    /**

     * @var null|ShippingMethodTaxAmountChangeValue|ShippingMethodTaxAmountChangeValueBuilder
     */
    private $previousValue;

    /**

     * @var null|ShippingMethodTaxAmountChangeValue|ShippingMethodTaxAmountChangeValueBuilder
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

     * @return null|ShippingMethodTaxAmountChangeValue
     */
    public function getPreviousValue()
    {
        return $this->previousValue instanceof ShippingMethodTaxAmountChangeValueBuilder ? $this->previousValue->build() : $this->previousValue;
    }

    /**
     * <p>Value after the change.</p>
     *

     * @return null|ShippingMethodTaxAmountChangeValue
     */
    public function getNextValue()
    {
        return $this->nextValue instanceof ShippingMethodTaxAmountChangeValueBuilder ? $this->nextValue->build() : $this->nextValue;
    }

    /**
     * <p><code>&quot;ExternalAmount&quot;</code></p>
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
     * @param ?ShippingMethodTaxAmountChangeValue $previousValue
     * @return $this
     */
    public function withPreviousValue(?ShippingMethodTaxAmountChangeValue $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @param ?ShippingMethodTaxAmountChangeValue $nextValue
     * @return $this
     */
    public function withNextValue(?ShippingMethodTaxAmountChangeValue $nextValue)
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
    public function withPreviousValueBuilder(?ShippingMethodTaxAmountChangeValueBuilder $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @deprecated use withNextValue() instead
     * @return $this
     */
    public function withNextValueBuilder(?ShippingMethodTaxAmountChangeValueBuilder $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    public function build(): SetShippingMethodTaxAmountChange
    {
        return new SetShippingMethodTaxAmountChangeModel(
            $this->change,
            $this->previousValue instanceof ShippingMethodTaxAmountChangeValueBuilder ? $this->previousValue->build() : $this->previousValue,
            $this->nextValue instanceof ShippingMethodTaxAmountChangeValueBuilder ? $this->nextValue->build() : $this->nextValue,
            $this->taxMode
        );
    }

    public static function of(): SetShippingMethodTaxAmountChangeBuilder
    {
        return new self();
    }
}
