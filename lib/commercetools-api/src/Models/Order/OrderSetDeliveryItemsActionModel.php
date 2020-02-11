<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;


final class OrderSetDeliveryItemsActionModel extends JsonObjectModel implements OrderSetDeliveryItemsAction
{
    public const DISCRIMINATOR_VALUE = 'setDeliveryItems';
    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?string
     */
    protected $deliveryId;

    /**
     * @var ?DeliveryItemCollection
     */
    protected $items;


    public function __construct(
        string $deliveryId = null,
        DeliveryItemCollection $items = null
    ) {
        $this->deliveryId = $deliveryId;
        $this->items = $items;
        $this->action = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(OrderUpdateAction::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * @return null|string
     */
    public function getDeliveryId()
    {
        if (is_null($this->deliveryId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(OrderSetDeliveryItemsAction::FIELD_DELIVERY_ID);
            if (is_null($data)) {
                return null;
            }
            $this->deliveryId = (string) $data;
        }

        return $this->deliveryId;
    }

    /**
     * @return null|DeliveryItemCollection
     */
    public function getItems()
    {
        if (is_null($this->items)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(OrderSetDeliveryItemsAction::FIELD_ITEMS);
            if (is_null($data)) {
                return null;
            }
            $this->items = DeliveryItemCollection::fromArray($data);
        }

        return $this->items;
    }

    public function setDeliveryId(?string $deliveryId): void
    {
        $this->deliveryId = $deliveryId;
    }

    public function setItems(?DeliveryItemCollection $items): void
    {
        $this->items = $items;
    }



}
