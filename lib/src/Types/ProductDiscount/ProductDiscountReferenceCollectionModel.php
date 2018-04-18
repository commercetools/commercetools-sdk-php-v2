<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductDiscount;

use Commercetools\Types\Common\ReferenceCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ProductDiscountReferenceCollectionModel extends ReferenceCollectionModel implements ProductDiscountReferenceCollection {

    /**
     * @param ProductDiscountReference $value
     * @return ProductDiscountReferenceCollection
     */
    public function add($value) {
        if (!$value instanceof ProductDiscountReference) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ProductDiscountReference
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ProductDiscountReference) {
            $data = $this->mapData(ProductDiscountReference::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
