<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Inventory;

use Commercetools\Base\Builder;

/**
 * @implements Builder<InventoryEntryChangeQuantityAction>
 */
final class InventoryEntryChangeQuantityActionBuilder implements Builder
{
    /**
     * @var ?int
     */
    private $quantity;

    /**
     * @return null|int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @return $this
     */
    public function withQuantity(?int $quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    public function build(): InventoryEntryChangeQuantityAction
    {
        return new InventoryEntryChangeQuantityActionModel(
            $this->quantity
        );
    }

    public static function of(): InventoryEntryChangeQuantityActionBuilder
    {
        return new self();
    }
}
