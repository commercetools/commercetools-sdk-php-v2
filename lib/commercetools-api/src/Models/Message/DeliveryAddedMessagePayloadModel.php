<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Order\Delivery;
use Commercetools\Api\Models\Order\DeliveryModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class DeliveryAddedMessagePayloadModel extends JsonObjectModel implements DeliveryAddedMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'DeliveryAdded';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?Delivery
     */
    protected $delivery;

    /**
     *
     * @var ?string
     */
    protected $shippingKey;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?Delivery $delivery = null,
        ?string $shippingKey = null,
        ?string $type = null
    ) {
        $this->delivery = $delivery;
        $this->shippingKey = $shippingKey;
        $this->type = $type ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * <p><a href="ctp:api:type:Delivery">Delivery</a> that was added to the <a href="ctp:api:type:Order">Order</a>. The <a href="ctp:api:type:Delivery">Delivery</a> in the Message body does not contain <a href="ctp:api:type:Parcel">Parcels</a> if those were part of the initial <a href="ctp:api:type:OrderAddDeliveryAction">Add Delivery</a> update action. In that case, the update action produces an additional <a href="ctp:api:type:ParcelAddedToDeliveryMessage">Parcel Added To Delivery</a> Message containing information about the <a href="ctp:api:type:Parcel">Parcels</a>.</p>
     *
     *
     * @return null|Delivery
     */
    public function getDelivery()
    {
        if (is_null($this->delivery)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_DELIVERY);
            if (is_null($data)) {
                return null;
            }

            $this->delivery = DeliveryModel::of($data);
        }

        return $this->delivery;
    }

    /**
     * <p>User-defined unique identifier of the Shipping Method in a Cart with <code>Multiple</code> <a href="ctp:api:type:ShippingMode">ShippingMode</a>.</p>
     *
     *
     * @return null|string
     */
    public function getShippingKey()
    {
        if (is_null($this->shippingKey)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_SHIPPING_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->shippingKey = (string) $data;
        }

        return $this->shippingKey;
    }


    /**
     * @param ?Delivery $delivery
     */
    public function setDelivery(?Delivery $delivery): void
    {
        $this->delivery = $delivery;
    }

    /**
     * @param ?string $shippingKey
     */
    public function setShippingKey(?string $shippingKey): void
    {
        $this->shippingKey = $shippingKey;
    }
}
