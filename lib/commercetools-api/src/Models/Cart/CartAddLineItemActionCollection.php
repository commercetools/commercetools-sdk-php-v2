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
 * @extends MapperSequence<CartAddLineItemAction>
 *
 * @method CartAddLineItemAction current()
 * @method CartAddLineItemAction at($offset)
 */
class CartAddLineItemActionCollection extends MapperSequence
{
    /**
     * @psalm-assert CartAddLineItemAction $value
     * @psalm-param CartAddLineItemAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return CartAddLineItemActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartAddLineItemAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartAddLineItemAction
     */
    protected function mapper()
    {
        return function (int $index): ?CartAddLineItemAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CartAddLineItemActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
