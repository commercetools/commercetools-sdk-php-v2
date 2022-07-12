<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\State;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface StateSetTransitionsAction extends StateUpdateAction
{
    public const FIELD_TRANSITIONS = 'transitions';

    /**
     * <p>Value to set.
     * If empty, any existing value will be removed.</p>
     * <p>Possible transformations of the current State to other States of the same <code>type</code> (for example, <em>Initial</em> -&gt; <em>Shipped</em>).
     * When performing a <code>transitionState</code> update action and <code>transitions</code> is set, the currently referenced State must have a transition to the new State.</p>
     * <p>If <code>transitions</code> is an empty list, it means the current State is a final State and no further transitions are allowed.
     * If <code>transitions</code> is not set, the validation is turned off.</p>
     * <p>When performing a <code>transitionState</code> update action, any other State of the same <code>type</code> can be transitioned to.</p>
     *

     * @return null|StateResourceIdentifierCollection
     */
    public function getTransitions();

    /**
     * @param ?StateResourceIdentifierCollection $transitions
     */
    public function setTransitions(?StateResourceIdentifierCollection $transitions): void;
}
