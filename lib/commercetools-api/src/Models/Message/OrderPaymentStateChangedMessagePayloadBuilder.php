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
 * @implements Builder<OrderPaymentStateChangedMessagePayload>
 */
final class OrderPaymentStateChangedMessagePayloadBuilder implements Builder
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
    protected $oldPaymentState;
    
    /**
     * @var ?string
     */
    protected $paymentState;

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
    final public function getOldPaymentState()
    {
       return $this->oldPaymentState;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getPaymentState()
    {
       return $this->paymentState;
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
    final public function withOldPaymentState(?string $oldPaymentState)
    {
        $this->oldPaymentState = $oldPaymentState;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withPaymentState(?string $paymentState)
    {
        $this->paymentState = $paymentState;
        
        return $this;
    }
    
    public function build(): OrderPaymentStateChangedMessagePayload {
        return new OrderPaymentStateChangedMessagePayloadModel(
            $this->type,
            $this->oldPaymentState,
            $this->paymentState
        );
    }
    
    public static function of(): OrderPaymentStateChangedMessagePayloadBuilder
    {
        return new self();
    }
}