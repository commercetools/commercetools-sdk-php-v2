<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Zone;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\UpdateModel;

use Commercetools\Types\UpdateActionCollection;
use Commercetools\Types\Update;

class ZoneUpdateModel extends UpdateModel implements ZoneUpdate {
    /**
     * @var ZoneUpdateActionCollection
     */
    protected $actions;

    /**
     * @return ZoneUpdateActionCollection
     */
    public function getActions()
    {
        if (is_null($this->actions)) {
            $value = $this->raw(ZoneUpdate::FIELD_ACTIONS);
            if (is_null($value)) {
                return $this->mapData(ZoneUpdateActionCollection::class, null);
            }
            $value = $this->mapData(ZoneUpdateActionCollection::class, $value);
            $this->actions = $value;
        }
        return $this->actions;
    }

    /**
     * @param ZoneUpdateActionCollection $actions
     * @return $this
     */
    public function setActions(UpdateActionCollection $actions)
    {
        if (!$actions instanceof ZoneUpdateActionCollection) {
            throw new InvalidArgumentException();
        }
        $this->actions = $actions;

        return $this;
    }

}
