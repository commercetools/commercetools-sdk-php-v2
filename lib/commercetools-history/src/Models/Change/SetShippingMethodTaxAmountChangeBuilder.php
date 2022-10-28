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

     * @var ?string
     */
    private $taxMode;

    /**

     * @var null|ShippingMethodTaxAmountChangeValue|ShippingMethodTaxAmountChangeValueBuilder
     */
    private $nextValue;

    /**

     * @var null|ShippingMethodTaxAmountChangeValue|ShippingMethodTaxAmountChangeValueBuilder
     */
    private $previousValue;

    /**
     * <p>Update action for <code>setShippingMethodTaxAmount</code></p>
     *

     * @return null|string
     */
    public function getChange()
    {
        return $this->change;
    }

    /**

     * @return null|string
     */
    public function getTaxMode()
    {
        return $this->taxMode;
    }

    /**

     * @return null|ShippingMethodTaxAmountChangeValue
     */
    public function getNextValue()
    {
        return $this->nextValue instanceof ShippingMethodTaxAmountChangeValueBuilder ? $this->nextValue->build() : $this->nextValue;
    }

    /**

     * @return null|ShippingMethodTaxAmountChangeValue
     */
    public function getPreviousValue()
    {
        return $this->previousValue instanceof ShippingMethodTaxAmountChangeValueBuilder ? $this->previousValue->build() : $this->previousValue;
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
     * @param ?string $taxMode
     * @return $this
     */
    public function withTaxMode(?string $taxMode)
    {
        $this->taxMode = $taxMode;

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
     * @param ?ShippingMethodTaxAmountChangeValue $previousValue
     * @return $this
     */
    public function withPreviousValue(?ShippingMethodTaxAmountChangeValue $previousValue)
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

    /**
     * @deprecated use withPreviousValue() instead
     * @return $this
     */
    public function withPreviousValueBuilder(?ShippingMethodTaxAmountChangeValueBuilder $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    public function build(): SetShippingMethodTaxAmountChange
    {
        return new SetShippingMethodTaxAmountChangeModel(
            $this->change,
            $this->taxMode,
            $this->nextValue instanceof ShippingMethodTaxAmountChangeValueBuilder ? $this->nextValue->build() : $this->nextValue,
            $this->previousValue instanceof ShippingMethodTaxAmountChangeValueBuilder ? $this->previousValue->build() : $this->previousValue
        );
    }

    public static function of(): SetShippingMethodTaxAmountChangeBuilder
    {
        return new self();
    }
}
