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
use Commercetools\History\Models\ChangeValue\ShippingMethodChangeValue;
use Commercetools\History\Models\ChangeValue\ShippingMethodChangeValueBuilder;

/**
 * @implements Builder<SetShippingMethodChange>
 */
final class SetShippingMethodChangeBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $change;

    /**

     * @var null|ShippingMethodChangeValue|ShippingMethodChangeValueBuilder
     */
    private $previousValue;

    /**

     * @var null|ShippingMethodChangeValue|ShippingMethodChangeValueBuilder
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

     * @return null|ShippingMethodChangeValue
     */
    public function getPreviousValue()
    {
        return $this->previousValue instanceof ShippingMethodChangeValueBuilder ? $this->previousValue->build() : $this->previousValue;
    }

    /**
     * <p>Value after the change.</p>
     *

     * @return null|ShippingMethodChangeValue
     */
    public function getNextValue()
    {
        return $this->nextValue instanceof ShippingMethodChangeValueBuilder ? $this->nextValue->build() : $this->nextValue;
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
     * @param ?ShippingMethodChangeValue $previousValue
     * @return $this
     */
    public function withPreviousValue(?ShippingMethodChangeValue $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @param ?ShippingMethodChangeValue $nextValue
     * @return $this
     */
    public function withNextValue(?ShippingMethodChangeValue $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    /**
     * @deprecated use withPreviousValue() instead
     * @return $this
     */
    public function withPreviousValueBuilder(?ShippingMethodChangeValueBuilder $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @deprecated use withNextValue() instead
     * @return $this
     */
    public function withNextValueBuilder(?ShippingMethodChangeValueBuilder $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    public function build(): SetShippingMethodChange
    {
        return new SetShippingMethodChangeModel(
            $this->change,
            $this->previousValue instanceof ShippingMethodChangeValueBuilder ? $this->previousValue->build() : $this->previousValue,
            $this->nextValue instanceof ShippingMethodChangeValueBuilder ? $this->nextValue->build() : $this->nextValue
        );
    }

    public static function of(): SetShippingMethodChangeBuilder
    {
        return new self();
    }
}
