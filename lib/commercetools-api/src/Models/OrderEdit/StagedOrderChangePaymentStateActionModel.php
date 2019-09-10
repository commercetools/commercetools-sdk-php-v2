<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

use Commercetools\Api\Models\Order\StagedOrderUpdateAction;
use Commercetools\Api\Models\Order\StagedOrderUpdateActionModel;

final class StagedOrderChangePaymentStateActionModel extends JsonObjectModel implements StagedOrderChangePaymentStateAction
{
    const DISCRIMINATOR_VALUE = 'changePaymentState';
    public function __construct(
        string $action = null,
        string $paymentState = null
    ) {
        $this->action = $action;
        $this->paymentState = $paymentState;
        
    }

    /**
     * @var ?string
     */
    protected $action;
    
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
       if (is_null($this->action)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(StagedOrderUpdateAction::FIELD_ACTION);
           if (is_null($data)) {
               return null;
           }
           $this->action = (string)$data;
       }
       return $this->action;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getPaymentState()
    {
       if (is_null($this->paymentState)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(StagedOrderChangePaymentStateAction::FIELD_PAYMENT_STATE);
           if (is_null($data)) {
               return null;
           }
           $this->paymentState = (string)$data;
       }
       return $this->paymentState;
    }
    final public function setAction(?string $action): void
    {
        $this->action = $action;
    }
    
    final public function setPaymentState(?string $paymentState): void
    {
        $this->paymentState = $paymentState;
    }
    
}