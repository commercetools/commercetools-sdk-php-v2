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
use Commercetools\Api\Models\State\StateResourceIdentifier;
use Commercetools\Api\Models\State\StateResourceIdentifierBuilder;

/**
 * @implements Builder<PaymentStatusDraft>
 */
final class PaymentStatusDraftBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $interfaceText;
    
    /**
     * @var ?StateResourceIdentifierBuilder|StateResourceIdentifier
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
     * @return StateResourceIdentifier|null
     */
    final public function getState()
    {
       return ($this->state instanceof StateResourceIdentifierBuilder ? $this->state->build() : $this->state);
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
    final public function withState(?StateResourceIdentifier $state)
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
    final public function withStateBuilder(?StateResourceIdentifierBuilder $state)
    {
        $this->state = $state;
        
        return $this;
    }
    
    public function build(): PaymentStatusDraft {
        return new PaymentStatusDraftModel(
            $this->interfaceText,
            ($this->state instanceof StateResourceIdentifierBuilder ? $this->state->build() : $this->state),
            $this->interfaceCode
        );
    }
    
    public static function of(): PaymentStatusDraftBuilder
    {
        return new self();
    }
}