<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductDiscount;

interface ProductDiscountChangeSortOrderAction extends ProductDiscountUpdateAction {
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
