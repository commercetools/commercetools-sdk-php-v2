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

use Commercetools\Api\Models\Common\Address;
use Commercetools\Api\Models\Common\AddressModel;
use DateTimeImmutable;
use DateTimeImmutableModel;

final class DeliveryModel extends JsonObjectModel implements Delivery
{
    
    public function __construct(
        DateTimeImmutable $createdAt = null,
        Address $address = null,
        string $id = null,
        DeliveryItemCollection $items = null,
        ParcelCollection $parcels = null
    ) {
        $this->createdAt = $createdAt;
        $this->address = $address;
        $this->id = $id;
        $this->items = $items;
        $this->parcels = $parcels;
        
    }

    /**
     * @var ?DateTimeImmutable
     */
    protected $createdAt;
    
    /**
     * @var ?Address
     */
    protected $address;
    
    /**
     * @var ?string
     */
    protected $id;
    
    /**
     * @var ?DeliveryItemCollection
     */
    protected $items;
    
    /**
     * @var ?ParcelCollection
     */
    protected $parcels;

    /**
     *
     * @return DateTimeImmutable|null
     */
    final public function getCreatedAt()
    {
       if (is_null($this->createdAt)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(Delivery::FIELD_CREATED_AT);
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
     * @return Address|null
     */
    final public function getAddress()
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
    
    /**
     *
     * @return string|null
     */
    final public function getId()
    {
       if (is_null($this->id)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(Delivery::FIELD_ID);
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
           $data = $this->raw(Delivery::FIELD_ITEMS);
           if (is_null($data)) {
               return null;
           }
           $this->items = DeliveryItemCollection::fromArray($data);
       }
       return $this->items;
    }
    
    /**
     *
     * @return ParcelCollection|null
     */
    final public function getParcels()
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
    final public function setCreatedAt(?DateTimeImmutable $createdAt): void
    {
        $this->createdAt = $createdAt;
    }
    
    final public function setAddress(?Address $address): void
    {
        $this->address = $address;
    }
    
    final public function setId(?string $id): void
    {
        $this->id = $id;
    }
    
    final public function setItems(?DeliveryItemCollection $items): void
    {
        $this->items = $items;
    }
    
    final public function setParcels(?ParcelCollection $parcels): void
    {
        $this->parcels = $parcels;
    }
    public function jsonSerialize() {
        $data = $this->toArray();
        if (isset($data[Delivery::FIELD_CREATED_AT]) && $data[Delivery::FIELD_CREATED_AT] instanceof \DateTimeImmutable) {
           $data[Delivery::FIELD_CREATED_AT] = $data[Delivery::FIELD_CREATED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return (object)$data;
    }
    
}