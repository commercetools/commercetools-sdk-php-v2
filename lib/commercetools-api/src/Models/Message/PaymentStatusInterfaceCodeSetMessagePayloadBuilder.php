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
 * @implements Builder<PaymentStatusInterfaceCodeSetMessagePayload>
 */
final class PaymentStatusInterfaceCodeSetMessagePayloadBuilder implements Builder
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
    protected $paymentId;
    
    /**
     * @var ?string
     */
    protected $interfaceCode;

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
    final public function getPaymentId()
    {
       return $this->paymentId;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getInterfaceCode()
    {
       return $this->interfaceCode;
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
    final public function withPaymentId(?string $paymentId)
    {
        $this->paymentId = $paymentId;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withInterfaceCode(?string $interfaceCode)
    {
        $this->interfaceCode = $interfaceCode;
        
        return $this;
    }
    
    public function build(): PaymentStatusInterfaceCodeSetMessagePayload {
        return new PaymentStatusInterfaceCodeSetMessagePayloadModel(
            $this->type,
            $this->paymentId,
            $this->interfaceCode
        );
    }
    
    public static function of(): PaymentStatusInterfaceCodeSetMessagePayloadBuilder
    {
        return new self();
    }
}