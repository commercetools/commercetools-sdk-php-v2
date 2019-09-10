<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\State;

interface StateSetTransitionsAction extends StateUpdateAction
{
    const FIELD_TRANSITIONS = 'transitions';

    /**
     * @return null|StateResourceIdentifierCollection
     */
    public function getTransitions();

    public function setTransitions(?StateResourceIdentifierCollection $transitions): void;
}
