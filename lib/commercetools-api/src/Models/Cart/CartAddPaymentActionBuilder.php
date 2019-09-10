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
use Commercetools\Api\Models\Payment\PaymentResourceIdentifier;
use Commercetools\Api\Models\Payment\PaymentResourceIdentifierBuilder;

/**
 * @implements Builder<CartAddPaymentAction>
 */
final class CartAddPaymentActionBuilder implements Builder
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
    
    public function build(): CartAddPaymentAction {
        return new CartAddPaymentActionModel(
            $this->action,
            ($this->payment instanceof PaymentResourceIdentifierBuilder ? $this->payment->build() : $this->payment)
        );
    }
    
    public static function of(): CartAddPaymentActionBuilder
    {
        return new self();
    }
}