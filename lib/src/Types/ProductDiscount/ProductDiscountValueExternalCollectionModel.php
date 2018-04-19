<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductDiscount;

use Commercetools\Types\ProductDiscount\ProductDiscountValueCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ProductDiscountValueExternalCollectionModel extends ProductDiscountValueCollectionModel implements ProductDiscountValueExternalCollection
{

    /**
     * @param ProductDiscountValueExternal $value
     * @return ProductDiscountValueExternalCollection
     */
    public function add($value) {
        if (!$value instanceof ProductDiscountValueExternal) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ProductDiscountValueExternal
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ProductDiscountValueExternal) {
            $data = $this->mapData(ProductDiscountValueExternal::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
