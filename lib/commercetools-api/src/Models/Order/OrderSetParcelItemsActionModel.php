<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\JsonObjectModel;
use stdClass;

final class OrderSetParcelItemsActionModel extends JsonObjectModel implements OrderSetParcelItemsAction
{
    const DISCRIMINATOR_VALUE = 'setParcelItems';

    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?DeliveryItemCollection
     */
    protected $items;

    /**
     * @var ?string
     */
    protected $parcelId;

    public function __construct(
        string $action = null,
        DeliveryItemCollection $items = null,
        string $parcelId = null
    ) {
        $this->action = $action;
        $this->items = $items;
        $this->parcelId = $parcelId;
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
     * @return null|DeliveryItemCollection
     */
    public function getItems()
    {
        if (is_null($this->items)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(OrderSetParcelItemsAction::FIELD_ITEMS);
            if (is_null($data)) {
                return null;
            }
            $this->items = DeliveryItemCollection::fromArray($data);
        }

        return $this->items;
    }

    /**
     * @return null|string
     */
    public function getParcelId()
    {
        if (is_null($this->parcelId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(OrderSetParcelItemsAction::FIELD_PARCEL_ID);
            if (is_null($data)) {
                return null;
            }
            $this->parcelId = (string) $data;
        }

        return $this->parcelId;
    }

    public function setAction(?string $action): void
    {
        $this->action = $action;
    }

    public function setItems(?DeliveryItemCollection $items): void
    {
        $this->items = $items;
    }

    public function setParcelId(?string $parcelId): void
    {
        $this->parcelId = $parcelId;
    }
}
