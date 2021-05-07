<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\ChangeValue;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\History\Models\Common\Address;
use Commercetools\History\Models\Common\AddressModel;
use Commercetools\History\Models\Common\DeliveryItemCollection;
use Commercetools\History\Models\Common\ParcelCollection;

/**
 * @internal
 */
final class DeliveryChangeValueModel extends JsonObjectModel implements DeliveryChangeValue
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
     * @var ?ParcelCollection
     */
    protected $parcels;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?DeliveryItemCollection $items = null,
        ?Address $address = null,
        ?ParcelCollection $parcels = null
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
            $this->items =  DeliveryItemCollection::fromArray($data);
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

            $this->address =  AddressModel::of($data);
        }

        return $this->address;
    }

    /**
     * @return null|ParcelCollection
     */
    public function getParcels()
    {
        if (is_null($this->parcels)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_PARCELS);
            if (is_null($data)) {
                return null;
            }
            $this->parcels =  ParcelCollection::fromArray($data);
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
     * @param ?ParcelCollection $parcels
     */
    public function setParcels(?ParcelCollection $parcels): void
    {
        $this->parcels = $parcels;
    }



}
