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
use Commercetools\Api\Models\Order\Order;
use Commercetools\Api\Models\Order\OrderBuilder;

/**
 * @implements Builder<OrderImportedMessagePayload>
 */
final class OrderImportedMessagePayloadBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $type;
    
    /**
     * @var ?OrderBuilder|Order
     */
    protected $order;

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
     * @return Order|null
     */
    final public function getOrder()
    {
       return ($this->order instanceof OrderBuilder ? $this->order->build() : $this->order);
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
    final public function withOrder(?Order $order)
    {
        $this->order = $order;
        
        return $this;
    }
    /**
     * @return $this
     */
    final public function withOrderBuilder(?OrderBuilder $order)
    {
        $this->order = $order;
        
        return $this;
    }
    
    public function build(): OrderImportedMessagePayload {
        return new OrderImportedMessagePayloadModel(
            $this->type,
            ($this->order instanceof OrderBuilder ? $this->order->build() : $this->order)
        );
    }
    
    public static function of(): OrderImportedMessagePayloadBuilder
    {
        return new self();
    }
}