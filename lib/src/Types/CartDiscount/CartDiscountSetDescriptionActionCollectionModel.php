<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CartDiscount;

use Commercetools\Types\CartDiscount\CartDiscountUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CartDiscountSetDescriptionActionCollectionModel extends CartDiscountUpdateActionCollectionModel implements CartDiscountSetDescriptionActionCollection {

    /**
     * @param CartDiscountSetDescriptionAction $value
     * @return CartDiscountSetDescriptionActionCollection
     */
    public function add($value) {
        if (!$value instanceof CartDiscountSetDescriptionAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CartDiscountSetDescriptionAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CartDiscountSetDescriptionAction) {
            $data = $this->mapData(CartDiscountSetDescriptionAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
