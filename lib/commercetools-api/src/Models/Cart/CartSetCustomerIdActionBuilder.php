<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<CartSetCustomerIdAction>
 */
final class CartSetCustomerIdActionBuilder implements Builder
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
    protected $customerId;

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
    final public function getCustomerId()
    {
       return $this->customerId;
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
    final public function withCustomerId(?string $customerId)
    {
        $this->customerId = $customerId;
        
        return $this;
    }
    
    public function build(): CartSetCustomerIdAction {
        return new CartSetCustomerIdActionModel(
            $this->action,
            $this->customerId
        );
    }
    
    public static function of(): CartSetCustomerIdActionBuilder
    {
        return new self();
    }
}