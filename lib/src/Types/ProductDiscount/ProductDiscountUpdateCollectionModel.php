<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductDiscount;

use Commercetools\Types\UpdateCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ProductDiscountUpdateCollectionModel extends UpdateCollectionModel implements ProductDiscountUpdateCollection {

    /**
     * @param ProductDiscountUpdate $value
     * @return ProductDiscountUpdateCollection
     */
    public function add($value) {
        if (!$value instanceof ProductDiscountUpdate) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ProductDiscountUpdate
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ProductDiscountUpdate) {
            $data = $this->mapData(ProductDiscountUpdate::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
