<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Inventory;

interface InventoryAddQuantityAction extends InventoryEntryUpdateAction {
    const FIELD_QUANTITY = 'quantity';

    /**
     * @return int
     */
    public function getQuantity();

    /**
     * @param int $quantity
     * @return $this
     */
    public function setQuantity(int $quantity);

}
