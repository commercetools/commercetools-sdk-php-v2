<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Inventory;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface InventoryEntrySetInventoryLimitsAction extends InventoryEntryUpdateAction
{
    public const FIELD_MIN_CART_QUANTITY = 'minCartQuantity';
    public const FIELD_MAX_CART_QUANTITY = 'maxCartQuantity';

    /**
     * <p>Sets the minimum quantity that can be added to a Cart. If the value is absent or <code>null</code>
     * the inventory limit is removed.</p>
     *

     * @return null|int
     */
    public function getMinCartQuantity();

    /**
     * <p>Sets the maximum quantity that can be added to a Cart. If the value is absent or <code>null</code>
     * the inventory limit is removed.</p>
     *

     * @return null|int
     */
    public function getMaxCartQuantity();

    /**
     * @param ?int $minCartQuantity
     */
    public function setMinCartQuantity(?int $minCartQuantity): void;

    /**
     * @param ?int $maxCartQuantity
     */
    public function setMaxCartQuantity(?int $maxCartQuantity): void;
}
