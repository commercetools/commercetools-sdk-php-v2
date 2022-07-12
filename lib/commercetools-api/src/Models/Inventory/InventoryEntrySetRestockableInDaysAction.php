<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Inventory;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface InventoryEntrySetRestockableInDaysAction extends InventoryEntryUpdateAction
{
    public const FIELD_RESTOCKABLE_IN_DAYS = 'restockableInDays';

    /**
     * <p>Value to set. If empty, any existing value will be removed.</p>
     *

     * @return null|int
     */
    public function getRestockableInDays();

    /**
     * @param ?int $restockableInDays
     */
    public function setRestockableInDays(?int $restockableInDays): void;
}
