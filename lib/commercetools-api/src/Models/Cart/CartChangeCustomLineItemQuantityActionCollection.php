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
 * @extends MapperSequence<CartChangeCustomLineItemQuantityAction>
 *
 * @method CartChangeCustomLineItemQuantityAction current()
 * @method CartChangeCustomLineItemQuantityAction at($offset)
 */
class CartChangeCustomLineItemQuantityActionCollection extends MapperSequence
{
    /**
     * @psalm-assert CartChangeCustomLineItemQuantityAction $value
     * @psalm-param CartChangeCustomLineItemQuantityAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return CartChangeCustomLineItemQuantityActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartChangeCustomLineItemQuantityAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartChangeCustomLineItemQuantityAction
     */
    protected function mapper()
    {
        return function (int $index): ?CartChangeCustomLineItemQuantityAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CartChangeCustomLineItemQuantityActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
