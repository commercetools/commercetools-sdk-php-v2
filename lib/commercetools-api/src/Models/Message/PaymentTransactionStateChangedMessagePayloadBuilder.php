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

/**
 * @implements Builder<PaymentTransactionStateChangedMessagePayload>
 */
final class PaymentTransactionStateChangedMessagePayloadBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $type;
    
    /**
     * @var ?string
     */
    protected $state;
    
    /**
     * @var ?string
     */
    protected $transactionId;

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
    final public function getTransactionId()
    {
       return $this->transactionId;
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
    final public function withState(?string $state)
    {
        $this->state = $state;
        
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
    
    public function build(): PaymentTransactionStateChangedMessagePayload {
        return new PaymentTransactionStateChangedMessagePayloadModel(
            $this->type,
            $this->state,
            $this->transactionId
        );
    }
    
    public static function of(): PaymentTransactionStateChangedMessagePayloadBuilder
    {
        return new self();
    }
}