<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Types\Cart\CartUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CartSetAnonymousIdActionCollectionModel extends CartUpdateActionCollectionModel implements CartSetAnonymousIdActionCollection
{

    /**
     * @param CartSetAnonymousIdAction $value
     * @return CartSetAnonymousIdActionCollection
     */
    public function add($value) {
        if (!$value instanceof CartSetAnonymousIdAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CartSetAnonymousIdAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CartSetAnonymousIdAction) {
            $data = $this->mapData(CartSetAnonymousIdAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
