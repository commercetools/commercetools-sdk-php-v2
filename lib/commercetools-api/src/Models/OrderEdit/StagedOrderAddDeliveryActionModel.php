<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\Common\Address;
use Commercetools\Api\Models\Common\AddressModel;
use Commercetools\Api\Models\Order\DeliveryItemCollection;
use Commercetools\Api\Models\Order\ParcelDraftCollection;
use Commercetools\Api\Models\Order\StagedOrderUpdateAction;
use Commercetools\Base\JsonObjectModel;
use stdClass;

final class StagedOrderAddDeliveryActionModel extends JsonObjectModel implements StagedOrderAddDeliveryAction
{
    const DISCRIMINATOR_VALUE = 'addDelivery';

    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?Address
     */
    protected $address;

    /**
     * @var ?DeliveryItemCollection
     */
    protected $items;

    /**
     * @var ?ParcelDraftCollection
     */
    protected $parcels;

    public function __construct(
        Address $address = null,
        DeliveryItemCollection $items = null,
        ParcelDraftCollection $parcels = null
    ) {
        $this->address = $address;
        $this->items = $items;
        $this->parcels = $parcels;
        $this->action = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(StagedOrderUpdateAction::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * @return null|Address
     */
    public function getAddress()
    {
        if (is_null($this->address)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(StagedOrderAddDeliveryAction::FIELD_ADDRESS);
            if (is_null($data)) {
                return null;
            }

            $this->address = AddressModel::of($data);
        }

        return $this->address;
    }

    /**
     * @return null|DeliveryItemCollection
     */
    public function getItems()
    {
        if (is_null($this->items)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(StagedOrderAddDeliveryAction::FIELD_ITEMS);
            if (is_null($data)) {
                return null;
            }
            $this->items = DeliveryItemCollection::fromArray($data);
        }

        return $this->items;
    }

    /**
     * @return null|ParcelDraftCollection
     */
    public function getParcels()
    {
        if (is_null($this->parcels)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(StagedOrderAddDeliveryAction::FIELD_PARCELS);
            if (is_null($data)) {
                return null;
            }
            $this->parcels = ParcelDraftCollection::fromArray($data);
        }

        return $this->parcels;
    }

    public function setAddress(?Address $address): void
    {
        $this->address = $address;
    }

    public function setItems(?DeliveryItemCollection $items): void
    {
        $this->items = $items;
    }

    public function setParcels(?ParcelDraftCollection $parcels): void
    {
        $this->parcels = $parcels;
    }
}
