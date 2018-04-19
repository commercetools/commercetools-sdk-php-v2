<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\State;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\UpdateModel;

use Commercetools\Types\UpdateActionCollection;
use Commercetools\Types\Update;

class StateUpdateModel extends UpdateModel implements StateUpdate
{
    /**
     * @var StateUpdateActionCollection
     */
    protected $actions;

    /**
     * @return StateUpdateActionCollection
     */
    public function getActions()
    {
        if (is_null($this->actions)) {
            $value = $this->raw(StateUpdate::FIELD_ACTIONS);
            if (is_null($value)) {
                return $this->mapData(StateUpdateActionCollection::class, null);
            }
            $value = $this->mapData(StateUpdateActionCollection::class, $value);
            $this->actions = $value;
        }
        return $this->actions;
    }

    /**
     * @param StateUpdateActionCollection $actions
     * @return $this
     */
    public function setActions(UpdateActionCollection $actions)
    {
        if (!$actions instanceof StateUpdateActionCollection) {
            throw new InvalidArgumentException();
        }
        $this->actions = $actions;

        return $this;
    }

}
