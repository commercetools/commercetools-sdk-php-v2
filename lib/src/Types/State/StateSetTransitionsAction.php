<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\State;

interface StateSetTransitionsAction extends StateUpdateAction
{
    const FIELD_TRANSITIONS = 'transitions';

    /**
     * @return StateReferenceCollection
     */
    public function getTransitions();

    /**
     * @param StateReferenceCollection $transitions
     * @return $this
     */
    public function setTransitions(StateReferenceCollection $transitions);

}
