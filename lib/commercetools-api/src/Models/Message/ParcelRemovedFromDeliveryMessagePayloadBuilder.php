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
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ParcelRemovedFromDeliveryMessagePayload>
 */
final class ParcelRemovedFromDeliveryMessagePayloadBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $deliveryId;

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

     * @return null|string
     */
    public function getDeliveryId()
    {
        return $this->deliveryId;
    }

    /**
     * <p><a href="ctp:api:type:Parcel">Parcel</a> that was removed from the <a href="ctp:api:type:Delivery">Delivery</a>.</p>
     *

     * @return null|Parcel
     */
    public function getParcel()
    {
        return $this->parcel instanceof ParcelBuilder ? $this->parcel->build() : $this->parcel;
    }

    /**
     * <p>User-defined unique identifier of the Shipping Method in a Cart with <code>Multi</code> <a href="ctp:api:type:ShippingMode">ShippingMode</a>.</p>
     *

     * @return null|string
     */
    public function getShippingKey()
    {
        return $this->shippingKey;
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
     * @deprecated use withParcel() instead
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
            $this->deliveryId,
            $this->parcel instanceof ParcelBuilder ? $this->parcel->build() : $this->parcel,
            $this->shippingKey
        );
    }

    public static function of(): ParcelRemovedFromDeliveryMessagePayloadBuilder
    {
        return new self();
    }
}
