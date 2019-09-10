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
use Commercetools\Api\Models\Common\Reference;
use Commercetools\Api\Models\Common\ReferenceBuilder;
use Commercetools\Api\Models\State\StateReference;
use Commercetools\Api\Models\State\StateReferenceBuilder;

/**
 * @implements Builder<ReviewStateTransitionMessagePayload>
 */
final class ReviewStateTransitionMessagePayloadBuilder implements Builder
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
    protected $newIncludedInStatistics;
    
    /**
     * @var ?StateReferenceBuilder|StateReference
     */
    protected $oldState;
    
    /**
     * @var ?bool
     */
    protected $force;
    
    /**
     * @var ?bool
     */
    protected $oldIncludedInStatistics;
    
    /**
     * @var ?StateReferenceBuilder|StateReference
     */
    protected $newState;
    
    /**
     * @var ?ReferenceBuilder|Reference
     */
    protected $target;

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
    final public function getNewIncludedInStatistics()
    {
       return $this->newIncludedInStatistics;
    }
    
    /**
     *
     * @return StateReference|null
     */
    final public function getOldState()
    {
       return ($this->oldState instanceof StateReferenceBuilder ? $this->oldState->build() : $this->oldState);
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
     * @return bool|null
     */
    final public function getOldIncludedInStatistics()
    {
       return $this->oldIncludedInStatistics;
    }
    
    /**
     *
     * @return StateReference|null
     */
    final public function getNewState()
    {
       return ($this->newState instanceof StateReferenceBuilder ? $this->newState->build() : $this->newState);
    }
    
    /**
     *
     * @return Reference|null
     */
    final public function getTarget()
    {
       return ($this->target instanceof ReferenceBuilder ? $this->target->build() : $this->target);
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
    final public function withNewIncludedInStatistics(?bool $newIncludedInStatistics)
    {
        $this->newIncludedInStatistics = $newIncludedInStatistics;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withOldState(?StateReference $oldState)
    {
        $this->oldState = $oldState;
        
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
    final public function withOldIncludedInStatistics(?bool $oldIncludedInStatistics)
    {
        $this->oldIncludedInStatistics = $oldIncludedInStatistics;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withNewState(?StateReference $newState)
    {
        $this->newState = $newState;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withTarget(?Reference $target)
    {
        $this->target = $target;
        
        return $this;
    }
    /**
     * @return $this
     */
    final public function withOldStateBuilder(?StateReferenceBuilder $oldState)
    {
        $this->oldState = $oldState;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withNewStateBuilder(?StateReferenceBuilder $newState)
    {
        $this->newState = $newState;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withTargetBuilder(?ReferenceBuilder $target)
    {
        $this->target = $target;
        
        return $this;
    }
    
    public function build(): ReviewStateTransitionMessagePayload {
        return new ReviewStateTransitionMessagePayloadModel(
            $this->type,
            $this->newIncludedInStatistics,
            ($this->oldState instanceof StateReferenceBuilder ? $this->oldState->build() : $this->oldState),
            $this->force,
            $this->oldIncludedInStatistics,
            ($this->newState instanceof StateReferenceBuilder ? $this->newState->build() : $this->newState),
            ($this->target instanceof ReferenceBuilder ? $this->target->build() : $this->target)
        );
    }
    
    public static function of(): ReviewStateTransitionMessagePayloadBuilder
    {
        return new self();
    }
}