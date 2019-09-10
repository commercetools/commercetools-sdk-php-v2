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
 * @implements Builder<CartSetCustomerEmailAction>
 */
final class CartSetCustomerEmailActionBuilder implements Builder
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
    protected $email;

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
    final public function getEmail()
    {
       return $this->email;
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
    final public function withEmail(?string $email)
    {
        $this->email = $email;
        
        return $this;
    }
    
    public function build(): CartSetCustomerEmailAction {
        return new CartSetCustomerEmailActionModel(
            $this->action,
            $this->email
        );
    }
    
    public static function of(): CartSetCustomerEmailActionBuilder
    {
        return new self();
    }
}