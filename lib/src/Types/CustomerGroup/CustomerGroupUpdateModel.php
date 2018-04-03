<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CustomerGroup;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\UpdateModel;

use Commercetools\Types\UpdateActionCollection;
use Commercetools\Types\Update;

class CustomerGroupUpdateModel extends UpdateModel implements CustomerGroupUpdate {
    /**
     * @var CustomerGroupUpdateActionCollection
     */
    protected $actions;

    /**
     * @return CustomerGroupUpdateActionCollection
     */
    public function getActions()
    {
        if (is_null($this->actions)) {
            $value = $this->raw(CustomerGroupUpdate::FIELD_ACTIONS);
            if (is_null($value)) {
                return $this->mapData(CustomerGroupUpdateActionCollection::class, null);
            }
            $value = $this->mapData(CustomerGroupUpdateActionCollection::class, $value);
            $this->actions = $value;
        }
        return $this->actions;
    }

    /**
     * @param CustomerGroupUpdateActionCollection $actions
     * @return $this
     */
    public function setActions(UpdateActionCollection $actions)
    {
        if (!$actions instanceof CustomerGroupUpdateActionCollection) {
            throw new InvalidArgumentException();
        }
        $this->actions = $actions;

        return $this;
    }

}
