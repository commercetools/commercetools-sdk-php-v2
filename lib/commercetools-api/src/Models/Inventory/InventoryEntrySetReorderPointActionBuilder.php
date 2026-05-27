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
 * @implements Builder<InventoryEntrySetReorderPointAction>
 */
final class InventoryEntrySetReorderPointActionBuilder implements Builder
{
    /**

     * @var ?int
     */
    private $quantity;

    /**
     * <p>Sets the configured inventory stock level for reorder point. If the value is absent or <code>null</code>
     * the configured inventory stock level is removed.</p>
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


    public function build(): InventoryEntrySetReorderPointAction
    {
        return new InventoryEntrySetReorderPointActionModel(
            $this->quantity
        );
    }

    public static function of(): InventoryEntrySetReorderPointActionBuilder
    {
        return new self();
    }
}
