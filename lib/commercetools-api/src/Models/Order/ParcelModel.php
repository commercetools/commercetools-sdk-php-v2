<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Order;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

use DateTimeImmutable;
use DateTimeImmutableModel;

final class ParcelModel extends JsonObjectModel implements Parcel
{
    
    public function __construct(
        DateTimeImmutable $createdAt = null,
        string $id = null,
        DeliveryItemCollection $items = null,
        TrackingData $trackingData = null,
        ParcelMeasurements $measurements = null
    ) {
        $this->createdAt = $createdAt;
        $this->id = $id;
        $this->items = $items;
        $this->trackingData = $trackingData;
        $this->measurements = $measurements;
        
    }

    /**
     * @var ?DateTimeImmutable
     */
    protected $createdAt;
    
    /**
     * @var ?string
     */
    protected $id;
    
    /**
     * @var ?DeliveryItemCollection
     */
    protected $items;
    
    /**
     * @var ?TrackingData
     */
    protected $trackingData;
    
    /**
     * @var ?ParcelMeasurements
     */
    protected $measurements;

    /**
     *
     * @return DateTimeImmutable|null
     */
    final public function getCreatedAt()
    {
       if (is_null($this->createdAt)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(Parcel::FIELD_CREATED_AT);
           if (is_null($data)) {
               return null;
           }
           $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
           if ($data === false) {
               return null;
           }
           $this->createdAt = $data;
       }
       return $this->createdAt;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getId()
    {
       if (is_null($this->id)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(Parcel::FIELD_ID);
           if (is_null($data)) {
               return null;
           }
           $this->id = (string)$data;
       }
       return $this->id;
    }
    
    /**
     *
     * @return DeliveryItemCollection|null
     */
    final public function getItems()
    {
       if (is_null($this->items)) {
           /** @psalm-var ?array<int, stdClass> $data */
           $data = $this->raw(Parcel::FIELD_ITEMS);
           if (is_null($data)) {
               return null;
           }
           $this->items = DeliveryItemCollection::fromArray($data);
       }
       return $this->items;
    }
    
    /**
     *
     * @return TrackingData|null
     */
    final public function getTrackingData()
    {
       if (is_null($this->trackingData)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(Parcel::FIELD_TRACKING_DATA);
           if (is_null($data)) {
               return null;
           }
           
           $this->trackingData = TrackingDataModel::of($data);
       }
       return $this->trackingData;
    }
    
    /**
     *
     * @return ParcelMeasurements|null
     */
    final public function getMeasurements()
    {
       if (is_null($this->measurements)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(Parcel::FIELD_MEASUREMENTS);
           if (is_null($data)) {
               return null;
           }
           
           $this->measurements = ParcelMeasurementsModel::of($data);
       }
       return $this->measurements;
    }
    final public function setCreatedAt(?DateTimeImmutable $createdAt): void
    {
        $this->createdAt = $createdAt;
    }
    
    final public function setId(?string $id): void
    {
        $this->id = $id;
    }
    
    final public function setItems(?DeliveryItemCollection $items): void
    {
        $this->items = $items;
    }
    
    final public function setTrackingData(?TrackingData $trackingData): void
    {
        $this->trackingData = $trackingData;
    }
    
    final public function setMeasurements(?ParcelMeasurements $measurements): void
    {
        $this->measurements = $measurements;
    }
    public function jsonSerialize() {
        $data = $this->toArray();
        if (isset($data[Parcel::FIELD_CREATED_AT]) && $data[Parcel::FIELD_CREATED_AT] instanceof \DateTimeImmutable) {
           $data[Parcel::FIELD_CREATED_AT] = $data[Parcel::FIELD_CREATED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return (object)$data;
    }
    
}