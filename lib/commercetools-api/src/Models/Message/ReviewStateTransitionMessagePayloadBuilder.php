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

/**
 * @implements Builder<ReviewStateTransitionMessagePayload>
 */
final class ReviewStateTransitionMessagePayloadBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $type;

    /**
     * @var ?bool
     */
    private $newIncludedInStatistics;

    /**
     * @var StateReference|?StateReferenceBuilder
     */
    private $oldState;

    /**
     * @var ?bool
     */
    private $force;

    /**
     * @var ?bool
     */
    private $oldIncludedInStatistics;

    /**
     * @var StateReference|?StateReferenceBuilder
     */
    private $newState;

    /**
     * @var Reference|?ReferenceBuilder
     */
    private $target;

    public function __construct()
    {
    }

    /**
     * @return null|string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return null|bool
     */
    public function getNewIncludedInStatistics()
    {
        return $this->newIncludedInStatistics;
    }

    /**
     * @return null|StateReference
     */
    public function getOldState()
    {
        return $this->oldState instanceof StateReferenceBuilder ? $this->oldState->build() : $this->oldState;
    }

    /**
     * @return null|bool
     */
    public function getForce()
    {
        return $this->force;
    }

    /**
     * @return null|bool
     */
    public function getOldIncludedInStatistics()
    {
        return $this->oldIncludedInStatistics;
    }

    /**
     * @return null|StateReference
     */
    public function getNewState()
    {
        return $this->newState instanceof StateReferenceBuilder ? $this->newState->build() : $this->newState;
    }

    /**
     * @return null|Reference
     */
    public function getTarget()
    {
        return $this->target instanceof ReferenceBuilder ? $this->target->build() : $this->target;
    }

    /**
     * @return $this
     */
    public function withType(?string $type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return $this
     */
    public function withNewIncludedInStatistics(?bool $newIncludedInStatistics)
    {
        $this->newIncludedInStatistics = $newIncludedInStatistics;

        return $this;
    }

    /**
     * @return $this
     */
    public function withOldState(?StateReference $oldState)
    {
        $this->oldState = $oldState;

        return $this;
    }

    /**
     * @return $this
     */
    public function withForce(?bool $force)
    {
        $this->force = $force;

        return $this;
    }

    /**
     * @return $this
     */
    public function withOldIncludedInStatistics(?bool $oldIncludedInStatistics)
    {
        $this->oldIncludedInStatistics = $oldIncludedInStatistics;

        return $this;
    }

    /**
     * @return $this
     */
    public function withNewState(?StateReference $newState)
    {
        $this->newState = $newState;

        return $this;
    }

    /**
     * @return $this
     */
    public function withTarget(?Reference $target)
    {
        $this->target = $target;

        return $this;
    }

    /**
     * @return $this
     */
    public function withOldStateBuilder(?StateReferenceBuilder $oldState)
    {
        $this->oldState = $oldState;

        return $this;
    }

    /**
     * @return $this
     */
    public function withNewStateBuilder(?StateReferenceBuilder $newState)
    {
        $this->newState = $newState;

        return $this;
    }

    /**
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
