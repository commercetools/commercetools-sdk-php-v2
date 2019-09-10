<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Order;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\Api\Models\Common\Address;
use Commercetools\Api\Models\Common\AddressBuilder;
use DateTimeImmutable;

/**
 * @implements Builder<Delivery>
 */
final class DeliveryBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?DateTimeImmutable
     */
    protected $createdAt;
    
    /**
     * @var ?AddressBuilder|Address
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
       return $this->createdAt;
    }
    
    /**
     *
     * @return Address|null
     */
    final public function getAddress()
    {
       return ($this->address instanceof AddressBuilder ? $this->address->build() : $this->address);
    }
    
    /**
     *
     * @return string|null
     */
    final public function getId()
    {
       return $this->id;
    }
    
    /**
     *
     * @return DeliveryItemCollection|null
     */
    final public function getItems()
    {
       return $this->items;
    }
    
    /**
     *
     * @return ParcelCollection|null
     */
    final public function getParcels()
    {
       return $this->parcels;
    }
    /**
     * @return $this
     */
    final public function withCreatedAt(?DateTimeImmutable $createdAt)
    {
        $this->createdAt = $createdAt;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withAddress(?Address $address)
    {
        $this->address = $address;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withId(?string $id)
    {
        $this->id = $id;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withItems(?DeliveryItemCollection $items)
    {
        $this->items = $items;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withParcels(?ParcelCollection $parcels)
    {
        $this->parcels = $parcels;
        
        return $this;
    }
    /**
     * @return $this
     */
    final public function withAddressBuilder(?AddressBuilder $address)
    {
        $this->address = $address;
        
        return $this;
    }
    
    public function build(): Delivery {
        return new DeliveryModel(
            $this->createdAt,
            ($this->address instanceof AddressBuilder ? $this->address->build() : $this->address),
            $this->id,
            $this->items,
            $this->parcels
        );
    }
    
    public static function of(): DeliveryBuilder
    {
        return new self();
    }
}