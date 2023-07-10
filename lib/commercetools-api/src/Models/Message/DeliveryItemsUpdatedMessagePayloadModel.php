<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Order\DeliveryItemCollection;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class DeliveryItemsUpdatedMessagePayloadModel extends JsonObjectModel implements DeliveryItemsUpdatedMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'DeliveryItemsUpdated';
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
     * @var ?DeliveryItemCollection
     */
    protected $items;

    /**
     *
     * @var ?DeliveryItemCollection
     */
    protected $oldItems;

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
        ?DeliveryItemCollection $items = null,
        ?DeliveryItemCollection $oldItems = null,
        ?string $shippingKey = null,
        ?string $type = null
    ) {
        $this->deliveryId = $deliveryId;
        $this->items = $items;
        $this->oldItems = $oldItems;
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
     * <p><a href="ctp:api:type:DeliveryItem">Delivery Items</a> after the <a href="ctp:api:type:OrderSetDeliveryItemsAction">Set Delivery Items</a> update action.</p>
     *
     *
     * @return null|DeliveryItemCollection
     */
    public function getItems()
    {
        if (is_null($this->items)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_ITEMS);
            if (is_null($data)) {
                return null;
            }
            $this->items = DeliveryItemCollection::fromArray($data);
        }

        return $this->items;
    }

    /**
     * <p><a href="ctp:api:type:DeliveryItem">Delivery Items</a> before the <a href="ctp:api:type:OrderSetDeliveryItemsAction">Set Delivery Items</a> update action.</p>
     *
     *
     * @return null|DeliveryItemCollection
     */
    public function getOldItems()
    {
        if (is_null($this->oldItems)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_OLD_ITEMS);
            if (is_null($data)) {
                return null;
            }
            $this->oldItems = DeliveryItemCollection::fromArray($data);
        }

        return $this->oldItems;
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
     * @param ?DeliveryItemCollection $items
     */
    public function setItems(?DeliveryItemCollection $items): void
    {
        $this->items = $items;
    }

    /**
     * @param ?DeliveryItemCollection $oldItems
     */
    public function setOldItems(?DeliveryItemCollection $oldItems): void
    {
        $this->oldItems = $oldItems;
    }

    /**
     * @param ?string $shippingKey
     */
    public function setShippingKey(?string $shippingKey): void
    {
        $this->shippingKey = $shippingKey;
    }
}
