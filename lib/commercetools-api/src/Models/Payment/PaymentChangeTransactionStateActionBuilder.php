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
 * @implements Builder<PaymentChangeTransactionStateAction>
 */
final class PaymentChangeTransactionStateActionBuilder implements Builder
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
    protected $state;
    
    /**
     * @var ?string
     */
    protected $transactionId;

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
    final public function getState()
    {
       return $this->state;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getTransactionId()
    {
       return $this->transactionId;
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
    final public function withState(?string $state)
    {
        $this->state = $state;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withTransactionId(?string $transactionId)
    {
        $this->transactionId = $transactionId;
        
        return $this;
    }
    
    public function build(): PaymentChangeTransactionStateAction {
        return new PaymentChangeTransactionStateActionModel(
            $this->action,
            $this->state,
            $this->transactionId
        );
    }
    
    public static function of(): PaymentChangeTransactionStateActionBuilder
    {
        return new self();
    }
}