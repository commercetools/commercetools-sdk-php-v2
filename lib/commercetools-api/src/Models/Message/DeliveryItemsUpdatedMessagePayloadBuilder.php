<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Order\DeliveryItemCollection;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<DeliveryItemsUpdatedMessagePayload>
 */
final class DeliveryItemsUpdatedMessagePayloadBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $deliveryId;

    /**

     * @var ?DeliveryItemCollection
     */
    private $items;

    /**

     * @var ?DeliveryItemCollection
     */
    private $oldItems;

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
     * <p><a href="ctp:api:type:DeliveryItem">Delivery Items</a> after the <a href="ctp:api:type:OrderSetDeliveryItemsAction">Set Delivery Items</a> update action.</p>
     *

     * @return null|DeliveryItemCollection
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * <p><a href="ctp:api:type:DeliveryItem">Delivery Items</a> before the <a href="ctp:api:type:OrderSetDeliveryItemsAction">Set Delivery Items</a> update action.</p>
     *

     * @return null|DeliveryItemCollection
     */
    public function getOldItems()
    {
        return $this->oldItems;
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
     * @param ?string $deliveryId
     * @return $this
     */
    public function withDeliveryId(?string $deliveryId)
    {
        $this->deliveryId = $deliveryId;

        return $this;
    }

    /**
     * @param ?DeliveryItemCollection $items
     * @return $this
     */
    public function withItems(?DeliveryItemCollection $items)
    {
        $this->items = $items;

        return $this;
    }

    /**
     * @param ?DeliveryItemCollection $oldItems
     * @return $this
     */
    public function withOldItems(?DeliveryItemCollection $oldItems)
    {
        $this->oldItems = $oldItems;

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


    public function build(): DeliveryItemsUpdatedMessagePayload
    {
        return new DeliveryItemsUpdatedMessagePayloadModel(
            $this->deliveryId,
            $this->items,
            $this->oldItems,
            $this->shippingKey
        );
    }

    public static function of(): DeliveryItemsUpdatedMessagePayloadBuilder
    {
        return new self();
    }
}
