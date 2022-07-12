<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Inventory;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface InventoryEntryAddQuantityAction extends InventoryEntryUpdateAction
{
    public const FIELD_QUANTITY = 'quantity';

    /**
     * <p>Value to add to <code>quantityOnStock</code>.</p>
     *

     * @return null|int
     */
    public function getQuantity();

    /**
     * @param ?int $quantity
     */
    public function setQuantity(?int $quantity): void;
}
