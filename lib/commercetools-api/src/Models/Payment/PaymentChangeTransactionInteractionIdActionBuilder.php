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
 * @implements Builder<PaymentChangeTransactionInteractionIdAction>
 */
final class PaymentChangeTransactionInteractionIdActionBuilder implements Builder
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
    protected $interactionId;
    
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
    final public function getInteractionId()
    {
       return $this->interactionId;
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
    final public function withInteractionId(?string $interactionId)
    {
        $this->interactionId = $interactionId;
        
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
    
    public function build(): PaymentChangeTransactionInteractionIdAction {
        return new PaymentChangeTransactionInteractionIdActionModel(
            $this->action,
            $this->interactionId,
            $this->transactionId
        );
    }
    
    public static function of(): PaymentChangeTransactionInteractionIdActionBuilder
    {
        return new self();
    }
}