<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Order;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

use Commercetools\Api\Models\Payment\PaymentResourceIdentifier;
use Commercetools\Api\Models\Payment\PaymentResourceIdentifierModel;

final class OrderRemovePaymentActionModel extends JsonObjectModel implements OrderRemovePaymentAction
{
    const DISCRIMINATOR_VALUE = 'removePayment';
    public function __construct(
        string $action = null,
        PaymentResourceIdentifier $payment = null
    ) {
        $this->action = $action;
        $this->payment = $payment;
        
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?PaymentResourceIdentifier
     */
    protected $payment;

    /**
     *
     * @return string|null
     */
    final public function getAction()
    {
       if (is_null($this->action)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(OrderUpdateAction::FIELD_ACTION);
           if (is_null($data)) {
               return null;
           }
           $this->action = (string)$data;
       }
       return $this->action;
    }
    
    /**
     *
     * @return PaymentResourceIdentifier|null
     */
    final public function getPayment()
    {
       if (is_null($this->payment)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(OrderRemovePaymentAction::FIELD_PAYMENT);
           if (is_null($data)) {
               return null;
           }
           
           $this->payment = PaymentResourceIdentifierModel::of($data);
       }
       return $this->payment;
    }
    final public function setAction(?string $action): void
    {
        $this->action = $action;
    }
    
    final public function setPayment(?PaymentResourceIdentifier $payment): void
    {
        $this->payment = $payment;
    }
    
}