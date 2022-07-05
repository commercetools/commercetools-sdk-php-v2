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
use Commercetools\History\Models\ChangeValue\DeliveryChangeValue;
use Commercetools\History\Models\ChangeValue\DeliveryChangeValueBuilder;

/**
 * @implements Builder<AddDeliveryChange>
 */
final class AddDeliveryChangeBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $change;

    /**

     * @var null|DeliveryChangeValue|DeliveryChangeValueBuilder
     */
    private $nextValue;

    /**

     * @var null|DeliveryChangeValue|DeliveryChangeValueBuilder
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

     * @return null|DeliveryChangeValue
     */
    public function getNextValue()
    {
        return $this->nextValue instanceof DeliveryChangeValueBuilder ? $this->nextValue->build() : $this->nextValue;
    }

    /**

     * @return null|DeliveryChangeValue
     */
    public function getPreviousValue()
    {
        return $this->previousValue instanceof DeliveryChangeValueBuilder ? $this->previousValue->build() : $this->previousValue;
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
     * @param ?DeliveryChangeValue $nextValue
     * @return $this
     */
    public function withNextValue(?DeliveryChangeValue $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    /**
     * @param ?DeliveryChangeValue $previousValue
     * @return $this
     */
    public function withPreviousValue(?DeliveryChangeValue $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @deprecated use withNextValue() instead
     * @return $this
     */
    public function withNextValueBuilder(?DeliveryChangeValueBuilder $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    /**
     * @deprecated use withPreviousValue() instead
     * @return $this
     */
    public function withPreviousValueBuilder(?DeliveryChangeValueBuilder $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    public function build(): AddDeliveryChange
    {
        return new AddDeliveryChangeModel(
            $this->change,
            $this->nextValue instanceof DeliveryChangeValueBuilder ? $this->nextValue->build() : $this->nextValue,
            $this->previousValue instanceof DeliveryChangeValueBuilder ? $this->previousValue->build() : $this->previousValue
        );
    }

    public static function of(): AddDeliveryChangeBuilder
    {
        return new self();
    }
}
