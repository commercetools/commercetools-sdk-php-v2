<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductDiscount;

use Commercetools\Types\ProductDiscount\ProductDiscountValueCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ProductDiscountValueAbsoluteCollectionModel extends ProductDiscountValueCollectionModel implements ProductDiscountValueAbsoluteCollection
{

    /**
     * @param ProductDiscountValueAbsolute $value
     * @return ProductDiscountValueAbsoluteCollection
     */
    public function add($value) {
        if (!$value instanceof ProductDiscountValueAbsolute) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ProductDiscountValueAbsolute
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ProductDiscountValueAbsolute) {
            $data = $this->mapData(ProductDiscountValueAbsolute::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
