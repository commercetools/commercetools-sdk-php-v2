<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<CartSetLineItemInventoryModeAction>
 */
final class CartSetLineItemInventoryModeActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $lineItemId;

    /**

     * @var ?string
     */
    private $inventoryMode;

    /**
     * <p><code>id</code> of the <a href="ctp:api:type:LineItem">LineItem</a> to update.</p>
     *

     * @return null|string
     */
    public function getLineItemId()
    {
        return $this->lineItemId;
    }

    /**
     * <p>Inventory mode specific to the Line Item only, and valid for the entire <code>quantity</code> of the Line Item.
     * Set only if the inventory mode should be different from the <code>inventoryMode</code> specified on the <a href="ctp:api:type:Cart">Cart</a>.</p>
     *

     * @return null|string
     */
    public function getInventoryMode()
    {
        return $this->inventoryMode;
    }

    /**
     * @param ?string $lineItemId
     * @return $this
     */
    public function withLineItemId(?string $lineItemId)
    {
        $this->lineItemId = $lineItemId;

        return $this;
    }

    /**
     * @param ?string $inventoryMode
     * @return $this
     */
    public function withInventoryMode(?string $inventoryMode)
    {
        $this->inventoryMode = $inventoryMode;

        return $this;
    }


    public function build(): CartSetLineItemInventoryModeAction
    {
        return new CartSetLineItemInventoryModeActionModel(
            $this->lineItemId,
            $this->inventoryMode
        );
    }

    public static function of(): CartSetLineItemInventoryModeActionBuilder
    {
        return new self();
    }
}
