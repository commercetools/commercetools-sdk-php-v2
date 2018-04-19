<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Message\MessageModel;

use Commercetools\Types\State\StateReference;
use Commercetools\Types\Common\Reference;

class ReviewStateTransitionMessageModel extends MessageModel implements ReviewStateTransitionMessage
{
    const DISCRIMINATOR_VALUE = 'ReviewStateTransition';

    /**
     * @var StateReference
     */
    protected $oldState;
    /**
     * @var StateReference
     */
    protected $newState;
    /**
     * @var mixed
     */
    protected $oldIncludedInStatistics;
    /**
     * @var mixed
     */
    protected $newIncludedInStatistics;
    /**
     * @var Reference
     */
    protected $target;
    /**
     * @var mixed
     */
    protected $force;

    /**
     * @return StateReference
     */
    public function getOldState()
    {
        if (is_null($this->oldState)) {
            $value = $this->raw(ReviewStateTransitionMessage::FIELD_OLD_STATE);
            if (is_null($value)) {
                return $this->mapData(StateReference::class, null);
            }
            $value = $this->mapData(StateReference::class, $value);

            $this->oldState = $value;
        }
        return $this->oldState;
    }
    /**
     * @return StateReference
     */
    public function getNewState()
    {
        if (is_null($this->newState)) {
            $value = $this->raw(ReviewStateTransitionMessage::FIELD_NEW_STATE);
            if (is_null($value)) {
                return $this->mapData(StateReference::class, null);
            }
            $value = $this->mapData(StateReference::class, $value);

            $this->newState = $value;
        }
        return $this->newState;
    }
    /**
     * @return mixed
     */
    public function getOldIncludedInStatistics()
    {
        if (is_null($this->oldIncludedInStatistics)) {
            $value = $this->raw(ReviewStateTransitionMessage::FIELD_OLD_INCLUDED_IN_STATISTICS);
            $this->oldIncludedInStatistics = $value;
        }
        return $this->oldIncludedInStatistics;
    }
    /**
     * @return mixed
     */
    public function getNewIncludedInStatistics()
    {
        if (is_null($this->newIncludedInStatistics)) {
            $value = $this->raw(ReviewStateTransitionMessage::FIELD_NEW_INCLUDED_IN_STATISTICS);
            $this->newIncludedInStatistics = $value;
        }
        return $this->newIncludedInStatistics;
    }
    /**
     * @return Reference
     */
    public function getTarget()
    {
        if (is_null($this->target)) {
            $value = $this->raw(ReviewStateTransitionMessage::FIELD_TARGET);
            $resolvedClass = $this->resolveDiscriminator(Reference::class, $value);
            if (is_null($value)) {
                return $this->mapData($resolvedClass, null);
            }
            $value = $this->mapData($resolvedClass, $value);

            $this->target = $value;
        }
        return $this->target;
    }
    /**
     * @return mixed
     */
    public function getForce()
    {
        if (is_null($this->force)) {
            $value = $this->raw(ReviewStateTransitionMessage::FIELD_FORCE);
            $this->force = $value;
        }
        return $this->force;
    }

    /**
     * @param StateReference $oldState
     * @return $this
     */
    public function setOldState(StateReference $oldState)
    {
        $this->oldState = $oldState;

        return $this;
    }
    /**
     * @param StateReference $newState
     * @return $this
     */
    public function setNewState(StateReference $newState)
    {
        $this->newState = $newState;

        return $this;
    }
    /**
     * @param $oldIncludedInStatistics
     * @return $this
     */
    public function setOldIncludedInStatistics($oldIncludedInStatistics)
    {
        $this->oldIncludedInStatistics = $oldIncludedInStatistics;

        return $this;
    }
    /**
     * @param $newIncludedInStatistics
     * @return $this
     */
    public function setNewIncludedInStatistics($newIncludedInStatistics)
    {
        $this->newIncludedInStatistics = $newIncludedInStatistics;

        return $this;
    }
    /**
     * @param Reference $target
     * @return $this
     */
    public function setTarget(Reference $target)
    {
        $this->target = $target;

        return $this;
    }
    /**
     * @param $force
     * @return $this
     */
    public function setForce($force)
    {
        $this->force = $force;

        return $this;
    }

}
