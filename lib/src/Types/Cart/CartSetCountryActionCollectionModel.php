<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Types\Cart\CartUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CartSetCountryActionCollectionModel extends CartUpdateActionCollectionModel implements CartSetCountryActionCollection
{

    /**
     * @param CartSetCountryAction $value
     * @return CartSetCountryActionCollection
     */
    public function add($value) {
        if (!$value instanceof CartSetCountryAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CartSetCountryAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CartSetCountryAction) {
            $data = $this->mapData(CartSetCountryAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
