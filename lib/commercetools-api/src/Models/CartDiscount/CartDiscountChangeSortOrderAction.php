<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CartDiscountChangeSortOrderAction extends CartDiscountUpdateAction
{
    public const FIELD_SORT_ORDER = 'sortOrder';

    /**
     * <p>New value to set (between <code>0</code> and <code>1</code>).
     * A Discount with a higher sortOrder is prioritized.</p>
     *

     * @return null|string
     */
    public function getSortOrder();

    /**
     * @param ?string $sortOrder
     */
    public function setSortOrder(?string $sortOrder): void;
}
