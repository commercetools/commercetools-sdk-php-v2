<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\State;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface StateChangeInitialAction extends StateUpdateAction
{
    public const FIELD_INITIAL = 'initial';

    /**
     * <p>Whether to define the State as the initial State in a state machine and make it the first step in a workflow.</p>
     * <p>If the new value is the same as the current value, an <a href="ctp:api:type:InvalidOperationError">InvalidOperation</a> error is returned.</p>
     *

     * @return null|bool
     */
    public function getInitial();

    /**
     * @param ?bool $initial
     */
    public function setInitial(?bool $initial): void;
}
