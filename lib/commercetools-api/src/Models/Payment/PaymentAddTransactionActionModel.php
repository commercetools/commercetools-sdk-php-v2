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


final class PaymentAddTransactionActionModel extends JsonObjectModel implements PaymentAddTransactionAction
{
    const DISCRIMINATOR_VALUE = 'addTransaction';
    public function __construct(
        string $action = null,
        TransactionDraft $transaction = null
    ) {
        $this->action = $action;
        $this->transaction = $transaction;
        
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?TransactionDraft
     */
    protected $transaction;

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
     * @return TransactionDraft|null
     */
    final public function getTransaction()
    {
       if (is_null($this->transaction)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(PaymentAddTransactionAction::FIELD_TRANSACTION);
           if (is_null($data)) {
               return null;
           }
           
           $this->transaction = TransactionDraftModel::of($data);
       }
       return $this->transaction;
    }
    final public function setAction(?string $action): void
    {
        $this->action = $action;
    }
    
    final public function setTransaction(?TransactionDraft $transaction): void
    {
        $this->transaction = $transaction;
    }
    
}