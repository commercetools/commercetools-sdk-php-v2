<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Common\Address;
use Commercetools\Api\Models\Common\AddressModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class DeliveryAddressSetMessagePayloadModel extends JsonObjectModel implements DeliveryAddressSetMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'DeliveryAddressSet';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?string
     */
    protected $deliveryId;

    /**
     *
     * @var ?Address
     */
    protected $address;

    /**
     *
     * @var ?Address
     */
    protected $oldAddress;

    /**
     *
     * @var ?string
     */
    protected $shippingKey;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $deliveryId = null,
        ?Address $address = null,
        ?Address $oldAddress = null,
        ?string $shippingKey = null,
        ?string $type = null
    ) {
        $this->deliveryId = $deliveryId;
        $this->address = $address;
        $this->oldAddress = $oldAddress;
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
     * <p>Unique identifier of the <a href="ctp:api:type:Delivery">Parcel</a>.</p>
     *
     *
     * @return null|string
     */
    public function getDeliveryId()
    {
        if (is_null($this->deliveryId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_DELIVERY_ID);
            if (is_null($data)) {
                return null;
            }
            $this->deliveryId = (string) $data;
        }

        return $this->deliveryId;
    }

    /**
     * <p><a href="ctp:api:type:Address">Address</a> after the <a href="ctp:api:type:OrderSetDeliveryAddressAction">Set Delivery Address</a> update action.</p>
     *
     *
     * @return null|Address
     */
    public function getAddress()
    {
        if (is_null($this->address)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_ADDRESS);
            if (is_null($data)) {
                return null;
            }

            $this->address = AddressModel::of($data);
        }

        return $this->address;
    }

    /**
     * <p><a href="ctp:api:type:Address">Address</a> before the <a href="ctp:api:type:OrderSetDeliveryAddressAction">Set Delivery Address</a> update action.</p>
     *
     *
     * @return null|Address
     */
    public function getOldAddress()
    {
        if (is_null($this->oldAddress)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_OLD_ADDRESS);
            if (is_null($data)) {
                return null;
            }

            $this->oldAddress = AddressModel::of($data);
        }

        return $this->oldAddress;
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
     * @param ?string $deliveryId
     */
    public function setDeliveryId(?string $deliveryId): void
    {
        $this->deliveryId = $deliveryId;
    }

    /**
     * @param ?Address $address
     */
    public function setAddress(?Address $address): void
    {
        $this->address = $address;
    }

    /**
     * @param ?Address $oldAddress
     */
    public function setOldAddress(?Address $oldAddress): void
    {
        $this->oldAddress = $oldAddress;
    }

    /**
     * @param ?string $shippingKey
     */
    public function setShippingKey(?string $shippingKey): void
    {
        $this->shippingKey = $shippingKey;
    }
}
