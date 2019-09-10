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
 * @implements Builder<PaymentSetStatusInterfaceTextAction>
 */
final class PaymentSetStatusInterfaceTextActionBuilder implements Builder
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
    protected $interfaceText;

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
    final public function getInterfaceText()
    {
       return $this->interfaceText;
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
    final public function withInterfaceText(?string $interfaceText)
    {
        $this->interfaceText = $interfaceText;
        
        return $this;
    }
    
    public function build(): PaymentSetStatusInterfaceTextAction {
        return new PaymentSetStatusInterfaceTextActionModel(
            $this->action,
            $this->interfaceText
        );
    }
    
    public static function of(): PaymentSetStatusInterfaceTextActionBuilder
    {
        return new self();
    }
}