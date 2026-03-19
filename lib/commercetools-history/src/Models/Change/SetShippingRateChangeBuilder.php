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
use Commercetools\History\Models\Common\ShippingRate;
use Commercetools\History\Models\Common\ShippingRateBuilder;

/**
 * @implements Builder<SetShippingRateChange>
 */
final class SetShippingRateChangeBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $change;

    /**

     * @var null|ShippingRate|ShippingRateBuilder
     */
    private $previousValue;

    /**

     * @var null|ShippingRate|ShippingRateBuilder
     */
    private $nextValue;

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

     * @return null|ShippingRate
     */
    public function getPreviousValue()
    {
        return $this->previousValue instanceof ShippingRateBuilder ? $this->previousValue->build() : $this->previousValue;
    }

    /**
     * <p>Value after the change.</p>
     *

     * @return null|ShippingRate
     */
    public function getNextValue()
    {
        return $this->nextValue instanceof ShippingRateBuilder ? $this->nextValue->build() : $this->nextValue;
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
     * @param ?ShippingRate $previousValue
     * @return $this
     */
    public function withPreviousValue(?ShippingRate $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @param ?ShippingRate $nextValue
     * @return $this
     */
    public function withNextValue(?ShippingRate $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    /**
     * @deprecated use withPreviousValue() instead
     * @return $this
     */
    public function withPreviousValueBuilder(?ShippingRateBuilder $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @deprecated use withNextValue() instead
     * @return $this
     */
    public function withNextValueBuilder(?ShippingRateBuilder $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    public function build(): SetShippingRateChange
    {
        return new SetShippingRateChangeModel(
            $this->change,
            $this->previousValue instanceof ShippingRateBuilder ? $this->previousValue->build() : $this->previousValue,
            $this->nextValue instanceof ShippingRateBuilder ? $this->nextValue->build() : $this->nextValue
        );
    }

    public static function of(): SetShippingRateChangeBuilder
    {
        return new self();
    }
}
