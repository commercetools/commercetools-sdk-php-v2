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
use Commercetools\Api\Models\Order\Delivery;
use Commercetools\Api\Models\Order\DeliveryBuilder;

/**
 * @implements Builder<DeliveryRemovedMessagePayload>
 */
final class DeliveryRemovedMessagePayloadBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $type;
    
    /**
     * @var ?DeliveryBuilder|Delivery
     */
    protected $delivery;

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
     * @return Delivery|null
     */
    final public function getDelivery()
    {
       return ($this->delivery instanceof DeliveryBuilder ? $this->delivery->build() : $this->delivery);
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
    final public function withDelivery(?Delivery $delivery)
    {
        $this->delivery = $delivery;
        
        return $this;
    }
    /**
     * @return $this
     */
    final public function withDeliveryBuilder(?DeliveryBuilder $delivery)
    {
        $this->delivery = $delivery;
        
        return $this;
    }
    
    public function build(): DeliveryRemovedMessagePayload {
        return new DeliveryRemovedMessagePayloadModel(
            $this->type,
            ($this->delivery instanceof DeliveryBuilder ? $this->delivery->build() : $this->delivery)
        );
    }
    
    public static function of(): DeliveryRemovedMessagePayloadBuilder
    {
        return new self();
    }
}