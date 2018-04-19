<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Types\Cart\CartUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CartSetCustomLineItemCustomFieldActionCollectionModel extends CartUpdateActionCollectionModel implements CartSetCustomLineItemCustomFieldActionCollection
{

    /**
     * @param CartSetCustomLineItemCustomFieldAction $value
     * @return CartSetCustomLineItemCustomFieldActionCollection
     */
    public function add($value) {
        if (!$value instanceof CartSetCustomLineItemCustomFieldAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CartSetCustomLineItemCustomFieldAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CartSetCustomLineItemCustomFieldAction) {
            $data = $this->mapData(CartSetCustomLineItemCustomFieldAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
