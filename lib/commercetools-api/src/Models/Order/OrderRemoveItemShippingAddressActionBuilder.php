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
 * @implements Builder<OrderRemoveItemShippingAddressAction>
 */
final class OrderRemoveItemShippingAddressActionBuilder implements Builder
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
    protected $addressKey;

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
    final public function getAddressKey()
    {
       return $this->addressKey;
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
    final public function withAddressKey(?string $addressKey)
    {
        $this->addressKey = $addressKey;
        
        return $this;
    }
    
    public function build(): OrderRemoveItemShippingAddressAction {
        return new OrderRemoveItemShippingAddressActionModel(
            $this->action,
            $this->addressKey
        );
    }
    
    public static function of(): OrderRemoveItemShippingAddressActionBuilder
    {
        return new self();
    }
}