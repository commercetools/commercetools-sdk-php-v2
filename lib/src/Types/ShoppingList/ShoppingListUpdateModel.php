<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShoppingList;

use Commercetools\Types\UpdateModel;

use Commercetools\Types\UpdateActionCollection;
use Commercetools\Types\Update;

class ShoppingListUpdateModel extends UpdateModel implements ShoppingListUpdate {
    /**
     * @var ShoppingListUpdateActionCollection
     */
    protected $actions;

    /**
     * @return ShoppingListUpdateActionCollection
     */
    public function getActions()
    {
        if (is_null($this->actions)) {
            $value = $this->raw(ShoppingListUpdate::FIELD_ACTIONS);
            if (is_null($value)) {
                return $this->mapData(ShoppingListUpdateActionCollection::class, null);
            }
            $value = $this->mapData(ShoppingListUpdateActionCollection::class, $value);
            $this->actions = $value;
        }
        return $this->actions;
    }

    /**
     * @param ShoppingListUpdateActionCollection $actions
     * @return $this
     */
    public function setActions(UpdateActionCollection $actions)
    {
        if (!$actions instanceof ShoppingListUpdateActionCollection) {
            throw new \InvalidArgumentException();
        }
        $this->actions = $actions;

        return $this;
    }

}
