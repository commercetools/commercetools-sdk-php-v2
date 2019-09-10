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
 * @implements Builder<PaymentSetStatusInterfaceCodeAction>
 */
final class PaymentSetStatusInterfaceCodeActionBuilder implements Builder
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
    protected $interfaceCode;

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
    final public function getInterfaceCode()
    {
       return $this->interfaceCode;
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
    final public function withInterfaceCode(?string $interfaceCode)
    {
        $this->interfaceCode = $interfaceCode;
        
        return $this;
    }
    
    public function build(): PaymentSetStatusInterfaceCodeAction {
        return new PaymentSetStatusInterfaceCodeActionModel(
            $this->action,
            $this->interfaceCode
        );
    }
    
    public static function of(): PaymentSetStatusInterfaceCodeActionBuilder
    {
        return new self();
    }
}