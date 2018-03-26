<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Inventory;

use Commercetools\Types\UpdateModel;

use Commercetools\Types\UpdateActionCollection;
use Commercetools\Types\Update;

class InventoryEntryUpdateModel extends UpdateModel implements InventoryEntryUpdate {
    /**
     * @var InventoryEntryUpdateActionCollection
     */
    protected $actions;

    /**
     * @return InventoryEntryUpdateActionCollection
     */
    public function getActions()
    {
        if (is_null($this->actions)) {
            $value = $this->raw(InventoryEntryUpdate::FIELD_ACTIONS);
            if (is_null($value)) {
                return $this->mapData(InventoryEntryUpdateActionCollection::class, null);
            }
            $value = $this->mapData(InventoryEntryUpdateActionCollection::class, $value);
            $this->actions = $value;
        }
        return $this->actions;
    }

    /**
     * @param InventoryEntryUpdateActionCollection $actions
     * @return $this
     */
    public function setActions(UpdateActionCollection $actions)
    {
        if (!$actions instanceof InventoryEntryUpdateActionCollection) {
            throw new \InvalidArgumentException();
        }
        $this->actions = $actions;

        return $this;
    }

}
