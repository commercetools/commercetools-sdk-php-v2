<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductDiscount;

use Commercetools\Types\ProductDiscount\ProductDiscountUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ProductDiscountChangePredicateActionCollectionModel extends ProductDiscountUpdateActionCollectionModel implements ProductDiscountChangePredicateActionCollection
{

    /**
     * @param ProductDiscountChangePredicateAction $value
     * @return ProductDiscountChangePredicateActionCollection
     */
    public function add($value) {
        if (!$value instanceof ProductDiscountChangePredicateAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ProductDiscountChangePredicateAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ProductDiscountChangePredicateAction) {
            $data = $this->mapData(ProductDiscountChangePredicateAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
