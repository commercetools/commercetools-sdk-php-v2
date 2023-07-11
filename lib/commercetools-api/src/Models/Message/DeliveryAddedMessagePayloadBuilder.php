<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Order\Delivery;
use Commercetools\Api\Models\Order\DeliveryBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<DeliveryAddedMessagePayload>
 */
final class DeliveryAddedMessagePayloadBuilder implements Builder
{
    /**

     * @var null|Delivery|DeliveryBuilder
     */
    private $delivery;

    /**

     * @var ?string
     */
    private $shippingKey;

    /**
     * <p><a href="ctp:api:type:Delivery">Delivery</a> that was added to the <a href="ctp:api:type:Order">Order</a>. The <a href="ctp:api:type:Delivery">Delivery</a> in the Message body does not contain <a href="ctp:api:type:Parcel">Parcels</a> if those were part of the initial <a href="ctp:api:type:OrderAddDeliveryAction">Add Delivery</a> update action. In that case, the update action produces an additional <a href="ctp:api:type:ParcelAddedToDeliveryMessage">Parcel Added To Delivery</a> Message containing information about the <a href="ctp:api:type:Parcel">Parcels</a>.</p>
     *

     * @return null|Delivery
     */
    public function getDelivery()
    {
        return $this->delivery instanceof DeliveryBuilder ? $this->delivery->build() : $this->delivery;
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

    public function build(): DeliveryAddedMessagePayload
    {
        return new DeliveryAddedMessagePayloadModel(
            $this->delivery instanceof DeliveryBuilder ? $this->delivery->build() : $this->delivery,
            $this->shippingKey
        );
    }

    public static function of(): DeliveryAddedMessagePayloadBuilder
    {
        return new self();
    }
}
