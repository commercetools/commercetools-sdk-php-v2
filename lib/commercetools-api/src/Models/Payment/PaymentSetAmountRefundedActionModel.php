<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Payment;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

use Commercetools\Api\Models\Common\Money;
use Commercetools\Api\Models\Common\MoneyModel;

final class PaymentSetAmountRefundedActionModel extends JsonObjectModel implements PaymentSetAmountRefundedAction
{
    const DISCRIMINATOR_VALUE = 'setAmountRefunded';
    public function __construct(
        string $action = null,
        Money $amount = null
    ) {
        $this->action = $action;
        $this->amount = $amount;
        
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?Money
     */
    protected $amount;

    /**
     *
     * @return string|null
     */
    final public function getAction()
    {
       if (is_null($this->action)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(PaymentUpdateAction::FIELD_ACTION);
           if (is_null($data)) {
               return null;
           }
           $this->action = (string)$data;
       }
       return $this->action;
    }
    
    /**
     *
     * @return Money|null
     */
    final public function getAmount()
    {
       if (is_null($this->amount)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(PaymentSetAmountRefundedAction::FIELD_AMOUNT);
           if (is_null($data)) {
               return null;
           }
           
           $this->amount = MoneyModel::of($data);
       }
       return $this->amount;
    }
    final public function setAction(?string $action): void
    {
        $this->action = $action;
    }
    
    final public function setAmount(?Money $amount): void
    {
        $this->amount = $amount;
    }
    
}