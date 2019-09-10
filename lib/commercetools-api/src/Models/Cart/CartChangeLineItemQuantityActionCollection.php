<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<CartChangeLineItemQuantityAction>
 *
 * @method CartChangeLineItemQuantityAction current()
 * @method CartChangeLineItemQuantityAction at($offset)
 */
class CartChangeLineItemQuantityActionCollection extends MapperSequence
{
    /**
     * @psalm-assert CartChangeLineItemQuantityAction $value
     * @psalm-param CartChangeLineItemQuantityAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return CartChangeLineItemQuantityActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartChangeLineItemQuantityAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartChangeLineItemQuantityAction
     */
    protected function mapper()
    {
        return function (int $index): ?CartChangeLineItemQuantityAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CartChangeLineItemQuantityActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
