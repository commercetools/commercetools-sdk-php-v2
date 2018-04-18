<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Types\Cart\CartUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CartChangeTaxModeActionCollectionModel extends CartUpdateActionCollectionModel implements CartChangeTaxModeActionCollection {

    /**
     * @param CartChangeTaxModeAction $value
     * @return CartChangeTaxModeActionCollection
     */
    public function add($value) {
        if (!$value instanceof CartChangeTaxModeAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CartChangeTaxModeAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CartChangeTaxModeAction) {
            $data = $this->mapData(CartChangeTaxModeAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
