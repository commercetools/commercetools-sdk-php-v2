<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Inventory;

use Commercetools\Base\JsonObject;

interface InventoryEntryAddQuantityAction extends InventoryEntryUpdateAction
{
    
    const FIELD_QUANTITY = 'quantity';

    /**
     *
     * @return int|null
     */
    public function getQuantity();
    public function setQuantity(?int $quantity): void;
}