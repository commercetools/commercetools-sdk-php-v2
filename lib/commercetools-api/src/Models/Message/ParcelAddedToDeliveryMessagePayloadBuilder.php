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

     * @var ?string
     */
    private $shippingKey;

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
     * <p>User-defined unique identifier of the Shipping Method in a Cart with <code>Multiple</code> <a href="ctp:api:type:ShippingMode">ShippingMode</a>.</p>
     *

     * @return null|string
     */
    public function getShippingKey()
    {
        return $this->shippingKey;
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
     * @param ?string $shippingKey
     * @return $this
     */
    public function withShippingKey(?string $shippingKey)
    {
        $this->shippingKey = $shippingKey;

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
            $this->parcel instanceof ParcelBuilder ? $this->parcel->build() : $this->parcel,
            $this->shippingKey
        );
    }

    public static function of(): ParcelAddedToDeliveryMessagePayloadBuilder
    {
        return new self();
    }
}
