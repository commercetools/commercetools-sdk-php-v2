<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\Api\Models\Order\StagedOrderUpdateAction;
use Commercetools\Api\Models\Order\StagedOrderUpdateActionBuilder;
use Commercetools\Api\Models\Payment\PaymentResourceIdentifier;
use Commercetools\Api\Models\Payment\PaymentResourceIdentifierBuilder;

/**
 * @implements Builder<StagedOrderRemovePaymentAction>
 */
final class StagedOrderRemovePaymentActionBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?PaymentResourceIdentifierBuilder|PaymentResourceIdentifier
     */
    protected $payment;

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
     * @return PaymentResourceIdentifier|null
     */
    final public function getPayment()
    {
       return ($this->payment instanceof PaymentResourceIdentifierBuilder ? $this->payment->build() : $this->payment);
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
    final public function withPayment(?PaymentResourceIdentifier $payment)
    {
        $this->payment = $payment;
        
        return $this;
    }
    /**
     * @return $this
     */
    final public function withPaymentBuilder(?PaymentResourceIdentifierBuilder $payment)
    {
        $this->payment = $payment;
        
        return $this;
    }
    
    public function build(): StagedOrderRemovePaymentAction {
        return new StagedOrderRemovePaymentActionModel(
            $this->action,
            ($this->payment instanceof PaymentResourceIdentifierBuilder ? $this->payment->build() : $this->payment)
        );
    }
    
    public static function of(): StagedOrderRemovePaymentActionBuilder
    {
        return new self();
    }
}