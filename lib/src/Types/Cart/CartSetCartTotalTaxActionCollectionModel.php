<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Types\Cart\CartUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CartSetCartTotalTaxActionCollectionModel extends CartUpdateActionCollectionModel implements CartSetCartTotalTaxActionCollection
{

    /**
     * @param CartSetCartTotalTaxAction $value
     * @return CartSetCartTotalTaxActionCollection
     */
    public function add($value) {
        if (!$value instanceof CartSetCartTotalTaxAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CartSetCartTotalTaxAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CartSetCartTotalTaxAction) {
            $data = $this->mapData(CartSetCartTotalTaxAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
