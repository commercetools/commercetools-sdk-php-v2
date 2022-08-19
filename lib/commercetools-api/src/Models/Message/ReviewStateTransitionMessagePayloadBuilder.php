<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Common\Reference;
use Commercetools\Api\Models\Common\ReferenceBuilder;
use Commercetools\Api\Models\State\StateReference;
use Commercetools\Api\Models\State\StateReferenceBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ReviewStateTransitionMessagePayload>
 */
final class ReviewStateTransitionMessagePayloadBuilder implements Builder
{
    /**

     * @var null|StateReference|StateReferenceBuilder
     */
    private $oldState;

    /**

     * @var null|StateReference|StateReferenceBuilder
     */
    private $newState;

    /**

     * @var ?bool
     */
    private $oldIncludedInStatistics;

    /**

     * @var ?bool
     */
    private $newIncludedInStatistics;

    /**

     * @var null|Reference|ReferenceBuilder
     */
    private $target;

    /**

     * @var ?bool
     */
    private $force;

    /**
     * <p><a href="ctp:api:type:State">State</a> of the <a href="ctp:api:type:Review">Review</a> before the <a href="ctp:api:type:ReviewTransitionStateAction">Transition State</a> update action.</p>
     *

     * @return null|StateReference
     */
    public function getOldState()
    {
        return $this->oldState instanceof StateReferenceBuilder ? $this->oldState->build() : $this->oldState;
    }

    /**
     * <p><a href="ctp:api:type:State">State</a> of the <a href="ctp:api:type:Review">Review</a> after the <a href="ctp:api:type:ReviewTransitionStateAction">Transition State</a> update action.</p>
     *

     * @return null|StateReference
     */
    public function getNewState()
    {
        return $this->newState instanceof StateReferenceBuilder ? $this->newState->build() : $this->newState;
    }

    /**
     * <p>Whether the old <a href="ctp:api:type:Review">Review</a> was taken into account in the rating statistics of the target before the state transition.</p>
     *

     * @return null|bool
     */
    public function getOldIncludedInStatistics()
    {
        return $this->oldIncludedInStatistics;
    }

    /**
     * <p>Whether the new <a href="ctp:api:type:Review">Review</a> was taken into account in the rating statistics of the target after the state transition.</p>
     *

     * @return null|bool
     */
    public function getNewIncludedInStatistics()
    {
        return $this->newIncludedInStatistics;
    }

    /**
     * <p><a href="ctp:api:type:Reference">Reference</a> to the resource that the <a href="ctp:api:type:Review">Review</a> belongs to.</p>
     *

     * @return null|Reference
     */
    public function getTarget()
    {
        return $this->target instanceof ReferenceBuilder ? $this->target->build() : $this->target;
    }

    /**
     * <p>Whether <a href="ctp:api:type:State">State</a> transition validations were turned off during the <a href="ctp:api:type:ReviewTransitionStateAction">Transition State</a> update action.</p>
     *

     * @return null|bool
     */
    public function getForce()
    {
        return $this->force;
    }

    /**
     * @param ?StateReference $oldState
     * @return $this
     */
    public function withOldState(?StateReference $oldState)
    {
        $this->oldState = $oldState;

        return $this;
    }

    /**
     * @param ?StateReference $newState
     * @return $this
     */
    public function withNewState(?StateReference $newState)
    {
        $this->newState = $newState;

        return $this;
    }

    /**
     * @param ?bool $oldIncludedInStatistics
     * @return $this
     */
    public function withOldIncludedInStatistics(?bool $oldIncludedInStatistics)
    {
        $this->oldIncludedInStatistics = $oldIncludedInStatistics;

        return $this;
    }

    /**
     * @param ?bool $newIncludedInStatistics
     * @return $this
     */
    public function withNewIncludedInStatistics(?bool $newIncludedInStatistics)
    {
        $this->newIncludedInStatistics = $newIncludedInStatistics;

        return $this;
    }

    /**
     * @param ?Reference $target
     * @return $this
     */
    public function withTarget(?Reference $target)
    {
        $this->target = $target;

        return $this;
    }

    /**
     * @param ?bool $force
     * @return $this
     */
    public function withForce(?bool $force)
    {
        $this->force = $force;

        return $this;
    }

    /**
     * @deprecated use withOldState() instead
     * @return $this
     */
    public function withOldStateBuilder(?StateReferenceBuilder $oldState)
    {
        $this->oldState = $oldState;

        return $this;
    }

    /**
     * @deprecated use withNewState() instead
     * @return $this
     */
    public function withNewStateBuilder(?StateReferenceBuilder $newState)
    {
        $this->newState = $newState;

        return $this;
    }

    /**
     * @deprecated use withTarget() instead
     * @return $this
     */
    public function withTargetBuilder(?ReferenceBuilder $target)
    {
        $this->target = $target;

        return $this;
    }

    public function build(): ReviewStateTransitionMessagePayload
    {
        return new ReviewStateTransitionMessagePayloadModel(
            $this->oldState instanceof StateReferenceBuilder ? $this->oldState->build() : $this->oldState,
            $this->newState instanceof StateReferenceBuilder ? $this->newState->build() : $this->newState,
            $this->oldIncludedInStatistics,
            $this->newIncludedInStatistics,
            $this->target instanceof ReferenceBuilder ? $this->target->build() : $this->target,
            $this->force
        );
    }

    public static function of(): ReviewStateTransitionMessagePayloadBuilder
    {
        return new self();
    }
}
