<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Types\Cart\CartUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CartChangeTaxCalculationModeActionCollectionModel extends CartUpdateActionCollectionModel implements CartChangeTaxCalculationModeActionCollection {

    /**
     * @param CartChangeTaxCalculationModeAction $value
     * @return CartChangeTaxCalculationModeActionCollection
     */
    public function add($value) {
        if (!$value instanceof CartChangeTaxCalculationModeAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CartChangeTaxCalculationModeAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CartChangeTaxCalculationModeAction) {
            $data = $this->mapData(CartChangeTaxCalculationModeAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
