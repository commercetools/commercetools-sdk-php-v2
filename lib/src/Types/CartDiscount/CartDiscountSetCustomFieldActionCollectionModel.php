<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CartDiscount;

use Commercetools\Types\CartDiscount\CartDiscountUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CartDiscountSetCustomFieldActionCollectionModel extends CartDiscountUpdateActionCollectionModel implements CartDiscountSetCustomFieldActionCollection {

    /**
     * @param CartDiscountSetCustomFieldAction $value
     * @return CartDiscountSetCustomFieldActionCollection
     */
    public function add($value) {
        if (!$value instanceof CartDiscountSetCustomFieldAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CartDiscountSetCustomFieldAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CartDiscountSetCustomFieldAction) {
            $data = $this->mapData(CartDiscountSetCustomFieldAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
