<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Api\Models\Common\Address;
use Commercetools\Api\Models\Common\AddressModel;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

final class DeliveryModel extends JsonObjectModel implements Delivery
{
    /**
     * @var ?string
     */
    protected $id;

    /**
     * @var ?DateTimeImmutable
     */
    protected $createdAt;

    /**
     * @var ?DeliveryItemCollection
     */
    protected $items;

    /**
     * @var ?ParcelCollection
     */
    protected $parcels;

    /**
     * @var ?Address
     */
    protected $address;

    public function __construct(
        string $id = null,
        DateTimeImmutable $createdAt = null,
        DeliveryItemCollection $items = null,
        ParcelCollection $parcels = null,
        Address $address = null
    ) {
        $this->id = $id;
        $this->createdAt = $createdAt;
        $this->items = $items;
        $this->parcels = $parcels;
        $this->address = $address;
    }

    /**
     * @return null|string
     */
    public function getId()
    {
        if (is_null($this->id)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(Delivery::FIELD_ID);
            if (is_null($data)) {
                return null;
            }
            $this->id = (string) $data;
        }

        return $this->id;
    }

    /**
     * @return null|DateTimeImmutable
     */
    public function getCreatedAt()
    {
        if (is_null($this->createdAt)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(Delivery::FIELD_CREATED_AT);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->createdAt = $data;
        }

        return $this->createdAt;
    }

    /**
     * <p>Items which are shipped in this delivery regardless their distribution over several parcels.
     * Can also be specified individually for each Parcel.</p>.
     *
     * @return null|DeliveryItemCollection
     */
    public function getItems()
    {
        if (is_null($this->items)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(Delivery::FIELD_ITEMS);
            if (is_null($data)) {
                return null;
            }
            $this->items = DeliveryItemCollection::fromArray($data);
        }

        return $this->items;
    }

    /**
     * @return null|ParcelCollection
     */
    public function getParcels()
    {
        if (is_null($this->parcels)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(Delivery::FIELD_PARCELS);
            if (is_null($data)) {
                return null;
            }
            $this->parcels = ParcelCollection::fromArray($data);
        }

        return $this->parcels;
    }

    /**
     * @return null|Address
     */
    public function getAddress()
    {
        if (is_null($this->address)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(Delivery::FIELD_ADDRESS);
            if (is_null($data)) {
                return null;
            }

            $this->address = AddressModel::of($data);
        }

        return $this->address;
    }

    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    public function setCreatedAt(?DateTimeImmutable $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    public function setItems(?DeliveryItemCollection $items): void
    {
        $this->items = $items;
    }

    public function setParcels(?ParcelCollection $parcels): void
    {
        $this->parcels = $parcels;
    }

    public function setAddress(?Address $address): void
    {
        $this->address = $address;
    }

    public function jsonSerialize()
    {
        $data = $this->toArray();
        if (isset($data[Delivery::FIELD_CREATED_AT]) && $data[Delivery::FIELD_CREATED_AT] instanceof \DateTimeImmutable) {
            $data[Delivery::FIELD_CREATED_AT] = $data[Delivery::FIELD_CREATED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }

        return (object) $data;
    }
}
