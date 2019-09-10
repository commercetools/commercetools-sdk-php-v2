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
 * @implements Builder<PaymentAddTransactionAction>
 */
final class PaymentAddTransactionActionBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?TransactionDraftBuilder|TransactionDraft
     */
    protected $transaction;

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
     * @return TransactionDraft|null
     */
    final public function getTransaction()
    {
       return ($this->transaction instanceof TransactionDraftBuilder ? $this->transaction->build() : $this->transaction);
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
    final public function withTransaction(?TransactionDraft $transaction)
    {
        $this->transaction = $transaction;
        
        return $this;
    }
    /**
     * @return $this
     */
    final public function withTransactionBuilder(?TransactionDraftBuilder $transaction)
    {
        $this->transaction = $transaction;
        
        return $this;
    }
    
    public function build(): PaymentAddTransactionAction {
        return new PaymentAddTransactionActionModel(
            $this->action,
            ($this->transaction instanceof TransactionDraftBuilder ? $this->transaction->build() : $this->transaction)
        );
    }
    
    public static function of(): PaymentAddTransactionActionBuilder
    {
        return new self();
    }
}