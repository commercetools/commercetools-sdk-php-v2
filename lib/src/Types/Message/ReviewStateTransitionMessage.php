<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\State\StateReference;
use Commercetools\Types\Common\Reference;

interface ReviewStateTransitionMessage extends Message
{
    const FIELD_OLD_STATE = 'oldState';
    const FIELD_NEW_STATE = 'newState';
    const FIELD_OLD_INCLUDED_IN_STATISTICS = 'oldIncludedInStatistics';
    const FIELD_NEW_INCLUDED_IN_STATISTICS = 'newIncludedInStatistics';
    const FIELD_TARGET = 'target';
    const FIELD_FORCE = 'force';

    /**
     * @return StateReference
     */
    public function getOldState();

    /**
     * @return StateReference
     */
    public function getNewState();

    /**
     * @return mixed
     */
    public function getOldIncludedInStatistics();

    /**
     * @return mixed
     */
    public function getNewIncludedInStatistics();

    /**
     * @return Reference
     */
    public function getTarget();

    /**
     * @return mixed
     */
    public function getForce();

    /**
     * @param StateReference $oldState
     * @return $this
     */
    public function setOldState(StateReference $oldState);

    /**
     * @param StateReference $newState
     * @return $this
     */
    public function setNewState(StateReference $newState);

    /**
     * @param mixed $oldIncludedInStatistics
     * @return $this
     */
    public function setOldIncludedInStatistics($oldIncludedInStatistics);

    /**
     * @param mixed $newIncludedInStatistics
     * @return $this
     */
    public function setNewIncludedInStatistics($newIncludedInStatistics);

    /**
     * @param Reference $target
     * @return $this
     */
    public function setTarget(Reference $target);

    /**
     * @param mixed $force
     * @return $this
     */
    public function setForce($force);

}
