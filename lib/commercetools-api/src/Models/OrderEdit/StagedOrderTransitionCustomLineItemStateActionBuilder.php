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
 * @implements Builder<StagedOrderTransitionCustomLineItemStateAction>
 */
final class StagedOrderTransitionCustomLineItemStateActionBuilder implements Builder
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
    
    public function build(): StagedOrderTransitionCustomLineItemStateAction {
        return new StagedOrderTransitionCustomLineItemStateActionModel(
            $this->action,
            ($this->toState instanceof StateResourceIdentifierBuilder ? $this->toState->build() : $this->toState),
            ($this->fromState instanceof StateResourceIdentifierBuilder ? $this->fromState->build() : $this->fromState),
            $this->customLineItemId,
            $this->quantity,
            $this->actualTransitionDate
        );
    }
    
    public static function of(): StagedOrderTransitionCustomLineItemStateActionBuilder
    {
        return new self();
    }
}