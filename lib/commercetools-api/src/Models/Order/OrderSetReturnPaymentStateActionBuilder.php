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
 * @implements Builder<OrderSetReturnPaymentStateAction>
 */
final class OrderSetReturnPaymentStateActionBuilder implements Builder
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
    protected $returnItemId;
    
    /**
     * @var ?string
     */
    protected $paymentState;

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
    final public function getReturnItemId()
    {
       return $this->returnItemId;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getPaymentState()
    {
       return $this->paymentState;
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
    final public function withReturnItemId(?string $returnItemId)
    {
        $this->returnItemId = $returnItemId;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withPaymentState(?string $paymentState)
    {
        $this->paymentState = $paymentState;
        
        return $this;
    }
    
    public function build(): OrderSetReturnPaymentStateAction {
        return new OrderSetReturnPaymentStateActionModel(
            $this->action,
            $this->returnItemId,
            $this->paymentState
        );
    }
    
    public static function of(): OrderSetReturnPaymentStateActionBuilder
    {
        return new self();
    }
}