<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CartSetLineItemInventoryModeAction extends CartUpdateAction
{
    public const FIELD_LINE_ITEM_ID = 'lineItemId';
    public const FIELD_INVENTORY_MODE = 'inventoryMode';

    /**
     * <p><code>id</code> of the <a href="ctp:api:type:LineItem">LineItem</a> to update.</p>
     *

     * @return null|string
     */
    public function getLineItemId();

    /**
     * <p>Inventory mode specific to the Line Item only, and valid for the entire <code>quantity</code> of the Line Item.
     * Set only if the inventory mode should be different from the <code>inventoryMode</code> specified on the <a href="ctp:api:type:Cart">Cart</a>.</p>
     *

     * @return null|string
     */
    public function getInventoryMode();

    /**
     * @param ?string $lineItemId
     */
    public function setLineItemId(?string $lineItemId): void;

    /**
     * @param ?string $inventoryMode
     */
    public function setInventoryMode(?string $inventoryMode): void;
}
