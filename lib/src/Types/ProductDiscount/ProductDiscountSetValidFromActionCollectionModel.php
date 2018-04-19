<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductDiscount;

use Commercetools\Types\ProductDiscount\ProductDiscountUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ProductDiscountSetValidFromActionCollectionModel extends ProductDiscountUpdateActionCollectionModel implements ProductDiscountSetValidFromActionCollection
{

    /**
     * @param ProductDiscountSetValidFromAction $value
     * @return ProductDiscountSetValidFromActionCollection
     */
    public function add($value) {
        if (!$value instanceof ProductDiscountSetValidFromAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ProductDiscountSetValidFromAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ProductDiscountSetValidFromAction) {
            $data = $this->mapData(ProductDiscountSetValidFromAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
