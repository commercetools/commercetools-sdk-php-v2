<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductDiscount;

use Commercetools\Types\ProductDiscount\ProductDiscountUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ProductDiscountSetDescriptionActionCollectionModel extends ProductDiscountUpdateActionCollectionModel implements ProductDiscountSetDescriptionActionCollection {

    /**
     * @param ProductDiscountSetDescriptionAction $value
     * @return ProductDiscountSetDescriptionActionCollection
     */
    public function add($value) {
        if (!$value instanceof ProductDiscountSetDescriptionAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ProductDiscountSetDescriptionAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ProductDiscountSetDescriptionAction) {
            $data = $this->mapData(ProductDiscountSetDescriptionAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
