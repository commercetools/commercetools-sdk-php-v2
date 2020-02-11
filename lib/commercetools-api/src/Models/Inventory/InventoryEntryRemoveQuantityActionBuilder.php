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
 * @implements Builder<InventoryEntryRemoveQuantityAction>
 */
final class InventoryEntryRemoveQuantityActionBuilder implements Builder
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


    public function build(): InventoryEntryRemoveQuantityAction
    {
        return new InventoryEntryRemoveQuantityActionModel(
            $this->quantity
        );
    }

    public static function of(): InventoryEntryRemoveQuantityActionBuilder
    {
        return new self();
    }
}
