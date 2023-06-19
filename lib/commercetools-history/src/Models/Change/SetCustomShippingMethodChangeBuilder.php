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
use Commercetools\History\Models\ChangeValue\CustomShippingMethodChangeValue;
use Commercetools\History\Models\ChangeValue\CustomShippingMethodChangeValueBuilder;

/**
 * @implements Builder<SetCustomShippingMethodChange>
 */
final class SetCustomShippingMethodChangeBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $change;

    /**

     * @var null|CustomShippingMethodChangeValue|CustomShippingMethodChangeValueBuilder
     */
    private $previousValue;

    /**

     * @var null|CustomShippingMethodChangeValue|CustomShippingMethodChangeValueBuilder
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

     * @return null|CustomShippingMethodChangeValue
     */
    public function getPreviousValue()
    {
        return $this->previousValue instanceof CustomShippingMethodChangeValueBuilder ? $this->previousValue->build() : $this->previousValue;
    }

    /**
     * <p>Value after the change.</p>
     *

     * @return null|CustomShippingMethodChangeValue
     */
    public function getNextValue()
    {
        return $this->nextValue instanceof CustomShippingMethodChangeValueBuilder ? $this->nextValue->build() : $this->nextValue;
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
     * @param ?CustomShippingMethodChangeValue $previousValue
     * @return $this
     */
    public function withPreviousValue(?CustomShippingMethodChangeValue $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @param ?CustomShippingMethodChangeValue $nextValue
     * @return $this
     */
    public function withNextValue(?CustomShippingMethodChangeValue $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    /**
     * @deprecated use withPreviousValue() instead
     * @return $this
     */
    public function withPreviousValueBuilder(?CustomShippingMethodChangeValueBuilder $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @deprecated use withNextValue() instead
     * @return $this
     */
    public function withNextValueBuilder(?CustomShippingMethodChangeValueBuilder $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    public function build(): SetCustomShippingMethodChange
    {
        return new SetCustomShippingMethodChangeModel(
            $this->change,
            $this->previousValue instanceof CustomShippingMethodChangeValueBuilder ? $this->previousValue->build() : $this->previousValue,
            $this->nextValue instanceof CustomShippingMethodChangeValueBuilder ? $this->nextValue->build() : $this->nextValue
        );
    }

    public static function of(): SetCustomShippingMethodChangeBuilder
    {
        return new self();
    }
}
