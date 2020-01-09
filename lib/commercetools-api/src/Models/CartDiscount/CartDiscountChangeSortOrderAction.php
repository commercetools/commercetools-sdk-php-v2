<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CartDiscount;

interface CartDiscountChangeSortOrderAction extends CartDiscountUpdateAction
{
    const FIELD_SORT_ORDER = 'sortOrder';

    /**
     * <p>The string must contain a number between 0 and 1.
     * A discount with greater sortOrder is prioritized higher than a discount with lower sortOrder.</p>
     *
     * @return null|string
     */
    public function getSortOrder();

    public function setSortOrder(?string $sortOrder): void;
}
