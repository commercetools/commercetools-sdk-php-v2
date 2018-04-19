<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\State;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\State\StateUpdateActionModel;

class StateSetTransitionsActionModel extends StateUpdateActionModel implements StateSetTransitionsAction
{
    const DISCRIMINATOR_VALUE = 'setTransitions';

    /**
     * @var StateReferenceCollection
     */
    protected $transitions;

    /**
     * @return StateReferenceCollection
     */
    public function getTransitions()
    {
        if (is_null($this->transitions)) {
            $value = $this->raw(StateSetTransitionsAction::FIELD_TRANSITIONS);
            if (is_null($value)) {
                return $this->mapData(StateReferenceCollection::class, null);
            }
            $value = $this->mapData(StateReferenceCollection::class, $value);
            $this->transitions = $value;
        }
        return $this->transitions;
    }

    /**
     * @param StateReferenceCollection $transitions
     * @return $this
     */
    public function setTransitions(StateReferenceCollection $transitions)
    {
        $this->transitions = $transitions;

        return $this;
    }

}
