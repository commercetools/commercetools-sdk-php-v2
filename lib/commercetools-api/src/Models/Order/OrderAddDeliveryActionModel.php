<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Api\Models\Common\BaseAddress;
use Commercetools\Api\Models\Common\BaseAddressModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class OrderAddDeliveryActionModel extends JsonObjectModel implements OrderAddDeliveryAction
{
    public const DISCRIMINATOR_VALUE = 'addDelivery';
    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?DeliveryItemCollection
     */
    protected $items;

    /**
     * @var ?BaseAddress
     */
    protected $address;

    /**
     * @var ?ParcelDraftCollection
     */
    protected $parcels;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?DeliveryItemCollection $items = null,
        ?BaseAddress $address = null,
        ?ParcelDraftCollection $parcels = null
    ) {
        $this->items = $items;
        $this->address = $address;
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
            $data = $this->raw(self::FIELD_ACTION);
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
     * @return null|BaseAddress
     */
    public function getAddress()
    {
        if (is_null($this->address)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_ADDRESS);
            if (is_null($data)) {
                return null;
            }

            $this->address = BaseAddressModel::of($data);
        }

        return $this->address;
    }

    /**
     * @return null|ParcelDraftCollection
     */
    public function getParcels()
    {
        if (is_null($this->parcels)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_PARCELS);
            if (is_null($data)) {
                return null;
            }
            $this->parcels = ParcelDraftCollection::fromArray($data);
        }

        return $this->parcels;
    }


    /**
     * @param ?DeliveryItemCollection $items
     */
    public function setItems(?DeliveryItemCollection $items): void
    {
        $this->items = $items;
    }

    /**
     * @param ?BaseAddress $address
     */
    public function setAddress(?BaseAddress $address): void
    {
        $this->address = $address;
    }

    /**
     * @param ?ParcelDraftCollection $parcels
     */
    public function setParcels(?ParcelDraftCollection $parcels): void
    {
        $this->parcels = $parcels;
    }
}
