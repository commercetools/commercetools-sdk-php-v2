<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductDiscount;

use Commercetools\Types\ProductDiscount\ProductDiscountValueCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ProductDiscountValueRelativeCollectionModel extends ProductDiscountValueCollectionModel implements ProductDiscountValueRelativeCollection
{

    /**
     * @param ProductDiscountValueRelative $value
     * @return ProductDiscountValueRelativeCollection
     */
    public function add($value) {
        if (!$value instanceof ProductDiscountValueRelative) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ProductDiscountValueRelative
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ProductDiscountValueRelative) {
            $data = $this->mapData(ProductDiscountValueRelative::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
