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

/**
 * @implements Builder<OrderRemoveDeliveryAction>
 */
final class OrderRemoveDeliveryActionBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?string
     */
    protected $deliveryId;

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
     * @return string|null
     */
    final public function getDeliveryId()
    {
       return $this->deliveryId;
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
    final public function withDeliveryId(?string $deliveryId)
    {
        $this->deliveryId = $deliveryId;
        
        return $this;
    }
    
    public function build(): OrderRemoveDeliveryAction {
        return new OrderRemoveDeliveryActionModel(
            $this->action,
            $this->deliveryId
        );
    }
    
    public static function of(): OrderRemoveDeliveryActionBuilder
    {
        return new self();
    }
}