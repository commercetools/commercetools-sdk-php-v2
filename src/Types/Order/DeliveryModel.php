<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Base\JsonObjectModel;

use Commercetools\Types\Common\Address;

class DeliveryModel extends JsonObjectModel implements Delivery {
    /**
     * @var string
     */
    protected $id;
    /**
     * @var \DateTimeImmutable
     */
    protected $createdAt;
    /**
     * @var DeliveryItemCollection
     */
    protected $items;
    /**
     * @var ParcelCollection
     */
    protected $parcels;
    /**
     * @var Address
     */
    protected $address;

    /**
     * @return string
     */
    public function getId()
    {
        if (is_null($this->id)) {
            $value = $this->raw(Delivery::FIELD_ID);
            $value = (string)$value;
            $this->id = $value;
        }
        return $this->id;
    }
    /**
     * @return \DateTimeImmutable
     */
    public function getCreatedAt()
    {
        if (is_null($this->createdAt)) {
            $value = $this->raw(Delivery::FIELD_CREATED_AT);
            $dateTime = \DateTimeImmutable::createFromFormat('Y-m-d?H:i:s.uT', $value);
            $value = $dateTime ? $dateTime : null;

            $this->createdAt = $value;
        }
        return $this->createdAt;
    }
    /**
     * @return DeliveryItemCollection
     */
    public function getItems()
    {
        if (is_null($this->items)) {
            $value = $this->raw(Delivery::FIELD_ITEMS);
            if (is_null($value)) {
                return $this->mapData(DeliveryItemCollection::class, null);
            }
            $value = $this->mapData(DeliveryItemCollection::class, $value);
            $this->items = $value;
        }
        return $this->items;
    }
    /**
     * @return ParcelCollection
     */
    public function getParcels()
    {
        if (is_null($this->parcels)) {
            $value = $this->raw(Delivery::FIELD_PARCELS);
            if (is_null($value)) {
                return $this->mapData(ParcelCollection::class, null);
            }
            $value = $this->mapData(ParcelCollection::class, $value);
            $this->parcels = $value;
        }
        return $this->parcels;
    }
    /**
     * @return Address
     */
    public function getAddress()
    {
        if (is_null($this->address)) {
            $value = $this->raw(Delivery::FIELD_ADDRESS);
            if (is_null($value)) {
                return $this->mapData(Address::class, null);
            }
            $value = $this->mapData(Address::class, $value);

            $this->address = $value;
        }
        return $this->address;
    }

    /**
     * @param string $id
     * @return $this
     */
    public function setId(string $id)
    {
        $this->id = (string)$id;

        return $this;
    }
    /**
     * @param \DateTimeImmutable|\DateTime|string $createdAt
     * @return $this
     */
    public function setCreatedAt($createdAt)
    {
        if ($createdAt instanceof \DateTime) {
            $createdAt = \DateTimeImmutable::createFromMutable($createdAt);
        }
        if (!$createdAt instanceof \DateTimeImmutable) {
            $createdAt = new \DateTimeImmutable($createdAt);
        }
        $this->$createdAt = $createdAt;

        return $this;
    }
    /**
     * @param DeliveryItemCollection $items
     * @return $this
     */
    public function setItems(DeliveryItemCollection $items)
    {
        $this->items = $items;

        return $this;
    }
    /**
     * @param ParcelCollection $parcels
     * @return $this
     */
    public function setParcels(ParcelCollection $parcels)
    {
        $this->parcels = $parcels;

        return $this;
    }
    /**
     * @param Address $address
     * @return $this
     */
    public function setAddress(Address $address)
    {
        $this->address = $address;

        return $this;
    }


    public function jsonSerialize() {
        $data = parent::jsonSerialize();
        if (isset($data[Delivery::FIELD_CREATED_AT]) && $data[Delivery::FIELD_CREATED_AT] instanceof \DateTimeImmutable) {
            $data[Delivery::FIELD_CREATED_AT] = $data[Delivery::FIELD_CREATED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return $data;
    }
}
