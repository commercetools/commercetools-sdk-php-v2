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
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ParcelAddedToDeliveryMessagePayload>
 */
final class ParcelAddedToDeliveryMessagePayloadBuilder implements Builder
{
    /**

     * @var null|Delivery|DeliveryBuilder
     */
    private $delivery;

    /**

     * @var null|Parcel|ParcelBuilder
     */
    private $parcel;

    /**
     * <p>Unique identifier of the <a href="ctp:api:type:Delivery">Delivery</a>.</p>
     *

     * @return null|Delivery
     */
    public function getDelivery()
    {
        return $this->delivery instanceof DeliveryBuilder ? $this->delivery->build() : $this->delivery;
    }

    /**
     * <p><a href="ctp:api:type:Parcel">Parcel</a> that was added to the <a href="ctp:api:type:Delivery">Delivery</a>.</p>
     *

     * @return null|Parcel
     */
    public function getParcel()
    {
        return $this->parcel instanceof ParcelBuilder ? $this->parcel->build() : $this->parcel;
    }

    /**
     * @param ?Delivery $delivery
     * @return $this
     */
    public function withDelivery(?Delivery $delivery)
    {
        $this->delivery = $delivery;

        return $this;
    }

    /**
     * @param ?Parcel $parcel
     * @return $this
     */
    public function withParcel(?Parcel $parcel)
    {
        $this->parcel = $parcel;

        return $this;
    }

    /**
     * @deprecated use withDelivery() instead
     * @return $this
     */
    public function withDeliveryBuilder(?DeliveryBuilder $delivery)
    {
        $this->delivery = $delivery;

        return $this;
    }

    /**
     * @deprecated use withParcel() instead
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
            $this->delivery instanceof DeliveryBuilder ? $this->delivery->build() : $this->delivery,
            $this->parcel instanceof ParcelBuilder ? $this->parcel->build() : $this->parcel
        );
    }

    public static function of(): ParcelAddedToDeliveryMessagePayloadBuilder
    {
        return new self();
    }
}
