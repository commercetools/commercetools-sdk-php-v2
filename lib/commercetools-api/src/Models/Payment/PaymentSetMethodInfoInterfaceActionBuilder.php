<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Payment;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<PaymentSetMethodInfoInterfaceAction>
 */
final class PaymentSetMethodInfoInterfaceActionBuilder implements Builder
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
    protected $interface;

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
    final public function getInterface()
    {
       return $this->interface;
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
    final public function withInterface(?string $interface)
    {
        $this->interface = $interface;
        
        return $this;
    }
    
    public function build(): PaymentSetMethodInfoInterfaceAction {
        return new PaymentSetMethodInfoInterfaceActionModel(
            $this->action,
            $this->interface
        );
    }
    
    public static function of(): PaymentSetMethodInfoInterfaceActionBuilder
    {
        return new self();
    }
}