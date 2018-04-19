<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductDiscount;

use Commercetools\Types\ProductDiscount\ProductDiscountUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ProductDiscountChangeSortOrderActionCollectionModel extends ProductDiscountUpdateActionCollectionModel implements ProductDiscountChangeSortOrderActionCollection
{

    /**
     * @param ProductDiscountChangeSortOrderAction $value
     * @return ProductDiscountChangeSortOrderActionCollection
     */
    public function add($value) {
        if (!$value instanceof ProductDiscountChangeSortOrderAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ProductDiscountChangeSortOrderAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ProductDiscountChangeSortOrderAction) {
            $data = $this->mapData(ProductDiscountChangeSortOrderAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
