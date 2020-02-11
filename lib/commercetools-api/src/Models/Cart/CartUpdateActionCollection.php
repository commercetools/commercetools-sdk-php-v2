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
 * @extends MapperSequence<CartUpdateAction>
 * @method CartUpdateAction current()
 * @method CartUpdateAction at($offset)
 */
class CartUpdateActionCollection extends MapperSequence
{
    /**
     * @psalm-assert CartUpdateAction $value
     * @psalm-param CartUpdateAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartUpdateActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartUpdateAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartUpdateAction
     */
    protected function mapper()
    {
        return function (int $index): ?CartUpdateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CartUpdateActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
