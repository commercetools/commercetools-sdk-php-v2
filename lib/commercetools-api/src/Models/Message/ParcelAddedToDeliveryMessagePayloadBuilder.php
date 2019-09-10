<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Order\Delivery;
use Commercetools\Api\Models\Order\DeliveryBuilder;
use Commercetools\Api\Models\Order\Parcel;
use Commercetools\Api\Models\Order\ParcelBuilder;
use Commercetools\Base\Builder;

/**
 * @implements Builder<ParcelAddedToDeliveryMessagePayload>
 */
final class ParcelAddedToDeliveryMessagePayloadBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $type;

    /**
     * @var Delivery|?DeliveryBuilder
     */
    private $delivery;

    /**
     * @var Parcel|?ParcelBuilder
     */
    private $parcel;

    public function __construct()
    {
    }

    /**
     * @return null|string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return null|Delivery
     */
    public function getDelivery()
    {
        return $this->delivery instanceof DeliveryBuilder ? $this->delivery->build() : $this->delivery;
    }

    /**
     * @return null|Parcel
     */
    public function getParcel()
    {
        return $this->parcel instanceof ParcelBuilder ? $this->parcel->build() : $this->parcel;
    }

    /**
     * @return $this
     */
    public function withType(?string $type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return $this
     */
    public function withDelivery(?Delivery $delivery)
    {
        $this->delivery = $delivery;

        return $this;
    }

    /**
     * @return $this
     */
    public function withParcel(?Parcel $parcel)
    {
        $this->parcel = $parcel;

        return $this;
    }

    /**
     * @return $this
     */
    public function withDeliveryBuilder(?DeliveryBuilder $delivery)
    {
        $this->delivery = $delivery;

        return $this;
    }

    /**
     * @return $this
     */
    public function withParcelBuilder(?ParcelBuilder $parcel)
    {
        $this->parcel = $parcel;

        return $this;
    }

    public function build(): ParcelAddedToDeliveryMessagePayload
    {
        return new ParcelAddedToDeliveryMessagePayloadModel(
            $this->type,
            ($this->delivery instanceof DeliveryBuilder ? $this->delivery->build() : $this->delivery),
            ($this->parcel instanceof ParcelBuilder ? $this->parcel->build() : $this->parcel)
        );
    }

    public static function of(): ParcelAddedToDeliveryMessagePayloadBuilder
    {
        return new self();
    }
}
