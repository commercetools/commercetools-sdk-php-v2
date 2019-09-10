<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\Api\Models\Common\Address;
use Commercetools\Api\Models\Common\AddressBuilder;
use Commercetools\Api\Models\Order\DeliveryItemCollection;
use Commercetools\Api\Models\Order\ParcelDraftCollection;
use Commercetools\Api\Models\Order\StagedOrderUpdateAction;
use Commercetools\Api\Models\Order\StagedOrderUpdateActionBuilder;

/**
 * @implements Builder<StagedOrderAddDeliveryAction>
 */
final class StagedOrderAddDeliveryActionBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?AddressBuilder|Address
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

    /**
     *
     * @return string|null
     */
    final public function getAction()
    {
       return $this->action;
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
     * @return DeliveryItemCollection|null
     */
    final public function getItems()
    {
       return $this->items;
    }
    
    /**
     *
     * @return ParcelDraftCollection|null
     */
    final public function getParcels()
    {
       return $this->parcels;
    }
    /**
     * @return $this
     */
    final public function withAction(?string $action)
    {
        $this->action = $action;
        
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
    final public function withItems(?DeliveryItemCollection $items)
    {
        $this->items = $items;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withParcels(?ParcelDraftCollection $parcels)
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
    
    public function build(): StagedOrderAddDeliveryAction {
        return new StagedOrderAddDeliveryActionModel(
            $this->action,
            ($this->address instanceof AddressBuilder ? $this->address->build() : $this->address),
            $this->items,
            $this->parcels
        );
    }
    
    public static function of(): StagedOrderAddDeliveryActionBuilder
    {
        return new self();
    }
}