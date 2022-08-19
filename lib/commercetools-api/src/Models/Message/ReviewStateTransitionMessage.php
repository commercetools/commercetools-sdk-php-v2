<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Common\Reference;
use Commercetools\Api\Models\State\StateReference;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ReviewStateTransitionMessage extends Message
{
    public const FIELD_OLD_STATE = 'oldState';
    public const FIELD_NEW_STATE = 'newState';
    public const FIELD_OLD_INCLUDED_IN_STATISTICS = 'oldIncludedInStatistics';
    public const FIELD_NEW_INCLUDED_IN_STATISTICS = 'newIncludedInStatistics';
    public const FIELD_TARGET = 'target';
    public const FIELD_FORCE = 'force';

    /**
     * <p><a href="ctp:api:type:State">State</a> of the <a href="ctp:api:type:Review">Review</a> before the <a href="ctp:api:type:ReviewTransitionStateAction">Transition State</a> update action.</p>
     *

     * @return null|StateReference
     */
    public function getOldState();

    /**
     * <p><a href="ctp:api:type:State">State</a> of the <a href="ctp:api:type:Review">Review</a> after the <a href="ctp:api:type:ReviewTransitionStateAction">Transition State</a> update action.</p>
     *

     * @return null|StateReference
     */
    public function getNewState();

    /**
     * <p>Whether the old <a href="ctp:api:type:Review">Review</a> was taken into account in the rating statistics of the target before the state transition.</p>
     *

     * @return null|bool
     */
    public function getOldIncludedInStatistics();

    /**
     * <p>Whether the new <a href="ctp:api:type:Review">Review</a> was taken into account in the rating statistics of the target after the state transition.</p>
     *

     * @return null|bool
     */
    public function getNewIncludedInStatistics();

    /**
     * <p><a href="ctp:api:type:Reference">Reference</a> to the resource that the <a href="ctp:api:type:Review">Review</a> belongs to.</p>
     *

     * @return null|Reference
     */
    public function getTarget();

    /**
     * <p>Whether <a href="ctp:api:type:State">State</a> transition validations were turned off during the <a href="ctp:api:type:ReviewTransitionStateAction">Transition State</a> update action.</p>
     *

     * @return null|bool
     */
    public function getForce();

    /**
     * @param ?StateReference $oldState
     */
    public function setOldState(?StateReference $oldState): void;

    /**
     * @param ?StateReference $newState
     */
    public function setNewState(?StateReference $newState): void;

    /**
     * @param ?bool $oldIncludedInStatistics
     */
    public function setOldIncludedInStatistics(?bool $oldIncludedInStatistics): void;

    /**
     * @param ?bool $newIncludedInStatistics
     */
    public function setNewIncludedInStatistics(?bool $newIncludedInStatistics): void;

    /**
     * @param ?Reference $target
     */
    public function setTarget(?Reference $target): void;

    /**
     * @param ?bool $force
     */
    public function setForce(?bool $force): void;
}
