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
use Commercetools\Api\Models\Payment\Transaction;
use Commercetools\Api\Models\Payment\TransactionBuilder;

/**
 * @implements Builder<PaymentTransactionAddedMessagePayload>
 */
final class PaymentTransactionAddedMessagePayloadBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $type;
    
    /**
     * @var ?TransactionBuilder|Transaction
     */
    protected $transaction;

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
     * @return Transaction|null
     */
    final public function getTransaction()
    {
       return ($this->transaction instanceof TransactionBuilder ? $this->transaction->build() : $this->transaction);
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
    final public function withTransaction(?Transaction $transaction)
    {
        $this->transaction = $transaction;
        
        return $this;
    }
    /**
     * @return $this
     */
    final public function withTransactionBuilder(?TransactionBuilder $transaction)
    {
        $this->transaction = $transaction;
        
        return $this;
    }
    
    public function build(): PaymentTransactionAddedMessagePayload {
        return new PaymentTransactionAddedMessagePayloadModel(
            $this->type,
            ($this->transaction instanceof TransactionBuilder ? $this->transaction->build() : $this->transaction)
        );
    }
    
    public static function of(): PaymentTransactionAddedMessagePayloadBuilder
    {
        return new self();
    }
}