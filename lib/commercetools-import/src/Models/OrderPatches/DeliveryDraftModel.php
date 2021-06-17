<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\OrderPatches;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use Commercetools\Import\Models\Common\Address;
use Commercetools\Import\Models\Common\AddressModel;
use Commercetools\Import\Models\Orders\DeliveryItemCollection;
use stdClass;

/**
 * @internal
 */
final class DeliveryDraftModel extends JsonObjectModel implements DeliveryDraft
{
    /**
     * @var ?DeliveryItemCollection
     */
    protected $items;

    /**
     * @var ?Address
     */
    protected $address;

    /**
     * @var ?DeliveryParcelDraftCollection
     */
    protected $parcels;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?DeliveryItemCollection $items = null,
        ?Address $address = null,
        ?DeliveryParcelDraftCollection $parcels = null
    ) {
        $this->items = $items;
        $this->address = $address;
        $this->parcels = $parcels;
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
     * @return null|DeliveryParcelDraftCollection
     */
    public function getParcels()
    {
        if (is_null($this->parcels)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_PARCELS);
            if (is_null($data)) {
                return null;
            }
            $this->parcels = DeliveryParcelDraftCollection::fromArray($data);
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
     * @param ?Address $address
     */
    public function setAddress(?Address $address): void
    {
        $this->address = $address;
    }

    /**
     * @param ?DeliveryParcelDraftCollection $parcels
     */
    public function setParcels(?DeliveryParcelDraftCollection $parcels): void
    {
        $this->parcels = $parcels;
    }
}
