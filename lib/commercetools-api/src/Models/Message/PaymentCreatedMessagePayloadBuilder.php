<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Message;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\Api\Models\Payment\Payment;
use Commercetools\Api\Models\Payment\PaymentBuilder;

/**
 * @implements Builder<PaymentCreatedMessagePayload>
 */
final class PaymentCreatedMessagePayloadBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $type;
    
    /**
     * @var ?PaymentBuilder|Payment
     */
    protected $payment;

    /**
     *
     * @return string|null
     */
    final public function getType()
    {
       return $this->type;
    }
    
    /**
     *
     * @return Payment|null
     */
    final public function getPayment()
    {
       return ($this->payment instanceof PaymentBuilder ? $this->payment->build() : $this->payment);
    }
    /**
     * @return $this
     */
    final public function withType(?string $type)
    {
        $this->type = $type;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withPayment(?Payment $payment)
    {
        $this->payment = $payment;
        
        return $this;
    }
    /**
     * @return $this
     */
    final public function withPaymentBuilder(?PaymentBuilder $payment)
    {
        $this->payment = $payment;
        
        return $this;
    }
    
    public function build(): PaymentCreatedMessagePayload {
        return new PaymentCreatedMessagePayloadModel(
            $this->type,
            ($this->payment instanceof PaymentBuilder ? $this->payment->build() : $this->payment)
        );
    }
    
    public static function of(): PaymentCreatedMessagePayloadBuilder
    {
        return new self();
    }
}