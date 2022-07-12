<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Inventory;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

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
     * <p>Value to set for <code>quantityOnStock</code>.</p>
     *

     * @return null|int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param ?int $quantity
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
