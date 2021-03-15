<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<AddDeliveryAction>
 */
final class AddDeliveryActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $change;

    /**
     * @var null|DeliveryActionValue|DeliveryActionValueBuilder
     */
    private $nextValue;

    /**
     * @var null|DeliveryActionValue|DeliveryActionValueBuilder
     */
    private $previousValue;

    /**
     * <p>Update action for <code>addDelivery</code></p>
     *
     * @return null|string
     */
    public function getChange()
    {
        return $this->change;
    }

    /**
     * @return null|DeliveryActionValue
     */
    public function getNextValue()
    {
        return $this->nextValue instanceof DeliveryActionValueBuilder ? $this->nextValue->build() : $this->nextValue;
    }

    /**
     * @return null|DeliveryActionValue
     */
    public function getPreviousValue()
    {
        return $this->previousValue instanceof DeliveryActionValueBuilder ? $this->previousValue->build() : $this->previousValue;
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
     * @param ?DeliveryActionValue $nextValue
     * @return $this
     */
    public function withNextValue(?DeliveryActionValue $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    /**
     * @param ?DeliveryActionValue $previousValue
     * @return $this
     */
    public function withPreviousValue(?DeliveryActionValue $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @return $this
     */
    public function withNextValueBuilder(?DeliveryActionValueBuilder $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    /**
     * @return $this
     */
    public function withPreviousValueBuilder(?DeliveryActionValueBuilder $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    public function build(): AddDeliveryAction
    {
        return new AddDeliveryActionModel(
            $this->change,
            $this->nextValue instanceof DeliveryActionValueBuilder ? $this->nextValue->build() : $this->nextValue,
            $this->previousValue instanceof DeliveryActionValueBuilder ? $this->previousValue->build() : $this->previousValue
        );
    }

    public static function of(): AddDeliveryActionBuilder
    {
        return new self();
    }
}
