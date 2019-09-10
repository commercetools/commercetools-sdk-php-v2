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
use DateTimeImmutable;

/**
 * @implements Builder<CustomLineItemStateTransitionMessagePayload>
 */
final class CustomLineItemStateTransitionMessagePayloadBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $type;
    
    /**
     * @var ?StateReferenceBuilder|StateReference
     */
    protected $toState;
    
    /**
     * @var ?StateReferenceBuilder|StateReference
     */
    protected $fromState;
    
    /**
     * @var ?string
     */
    protected $customLineItemId;
    
    /**
     * @var ?int
     */
    protected $quantity;
    
    /**
     * @var ?DateTimeImmutable
     */
    protected $transitionDate;

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
     * @return StateReference|null
     */
    final public function getToState()
    {
       return ($this->toState instanceof StateReferenceBuilder ? $this->toState->build() : $this->toState);
    }
    
    /**
     *
     * @return StateReference|null
     */
    final public function getFromState()
    {
       return ($this->fromState instanceof StateReferenceBuilder ? $this->fromState->build() : $this->fromState);
    }
    
    /**
     *
     * @return string|null
     */
    final public function getCustomLineItemId()
    {
       return $this->customLineItemId;
    }
    
    /**
     *
     * @return int|null
     */
    final public function getQuantity()
    {
       return $this->quantity;
    }
    
    /**
     *
     * @return DateTimeImmutable|null
     */
    final public function getTransitionDate()
    {
       return $this->transitionDate;
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
    final public function withToState(?StateReference $toState)
    {
        $this->toState = $toState;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withFromState(?StateReference $fromState)
    {
        $this->fromState = $fromState;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withCustomLineItemId(?string $customLineItemId)
    {
        $this->customLineItemId = $customLineItemId;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withQuantity(?int $quantity)
    {
        $this->quantity = $quantity;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withTransitionDate(?DateTimeImmutable $transitionDate)
    {
        $this->transitionDate = $transitionDate;
        
        return $this;
    }
    /**
     * @return $this
     */
    final public function withToStateBuilder(?StateReferenceBuilder $toState)
    {
        $this->toState = $toState;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withFromStateBuilder(?StateReferenceBuilder $fromState)
    {
        $this->fromState = $fromState;
        
        return $this;
    }
    
    public function build(): CustomLineItemStateTransitionMessagePayload {
        return new CustomLineItemStateTransitionMessagePayloadModel(
            $this->type,
            ($this->toState instanceof StateReferenceBuilder ? $this->toState->build() : $this->toState),
            ($this->fromState instanceof StateReferenceBuilder ? $this->fromState->build() : $this->fromState),
            $this->customLineItemId,
            $this->quantity,
            $this->transitionDate
        );
    }
    
    public static function of(): CustomLineItemStateTransitionMessagePayloadBuilder
    {
        return new self();
    }
}