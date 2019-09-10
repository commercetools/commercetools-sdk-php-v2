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
use Commercetools\Api\Models\State\StateReference;
use Commercetools\Api\Models\State\StateReferenceBuilder;

/**
 * @implements Builder<PaymentStatus>
 */
final class PaymentStatusBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $interfaceText;
    
    /**
     * @var ?StateReferenceBuilder|StateReference
     */
    protected $state;
    
    /**
     * @var ?string
     */
    protected $interfaceCode;

    /**
     *
     * @return string|null
     */
    final public function getInterfaceText()
    {
       return $this->interfaceText;
    }
    
    /**
     *
     * @return StateReference|null
     */
    final public function getState()
    {
       return ($this->state instanceof StateReferenceBuilder ? $this->state->build() : $this->state);
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
    final public function withInterfaceText(?string $interfaceText)
    {
        $this->interfaceText = $interfaceText;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withState(?StateReference $state)
    {
        $this->state = $state;
        
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
    /**
     * @return $this
     */
    final public function withStateBuilder(?StateReferenceBuilder $state)
    {
        $this->state = $state;
        
        return $this;
    }
    
    public function build(): PaymentStatus {
        return new PaymentStatusModel(
            $this->interfaceText,
            ($this->state instanceof StateReferenceBuilder ? $this->state->build() : $this->state),
            $this->interfaceCode
        );
    }
    
    public static function of(): PaymentStatusBuilder
    {
        return new self();
    }
}