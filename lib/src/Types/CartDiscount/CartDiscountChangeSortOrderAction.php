<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CartDiscount;

interface CartDiscountChangeSortOrderAction extends CartDiscountUpdateAction {
    const FIELD_SORT_ORDER = 'sortOrder';

    /**
     * @return string
     */
    public function getSortOrder();

    /**
     * @param string $sortOrder
     * @return $this
     */
    public function setSortOrder(string $sortOrder);

}
