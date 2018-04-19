<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Base\JsonObjectModel;

class ParcelModel extends JsonObjectModel implements Parcel
{
    /**
     * @var string
     */
    protected $id;
    /**
     * @var \DateTimeImmutable
     */
    protected $createdAt;
    /**
     * @var ParcelMeasurements
     */
    protected $measurements;
    /**
     * @var TrackingData
     */
    protected $trackingData;
    /**
     * @var DeliveryItemCollection
     */
    protected $items;

    /**
     * @return string
     */
    public function getId()
    {
        if (is_null($this->id)) {
            $value = $this->raw(Parcel::FIELD_ID);
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
            $value = $this->raw(Parcel::FIELD_CREATED_AT);
            $dateTime = \DateTimeImmutable::createFromFormat('Y-m-d?H:i:s.uT', $value);
            $value = $dateTime ? $dateTime : null;

            $this->createdAt = $value;
        }
        return $this->createdAt;
    }
    /**
     * @return ParcelMeasurements
     */
    public function getMeasurements()
    {
        if (is_null($this->measurements)) {
            $value = $this->raw(Parcel::FIELD_MEASUREMENTS);
            if (is_null($value)) {
                return $this->mapData(ParcelMeasurements::class, null);
            }
            $value = $this->mapData(ParcelMeasurements::class, $value);

            $this->measurements = $value;
        }
        return $this->measurements;
    }
    /**
     * @return TrackingData
     */
    public function getTrackingData()
    {
        if (is_null($this->trackingData)) {
            $value = $this->raw(Parcel::FIELD_TRACKING_DATA);
            if (is_null($value)) {
                return $this->mapData(TrackingData::class, null);
            }
            $value = $this->mapData(TrackingData::class, $value);

            $this->trackingData = $value;
        }
        return $this->trackingData;
    }
    /**
     * @return DeliveryItemCollection
     */
    public function getItems()
    {
        if (is_null($this->items)) {
            $value = $this->raw(Parcel::FIELD_ITEMS);
            if (is_null($value)) {
                return $this->mapData(DeliveryItemCollection::class, null);
            }
            $value = $this->mapData(DeliveryItemCollection::class, $value);
            $this->items = $value;
        }
        return $this->items;
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
     * @param ParcelMeasurements $measurements
     * @return $this
     */
    public function setMeasurements(ParcelMeasurements $measurements)
    {
        $this->measurements = $measurements;

        return $this;
    }
    /**
     * @param TrackingData $trackingData
     * @return $this
     */
    public function setTrackingData(TrackingData $trackingData)
    {
        $this->trackingData = $trackingData;

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


    public function jsonSerialize() {
        $data = parent::jsonSerialize();
        if (isset($data[Parcel::FIELD_CREATED_AT]) && $data[Parcel::FIELD_CREATED_AT] instanceof \DateTimeImmutable) {
            $data[Parcel::FIELD_CREATED_AT] = $data[Parcel::FIELD_CREATED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return $data;
    }
}
