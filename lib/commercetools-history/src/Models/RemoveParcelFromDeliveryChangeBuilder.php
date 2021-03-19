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
 * @implements Builder<RemoveParcelFromDeliveryChange>
 */
final class RemoveParcelFromDeliveryChangeBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $change;

    /**
     * @var ?string
     */
    private $deliveryId;

    /**
     * @var null|Parcel|ParcelBuilder
     */
    private $previousValue;

    /**
     * <p>Update action for <code>removeParcelFromDelivery</code></p>
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
    public function getDeliveryId()
    {
        return $this->deliveryId;
    }

    /**
     * @return null|Parcel
     */
    public function getPreviousValue()
    {
        return $this->previousValue instanceof ParcelBuilder ? $this->previousValue->build() : $this->previousValue;
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
     * @param ?string $deliveryId
     * @return $this
     */
    public function withDeliveryId(?string $deliveryId)
    {
        $this->deliveryId = $deliveryId;

        return $this;
    }

    /**
     * @param ?Parcel $previousValue
     * @return $this
     */
    public function withPreviousValue(?Parcel $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @return $this
     */
    public function withPreviousValueBuilder(?ParcelBuilder $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    public function build(): RemoveParcelFromDeliveryChange
    {
        return new RemoveParcelFromDeliveryChangeModel(
            $this->change,
            $this->deliveryId,
            $this->previousValue instanceof ParcelBuilder ? $this->previousValue->build() : $this->previousValue
        );
    }

    public static function of(): RemoveParcelFromDeliveryChangeBuilder
    {
        return new self();
    }
}
