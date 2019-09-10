<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Order\Parcel;
use Commercetools\Api\Models\Order\ParcelBuilder;
use Commercetools\Base\Builder;

/**
 * @implements Builder<ParcelRemovedFromDeliveryMessagePayload>
 */
final class ParcelRemovedFromDeliveryMessagePayloadBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $type;

    /**
     * @var Parcel|?ParcelBuilder
     */
    private $parcel;

    /**
     * @var ?string
     */
    private $deliveryId;

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
     * @return null|Parcel
     */
    public function getParcel()
    {
        return $this->parcel instanceof ParcelBuilder ? $this->parcel->build() : $this->parcel;
    }

    /**
     * @return null|string
     */
    public function getDeliveryId()
    {
        return $this->deliveryId;
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
    public function withParcel(?Parcel $parcel)
    {
        $this->parcel = $parcel;

        return $this;
    }

    /**
     * @return $this
     */
    public function withDeliveryId(?string $deliveryId)
    {
        $this->deliveryId = $deliveryId;

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

    public function build(): ParcelRemovedFromDeliveryMessagePayload
    {
        return new ParcelRemovedFromDeliveryMessagePayloadModel(
            $this->type,
            ($this->parcel instanceof ParcelBuilder ? $this->parcel->build() : $this->parcel),
            $this->deliveryId
        );
    }

    public static function of(): ParcelRemovedFromDeliveryMessagePayloadBuilder
    {
        return new self();
    }
}
