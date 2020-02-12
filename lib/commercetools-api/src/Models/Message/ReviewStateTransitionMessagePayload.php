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

interface ReviewStateTransitionMessagePayload extends MessagePayload
{
    public const FIELD_OLD_STATE = 'oldState';
    public const FIELD_NEW_STATE = 'newState';
    public const FIELD_OLD_INCLUDED_IN_STATISTICS = 'oldIncludedInStatistics';
    public const FIELD_NEW_INCLUDED_IN_STATISTICS = 'newIncludedInStatistics';
    public const FIELD_TARGET = 'target';
    public const FIELD_FORCE = 'force';

    /**
     * @return null|StateReference
     */
    public function getOldState();

    /**
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
     * @return null|Reference
     */
    public function getTarget();

    /**
     * @return null|bool
     */
    public function getForce();

    public function setOldState(?StateReference $oldState): void;

    public function setNewState(?StateReference $newState): void;

    public function setOldIncludedInStatistics(?bool $oldIncludedInStatistics): void;

    public function setNewIncludedInStatistics(?bool $newIncludedInStatistics): void;

    public function setTarget(?Reference $target): void;

    public function setForce(?bool $force): void;
}
