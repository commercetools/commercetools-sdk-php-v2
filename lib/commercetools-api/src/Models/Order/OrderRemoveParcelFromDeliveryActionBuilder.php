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
 * @implements Builder<OrderRemoveParcelFromDeliveryAction>
 */
final class OrderRemoveParcelFromDeliveryActionBuilder implements Builder
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
    protected $parcelId;

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
    final public function getParcelId()
    {
       return $this->parcelId;
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
    final public function withParcelId(?string $parcelId)
    {
        $this->parcelId = $parcelId;
        
        return $this;
    }
    
    public function build(): OrderRemoveParcelFromDeliveryAction {
        return new OrderRemoveParcelFromDeliveryActionModel(
            $this->action,
            $this->parcelId
        );
    }
    
    public static function of(): OrderRemoveParcelFromDeliveryActionBuilder
    {
        return new self();
    }
}