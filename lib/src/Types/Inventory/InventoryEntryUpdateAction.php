<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Inventory;

use Commercetools\Types\UpdateAction;
use Commercetools\Types;

interface InventoryEntryUpdateAction extends UpdateAction {
    const DISCRIMINATOR = 'action';
    const SUB_TYPES = [
        'addQuantity' => Types\Inventory\InventoryAddQuantityAction::class,
        'changeQuantity' => Types\Inventory\InventoryChangeQuantityAction::class,
        'removeQuantity' => Types\Inventory\InventoryRemoveQuantityAction::class,
        'setCustomField' => Types\Inventory\InventorySetCustomFieldAction::class,
        'setCustomType' => Types\Inventory\InventorySetCustomTypeAction::class,
        'setExpectedDelivery' => Types\Inventory\InventorySetExpectedDeliveryAction::class,
        'setRestockableInDays' => Types\Inventory\InventorySetRestockableInDaysAction::class,
        'setSupplyChannel' => Types\Inventory\InventorySetSupplyChannelAction::class,

    ];

}
