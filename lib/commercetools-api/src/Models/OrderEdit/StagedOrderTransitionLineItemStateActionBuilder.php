<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\Api\Models\Order\StagedOrderUpdateAction;
use Commercetools\Api\Models\Order\StagedOrderUpdateActionBuilder;
use Commercetools\Api\Models\State\StateResourceIdentifier;
use Commercetools\Api\Models\State\StateResourceIdentifierBuilder;
use DateTimeImmutable;

/**
 * @implements Builder<StagedOrderTransitionLineItemStateAction>
 */
final class StagedOrderTransitionLineItemStateActionBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?StateResourceIdentifierBuilder|StateResourceIdentifier
     */
    protected $toState;
    
    /**
     * @var ?StateResourceIdentifierBuilder|StateResourceIdentifier
     */
    protected $fromState;
    
    /**
     * @var ?int
     */
    protected $quantity;
    
    /**
     * @var ?string
     */
    protected $lineItemId;
    
    /**
     * @var ?DateTimeImmutable
     */
    protected $actualTransitionDate;

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
     * @return StateResourceIdentifier|null
     */
    final public function getToState()
    {
       return ($this->toState instanceof StateResourceIdentifierBuilder ? $this->toState->build() : $this->toState);
    }
    
    /**
     *
     * @return StateResourceIdentifier|null
     */
    final public function getFromState()
    {
       return ($this->fromState instanceof StateResourceIdentifierBuilder ? $this->fromState->build() : $this->fromState);
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
     * @return string|null
     */
    final public function getLineItemId()
    {
       return $this->lineItemId;
    }
    
    /**
     *
     * @return DateTimeImmutable|null
     */
    final public function getActualTransitionDate()
    {
       return $this->actualTransitionDate;
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
    final public function withToState(?StateResourceIdentifier $toState)
    {
        $this->toState = $toState;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withFromState(?StateResourceIdentifier $fromState)
    {
        $this->fromState = $fromState;
        
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
    final public function withLineItemId(?string $lineItemId)
    {
        $this->lineItemId = $lineItemId;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withActualTransitionDate(?DateTimeImmutable $actualTransitionDate)
    {
        $this->actualTransitionDate = $actualTransitionDate;
        
        return $this;
    }
    /**
     * @return $this
     */
    final public function withToStateBuilder(?StateResourceIdentifierBuilder $toState)
    {
        $this->toState = $toState;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withFromStateBuilder(?StateResourceIdentifierBuilder $fromState)
    {
        $this->fromState = $fromState;
        
        return $this;
    }
    
    public function build(): StagedOrderTransitionLineItemStateAction {
        return new StagedOrderTransitionLineItemStateActionModel(
            $this->action,
            ($this->toState instanceof StateResourceIdentifierBuilder ? $this->toState->build() : $this->toState),
            ($this->fromState instanceof StateResourceIdentifierBuilder ? $this->fromState->build() : $this->fromState),
            $this->quantity,
            $this->lineItemId,
            $this->actualTransitionDate
        );
    }
    
    public static function of(): StagedOrderTransitionLineItemStateActionBuilder
    {
        return new self();
    }
}