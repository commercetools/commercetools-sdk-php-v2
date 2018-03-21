<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductDiscount;

use Commercetools\Types\ProductDiscount\ProductDiscountUpdateActionModel;

class ProductDiscountChangeSortOrderActionModel extends ProductDiscountUpdateActionModel implements ProductDiscountChangeSortOrderAction {
    const DISCRIMINATOR_VALUE = 'changeSortOrder';

    /**
     * @var string
     */
    protected $sortOrder;

    /**
     * @return string
     */
    public function getSortOrder()
    {
        if (is_null($this->sortOrder)) {
            $value = $this->raw(ProductDiscountChangeSortOrderAction::FIELD_SORT_ORDER);
            $value = (string)$value;
            $this->sortOrder = $value;
        }
        return $this->sortOrder;
    }

    /**
     * @param string $sortOrder
     * @return $this
     */
    public function setSortOrder(string $sortOrder)
    {
        $this->sortOrder = (string)$sortOrder;

        return $this;
    }

}
