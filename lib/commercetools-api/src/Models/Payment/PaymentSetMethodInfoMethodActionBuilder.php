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
 * @implements Builder<PaymentSetMethodInfoMethodAction>
 */
final class PaymentSetMethodInfoMethodActionBuilder implements Builder
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
    protected $method;

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
    final public function getMethod()
    {
       return $this->method;
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
    final public function withMethod(?string $method)
    {
        $this->method = $method;
        
        return $this;
    }
    
    public function build(): PaymentSetMethodInfoMethodAction {
        return new PaymentSetMethodInfoMethodActionModel(
            $this->action,
            $this->method
        );
    }
    
    public static function of(): PaymentSetMethodInfoMethodActionBuilder
    {
        return new self();
    }
}