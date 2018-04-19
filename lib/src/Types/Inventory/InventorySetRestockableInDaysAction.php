<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Inventory;

interface InventorySetRestockableInDaysAction extends InventoryEntryUpdateAction
{
    const FIELD_RESTOCKABLE_IN_DAYS = 'restockableInDays';

    /**
     * @return int
     */
    public function getRestockableInDays();

    /**
     * @param int $restockableInDays
     * @return $this
     */
    public function setRestockableInDays(int $restockableInDays);

}
