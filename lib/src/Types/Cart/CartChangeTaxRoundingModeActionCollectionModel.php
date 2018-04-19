<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Types\Cart\CartUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CartChangeTaxRoundingModeActionCollectionModel extends CartUpdateActionCollectionModel implements CartChangeTaxRoundingModeActionCollection
{

    /**
     * @param CartChangeTaxRoundingModeAction $value
     * @return CartChangeTaxRoundingModeActionCollection
     */
    public function add($value) {
        if (!$value instanceof CartChangeTaxRoundingModeAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CartChangeTaxRoundingModeAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CartChangeTaxRoundingModeAction) {
            $data = $this->mapData(CartChangeTaxRoundingModeAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
