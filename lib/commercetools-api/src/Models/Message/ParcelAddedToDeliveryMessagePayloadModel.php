<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Order\Delivery;
use Commercetools\Api\Models\Order\DeliveryModel;
use Commercetools\Api\Models\Order\Parcel;
use Commercetools\Api\Models\Order\ParcelModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ParcelAddedToDeliveryMessagePayloadModel extends JsonObjectModel implements ParcelAddedToDeliveryMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'ParcelAddedToDelivery';
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
     * @var ?Parcel
     */
    protected $parcel;

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
        ?Parcel $parcel = null,
        ?string $shippingKey = null,
        ?string $type = null
    ) {
        $this->delivery = $delivery;
        $this->parcel = $parcel;
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
     * <p>Unique identifier of the <a href="ctp:api:type:Delivery">Delivery</a>.</p>
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
     * <p><a href="ctp:api:type:Parcel">Parcel</a> that was added to the <a href="ctp:api:type:Delivery">Delivery</a>.</p>
     *
     *
     * @return null|Parcel
     */
    public function getParcel()
    {
        if (is_null($this->parcel)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_PARCEL);
            if (is_null($data)) {
                return null;
            }

            $this->parcel = ParcelModel::of($data);
        }

        return $this->parcel;
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
     * @param ?Parcel $parcel
     */
    public function setParcel(?Parcel $parcel): void
    {
        $this->parcel = $parcel;
    }

    /**
     * @param ?string $shippingKey
     */
    public function setShippingKey(?string $shippingKey): void
    {
        $this->shippingKey = $shippingKey;
    }
}
