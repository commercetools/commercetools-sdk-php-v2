<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Message;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\Api\Models\Order\DeliveryItemCollection;

/**
 * @implements Builder<ParcelItemsUpdatedMessagePayload>
 */
final class ParcelItemsUpdatedMessagePayloadBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $type;
    
    /**
     * @var ?string
     */
    protected $deliveryId;
    
    /**
     * @var ?DeliveryItemCollection
     */
    protected $oldItems;
    
    /**
     * @var ?DeliveryItemCollection
     */
    protected $items;
    
    /**
     * @var ?string
     */
    protected $parcelId;

    /**
     *
     * @return string|null
     */
    final public function getType()
    {
       return $this->type;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getDeliveryId()
    {
       return $this->deliveryId;
    }
    
    /**
     *
     * @return DeliveryItemCollection|null
     */
    final public function getOldItems()
    {
       return $this->oldItems;
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
     * @return string|null
     */
    final public function getParcelId()
    {
       return $this->parcelId;
    }
    /**
     * @return $this
     */
    final public function withType(?string $type)
    {
        $this->type = $type;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withDeliveryId(?string $deliveryId)
    {
        $this->deliveryId = $deliveryId;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withOldItems(?DeliveryItemCollection $oldItems)
    {
        $this->oldItems = $oldItems;
        
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
    final public function withParcelId(?string $parcelId)
    {
        $this->parcelId = $parcelId;
        
        return $this;
    }
    
    public function build(): ParcelItemsUpdatedMessagePayload {
        return new ParcelItemsUpdatedMessagePayloadModel(
            $this->type,
            $this->deliveryId,
            $this->oldItems,
            $this->items,
            $this->parcelId
        );
    }
    
    public static function of(): ParcelItemsUpdatedMessagePayloadBuilder
    {
        return new self();
    }
}