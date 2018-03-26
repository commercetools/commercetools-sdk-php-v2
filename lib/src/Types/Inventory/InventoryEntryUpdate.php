<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Inventory;

use Commercetools\Types\UpdateActionCollection;
use Commercetools\Types\Update;

interface InventoryEntryUpdate extends Update {
    /**
     * @return InventoryEntryUpdateActionCollection
     */
    public function getActions();

    /**
     * @param InventoryEntryUpdateActionCollection $actions
     * @return $this
     */
    public function setActions(UpdateActionCollection $actions);

}
