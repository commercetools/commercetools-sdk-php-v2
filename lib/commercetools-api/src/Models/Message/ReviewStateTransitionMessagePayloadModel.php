<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Message;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

use Commercetools\Api\Models\Common\Reference;
use Commercetools\Api\Models\Common\ReferenceModel;
use Commercetools\Api\Models\State\StateReference;
use Commercetools\Api\Models\State\StateReferenceModel;

final class ReviewStateTransitionMessagePayloadModel extends JsonObjectModel implements ReviewStateTransitionMessagePayload
{
    const DISCRIMINATOR_VALUE = 'ReviewStateTransition';
    public function __construct(
        string $type = null,
        bool $newIncludedInStatistics = null,
        StateReference $oldState = null,
        bool $force = null,
        bool $oldIncludedInStatistics = null,
        StateReference $newState = null,
        Reference $target = null
    ) {
        $this->type = $type;
        $this->newIncludedInStatistics = $newIncludedInStatistics;
        $this->oldState = $oldState;
        $this->force = $force;
        $this->oldIncludedInStatistics = $oldIncludedInStatistics;
        $this->newState = $newState;
        $this->target = $target;
        
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
     * @var ?StateReference
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
     * @var ?StateReference
     */
    protected $newState;
    
    /**
     * @var ?Reference
     */
    protected $target;

    /**
     *
     * @return string|null
     */
    final public function getType()
    {
       if (is_null($this->type)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(MessagePayload::FIELD_TYPE);
           if (is_null($data)) {
               return null;
           }
           $this->type = (string)$data;
       }
       return $this->type;
    }
    
    /**
     *
     * @return bool|null
     */
    final public function getNewIncludedInStatistics()
    {
       if (is_null($this->newIncludedInStatistics)) {
           /** @psalm-var ?bool $data */
           $data = $this->raw(ReviewStateTransitionMessagePayload::FIELD_NEW_INCLUDED_IN_STATISTICS);
           if (is_null($data)) {
               return null;
           }
           $this->newIncludedInStatistics = (bool)$data;
       }
       return $this->newIncludedInStatistics;
    }
    
    /**
     *
     * @return StateReference|null
     */
    final public function getOldState()
    {
       if (is_null($this->oldState)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(ReviewStateTransitionMessagePayload::FIELD_OLD_STATE);
           if (is_null($data)) {
               return null;
           }
           
           $this->oldState = StateReferenceModel::of($data);
       }
       return $this->oldState;
    }
    
    /**
     *
     * @return bool|null
     */
    final public function getForce()
    {
       if (is_null($this->force)) {
           /** @psalm-var ?bool $data */
           $data = $this->raw(ReviewStateTransitionMessagePayload::FIELD_FORCE);
           if (is_null($data)) {
               return null;
           }
           $this->force = (bool)$data;
       }
       return $this->force;
    }
    
    /**
     *
     * @return bool|null
     */
    final public function getOldIncludedInStatistics()
    {
       if (is_null($this->oldIncludedInStatistics)) {
           /** @psalm-var ?bool $data */
           $data = $this->raw(ReviewStateTransitionMessagePayload::FIELD_OLD_INCLUDED_IN_STATISTICS);
           if (is_null($data)) {
               return null;
           }
           $this->oldIncludedInStatistics = (bool)$data;
       }
       return $this->oldIncludedInStatistics;
    }
    
    /**
     *
     * @return StateReference|null
     */
    final public function getNewState()
    {
       if (is_null($this->newState)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(ReviewStateTransitionMessagePayload::FIELD_NEW_STATE);
           if (is_null($data)) {
               return null;
           }
           
           $this->newState = StateReferenceModel::of($data);
       }
       return $this->newState;
    }
    
    /**
     *
     * @return Reference|null
     */
    final public function getTarget()
    {
       if (is_null($this->target)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(ReviewStateTransitionMessagePayload::FIELD_TARGET);
           if (is_null($data)) {
               return null;
           }
           $className = ReferenceModel::resolveDiscriminatorClass($data);
           $this->target = $className::of($data);
       }
       return $this->target;
    }
    final public function setType(?string $type): void
    {
        $this->type = $type;
    }
    
    final public function setNewIncludedInStatistics(?bool $newIncludedInStatistics): void
    {
        $this->newIncludedInStatistics = $newIncludedInStatistics;
    }
    
    final public function setOldState(?StateReference $oldState): void
    {
        $this->oldState = $oldState;
    }
    
    final public function setForce(?bool $force): void
    {
        $this->force = $force;
    }
    
    final public function setOldIncludedInStatistics(?bool $oldIncludedInStatistics): void
    {
        $this->oldIncludedInStatistics = $oldIncludedInStatistics;
    }
    
    final public function setNewState(?StateReference $newState): void
    {
        $this->newState = $newState;
    }
    
    final public function setTarget(?Reference $target): void
    {
        $this->target = $target;
    }
    
}