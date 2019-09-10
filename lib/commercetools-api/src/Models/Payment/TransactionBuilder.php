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
use Commercetools\Api\Models\Common\TypedMoney;
use Commercetools\Api\Models\Common\TypedMoneyBuilder;
use DateTimeImmutable;

/**
 * @implements Builder<Transaction>
 */
final class TransactionBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $interactionId;
    
    /**
     * @var ?TypedMoneyBuilder|TypedMoney
     */
    protected $amount;
    
    /**
     * @var ?string
     */
    protected $state;
    
    /**
     * @var ?string
     */
    protected $id;
    
    /**
     * @var ?string
     */
    protected $type;
    
    /**
     * @var ?DateTimeImmutable
     */
    protected $timestamp;

    /**
     *
     * @return string|null
     */
    final public function getInteractionId()
    {
       return $this->interactionId;
    }
    
    /**
     *
     * @return TypedMoney|null
     */
    final public function getAmount()
    {
       return ($this->amount instanceof TypedMoneyBuilder ? $this->amount->build() : $this->amount);
    }
    
    /**
     *
     * @return string|null
     */
    final public function getState()
    {
       return $this->state;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getId()
    {
       return $this->id;
    }
    
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
     * @return DateTimeImmutable|null
     */
    final public function getTimestamp()
    {
       return $this->timestamp;
    }
    /**
     * @return $this
     */
    final public function withInteractionId(?string $interactionId)
    {
        $this->interactionId = $interactionId;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withAmount(?TypedMoney $amount)
    {
        $this->amount = $amount;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withState(?string $state)
    {
        $this->state = $state;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withId(?string $id)
    {
        $this->id = $id;
        
        return $this;
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
    final public function withTimestamp(?DateTimeImmutable $timestamp)
    {
        $this->timestamp = $timestamp;
        
        return $this;
    }
    /**
     * @return $this
     */
    final public function withAmountBuilder(?TypedMoneyBuilder $amount)
    {
        $this->amount = $amount;
        
        return $this;
    }
    
    public function build(): Transaction {
        return new TransactionModel(
            $this->interactionId,
            ($this->amount instanceof TypedMoneyBuilder ? $this->amount->build() : $this->amount),
            $this->state,
            $this->id,
            $this->type,
            $this->timestamp
        );
    }
    
    public static function of(): TransactionBuilder
    {
        return new self();
    }
}