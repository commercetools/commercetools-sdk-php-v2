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

/**
 * @implements Builder<OrderStateChangedMessagePayload>
 */
final class OrderStateChangedMessagePayloadBuilder implements Builder
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
    protected $oldOrderState;
    
    /**
     * @var ?string
     */
    protected $orderState;

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
    final public function getOldOrderState()
    {
       return $this->oldOrderState;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getOrderState()
    {
       return $this->orderState;
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
    final public function withOldOrderState(?string $oldOrderState)
    {
        $this->oldOrderState = $oldOrderState;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withOrderState(?string $orderState)
    {
        $this->orderState = $orderState;
        
        return $this;
    }
    
    public function build(): OrderStateChangedMessagePayload {
        return new OrderStateChangedMessagePayloadModel(
            $this->type,
            $this->oldOrderState,
            $this->orderState
        );
    }
    
    public static function of(): OrderStateChangedMessagePayloadBuilder
    {
        return new self();
    }
}