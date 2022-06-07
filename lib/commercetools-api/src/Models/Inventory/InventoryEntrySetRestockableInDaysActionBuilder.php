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
 * @implements Builder<InventoryEntrySetRestockableInDaysAction>
 */
final class InventoryEntrySetRestockableInDaysActionBuilder implements Builder
{
    /**
     * @var ?int
     */
    private $restockableInDays;

    /**
     * <p>Value to set. If empty, any existing value will be removed.</p>
     *
     * @return null|int
     */
    public function getRestockableInDays()
    {
        return $this->restockableInDays;
    }

    /**
     * @param ?int $restockableInDays
     * @return $this
     */
    public function withRestockableInDays(?int $restockableInDays)
    {
        $this->restockableInDays = $restockableInDays;

        return $this;
    }


    public function build(): InventoryEntrySetRestockableInDaysAction
    {
        return new InventoryEntrySetRestockableInDaysActionModel(
            $this->restockableInDays
        );
    }

    public static function of(): InventoryEntrySetRestockableInDaysActionBuilder
    {
        return new self();
    }
}
