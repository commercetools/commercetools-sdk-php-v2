<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductDiscount;

use Commercetools\Types\ProductDiscount\ProductDiscountUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ProductDiscountSetValidUntilActionCollectionModel extends ProductDiscountUpdateActionCollectionModel implements ProductDiscountSetValidUntilActionCollection
{

    /**
     * @param ProductDiscountSetValidUntilAction $value
     * @return ProductDiscountSetValidUntilActionCollection
     */
    public function add($value) {
        if (!$value instanceof ProductDiscountSetValidUntilAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ProductDiscountSetValidUntilAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ProductDiscountSetValidUntilAction) {
            $data = $this->mapData(ProductDiscountSetValidUntilAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
