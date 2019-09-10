<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Review;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\Api\Models\State\StateResourceIdentifier;
use Commercetools\Api\Models\State\StateResourceIdentifierBuilder;

/**
 * @implements Builder<ReviewTransitionStateAction>
 */
final class ReviewTransitionStateActionBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?bool
     */
    protected $force;
    
    /**
     * @var ?StateResourceIdentifierBuilder|StateResourceIdentifier
     */
    protected $state;

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
     * @return bool|null
     */
    final public function getForce()
    {
       return $this->force;
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
    final public function withForce(?bool $force)
    {
        $this->force = $force;
        
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
    final public function withStateBuilder(?StateResourceIdentifierBuilder $state)
    {
        $this->state = $state;
        
        return $this;
    }
    
    public function build(): ReviewTransitionStateAction {
        return new ReviewTransitionStateActionModel(
            $this->action,
            $this->force,
            ($this->state instanceof StateResourceIdentifierBuilder ? $this->state->build() : $this->state)
        );
    }
    
    public static function of(): ReviewTransitionStateActionBuilder
    {
        return new self();
    }
}