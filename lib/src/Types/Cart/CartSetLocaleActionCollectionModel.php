<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Types\Cart\CartUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CartSetLocaleActionCollectionModel extends CartUpdateActionCollectionModel implements CartSetLocaleActionCollection {

    /**
     * @param CartSetLocaleAction $value
     * @return CartSetLocaleActionCollection
     */
    public function add($value) {
        if (!$value instanceof CartSetLocaleAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CartSetLocaleAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CartSetLocaleAction) {
            $data = $this->mapData(CartSetLocaleAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
