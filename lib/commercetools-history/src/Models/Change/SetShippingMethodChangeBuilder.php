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
    private $nextValue;

    /**
     * @var null|ShippingMethodChangeValue|ShippingMethodChangeValueBuilder
     */
    private $previousValue;

    /**
     * <p>Update action for <code>setShippingMethod</code></p>
     *
     * @return null|string
     */
    public function getChange()
    {
        return $this->change;
    }

    /**
     * @return null|ShippingMethodChangeValue
     */
    public function getNextValue()
    {
        return $this->nextValue instanceof ShippingMethodChangeValueBuilder ? $this->nextValue->build() : $this->nextValue;
    }

    /**
     * @return null|ShippingMethodChangeValue
     */
    public function getPreviousValue()
    {
        return $this->previousValue instanceof ShippingMethodChangeValueBuilder ? $this->previousValue->build() : $this->previousValue;
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
     * @param ?ShippingMethodChangeValue $nextValue
     * @return $this
     */
    public function withNextValue(?ShippingMethodChangeValue $nextValue)
    {
        $this->nextValue = $nextValue;

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
     * @deprecated use withNextValue() instead
     * @return $this
     */
    public function withNextValueBuilder(?ShippingMethodChangeValueBuilder $nextValue)
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

    public function build(): SetShippingMethodChange
    {
        return new SetShippingMethodChangeModel(
            $this->change,
            $this->nextValue instanceof ShippingMethodChangeValueBuilder ? $this->nextValue->build() : $this->nextValue,
            $this->previousValue instanceof ShippingMethodChangeValueBuilder ? $this->previousValue->build() : $this->previousValue
        );
    }

    public static function of(): SetShippingMethodChangeBuilder
    {
        return new self();
    }
}
