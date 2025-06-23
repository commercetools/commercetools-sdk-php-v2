<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\DiscountGroup;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface DiscountGroupSetSortOrderAction extends DiscountGroupUpdateAction
{
    public const FIELD_SORT_ORDER = 'sortOrder';

    /**
     * <p>New value to set (between <code>0</code> and <code>1</code>).
     * A CartDiscount with a higher value will be prioritized.</p>
     * <p>The sort order must be unique among all DiscountGroups and CartDiscounts.</p>
     *

     * @return null|string
     */
    public function getSortOrder();

    /**
     * @param ?string $sortOrder
     */
    public function setSortOrder(?string $sortOrder): void;
}
