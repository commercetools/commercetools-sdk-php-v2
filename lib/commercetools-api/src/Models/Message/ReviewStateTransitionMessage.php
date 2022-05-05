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
     * <p><a href="/../api/types#reference">Reference</a> to a <a href="ctp:api:type:State">State</a>.</p>
     *
     * @return null|StateReference
     */
    public function getOldState();

    /**
     * <p><a href="/../api/types#reference">Reference</a> to a <a href="ctp:api:type:State">State</a>.</p>
     *
     * @return null|StateReference
     */
    public function getNewState();

    /**
     * @return null|bool
     */
    public function getOldIncludedInStatistics();

    /**
     * @return null|bool
     */
    public function getNewIncludedInStatistics();

    /**
     * <p>A Reference represents a loose reference to another resource in the same commercetools Project identified by its <code>id</code>. The <code>typeId</code> indicates the type of the referenced resource. Each resource type has its corresponding Reference type, like <a href="ctp:api:type:ChannelReference">ChannelReference</a>.  A referenced resource can be embedded through <a href="/general-concepts#reference-expansion">Reference Expansion</a>. The expanded reference is the value of an additional <code>obj</code> field then.</p>
     *
     * @return null|Reference
     */
    public function getTarget();

    /**
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
