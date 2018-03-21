<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Customer;

use Commercetools\Types\UpdateModel;

use Commercetools\Types\UpdateActionCollection;
use Commercetools\Types\Update;

class CustomerUpdateModel extends UpdateModel implements CustomerUpdate {
    /**
     * @var CustomerUpdateActionCollection
     */
    protected $actions;

    /**
     * @return CustomerUpdateActionCollection
     */
    public function getActions()
    {
        if (is_null($this->actions)) {
            $value = $this->raw(CustomerUpdate::FIELD_ACTIONS);
            if (is_null($value)) {
                return $this->mapData(CustomerUpdateActionCollection::class, null);
            }
            $value = $this->mapData(CustomerUpdateActionCollection::class, $value);
            $this->actions = $value;
        }
        return $this->actions;
    }

    /**
     * @param UpdateActionCollection $actions
     * @return $this
     */
    public function setActions(UpdateActionCollection $actions)
    {
        $this->actions = $actions;

        return $this;
    }

}
