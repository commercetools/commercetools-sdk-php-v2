<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Types\Cart\CartUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CartSetLineItemCustomFieldActionCollectionModel extends CartUpdateActionCollectionModel implements CartSetLineItemCustomFieldActionCollection
{

    /**
     * @param CartSetLineItemCustomFieldAction $value
     * @return CartSetLineItemCustomFieldActionCollection
     */
    public function add($value) {
        if (!$value instanceof CartSetLineItemCustomFieldAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CartSetLineItemCustomFieldAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CartSetLineItemCustomFieldAction) {
            $data = $this->mapData(CartSetLineItemCustomFieldAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
