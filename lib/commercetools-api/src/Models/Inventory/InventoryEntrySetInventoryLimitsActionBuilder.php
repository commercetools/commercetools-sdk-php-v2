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
 * @implements Builder<InventoryEntrySetInventoryLimitsAction>
 */
final class InventoryEntrySetInventoryLimitsActionBuilder implements Builder
{
    /**

     * @var ?int
     */
    private $minCartQuantity;

    /**

     * @var ?int
     */
    private $maxCartQuantity;

    /**
     * <p>Sets the minimum quantity that can be added to a Cart. If the value is absent or <code>null</code>
     * the inventory limit is removed.</p>
     *

     * @return null|int
     */
    public function getMinCartQuantity()
    {
        return $this->minCartQuantity;
    }

    /**
     * <p>Sets the maximum quantity that can be added to a Cart. If the value is absent or <code>null</code>
     * the inventory limit is removed.</p>
     *

     * @return null|int
     */
    public function getMaxCartQuantity()
    {
        return $this->maxCartQuantity;
    }

    /**
     * @param ?int $minCartQuantity
     * @return $this
     */
    public function withMinCartQuantity(?int $minCartQuantity)
    {
        $this->minCartQuantity = $minCartQuantity;

        return $this;
    }

    /**
     * @param ?int $maxCartQuantity
     * @return $this
     */
    public function withMaxCartQuantity(?int $maxCartQuantity)
    {
        $this->maxCartQuantity = $maxCartQuantity;

        return $this;
    }


    public function build(): InventoryEntrySetInventoryLimitsAction
    {
        return new InventoryEntrySetInventoryLimitsActionModel(
            $this->minCartQuantity,
            $this->maxCartQuantity
        );
    }

    public static function of(): InventoryEntrySetInventoryLimitsActionBuilder
    {
        return new self();
    }
}
