<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductDiscount;

interface ProductDiscountChangeSortOrderAction extends ProductDiscountUpdateAction
{
    const FIELD_SORT_ORDER = 'sortOrder';

    /**
     * @return null|string
     */
    public function getSortOrder();

    public function setSortOrder(?string $sortOrder): void;
}
