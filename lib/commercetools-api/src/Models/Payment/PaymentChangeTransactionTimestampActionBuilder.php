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
use DateTimeImmutable;

/**
 * @implements Builder<PaymentChangeTransactionTimestampAction>
 */
final class PaymentChangeTransactionTimestampActionBuilder implements Builder
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
    protected $transactionId;
    
    /**
     * @var ?DateTimeImmutable
     */
    protected $timestamp;

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
    final public function getTransactionId()
    {
       return $this->transactionId;
    }
    
    /**
     *
     * @return DateTimeImmutable|null
     */
    final public function getTimestamp()
    {
       return $this->timestamp;
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
    final public function withTransactionId(?string $transactionId)
    {
        $this->transactionId = $transactionId;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withTimestamp(?DateTimeImmutable $timestamp)
    {
        $this->timestamp = $timestamp;
        
        return $this;
    }
    
    public function build(): PaymentChangeTransactionTimestampAction {
        return new PaymentChangeTransactionTimestampActionModel(
            $this->action,
            $this->transactionId,
            $this->timestamp
        );
    }
    
    public static function of(): PaymentChangeTransactionTimestampActionBuilder
    {
        return new self();
    }
}