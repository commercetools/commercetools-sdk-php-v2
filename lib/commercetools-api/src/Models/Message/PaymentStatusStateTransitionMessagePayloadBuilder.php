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
use Commercetools\Api\Models\State\StateReference;
use Commercetools\Api\Models\State\StateReferenceBuilder;

/**
 * @implements Builder<PaymentStatusStateTransitionMessagePayload>
 */
final class PaymentStatusStateTransitionMessagePayloadBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $type;
    
    /**
     * @var ?bool
     */
    protected $force;
    
    /**
     * @var ?StateReferenceBuilder|StateReference
     */
    protected $state;

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
     * @return bool|null
     */
    final public function getForce()
    {
       return $this->force;
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
    final public function withForce(?bool $force)
    {
        $this->force = $force;
        
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
    final public function withStateBuilder(?StateReferenceBuilder $state)
    {
        $this->state = $state;
        
        return $this;
    }
    
    public function build(): PaymentStatusStateTransitionMessagePayload {
        return new PaymentStatusStateTransitionMessagePayloadModel(
            $this->type,
            $this->force,
            ($this->state instanceof StateReferenceBuilder ? $this->state->build() : $this->state)
        );
    }
    
    public static function of(): PaymentStatusStateTransitionMessagePayloadBuilder
    {
        return new self();
    }
}