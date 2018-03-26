<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Types\UpdateModel;

use Commercetools\Types\UpdateActionCollection;
use Commercetools\Types\Update;

class OrderUpdateModel extends UpdateModel implements OrderUpdate {
    /**
     * @var OrderUpdateActionCollection
     */
    protected $actions;

    /**
     * @return OrderUpdateActionCollection
     */
    public function getActions()
    {
        if (is_null($this->actions)) {
            $value = $this->raw(OrderUpdate::FIELD_ACTIONS);
            if (is_null($value)) {
                return $this->mapData(OrderUpdateActionCollection::class, null);
            }
            $value = $this->mapData(OrderUpdateActionCollection::class, $value);
            $this->actions = $value;
        }
        return $this->actions;
    }

    /**
     * @param OrderUpdateActionCollection $actions
     * @return $this
     */
    public function setActions(UpdateActionCollection $actions)
    {
        if (!$actions instanceof OrderUpdateActionCollection) {
            throw new \InvalidArgumentException();
        }
        $this->actions = $actions;

        return $this;
    }

}
