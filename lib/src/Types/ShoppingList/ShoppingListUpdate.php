<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShoppingList;

use Commercetools\Types\UpdateActionCollection;
use Commercetools\Types\Update;

interface ShoppingListUpdate extends Update {
    /**
     * @return ShoppingListUpdateActionCollection
     */
    public function getActions();

    /**
     * @param ShoppingListUpdateActionCollection $actions
     * @return $this
     */
    public function setActions(UpdateActionCollection $actions);

}
