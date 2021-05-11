<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\Cart\CartUpdateActionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends CartUpdateActionCollection<CartSetAnonymousIdAction>
 * @method CartSetAnonymousIdAction current()
 * @method CartSetAnonymousIdAction at($offset)
 */
class CartSetAnonymousIdActionCollection extends CartUpdateActionCollection
{
    /**
     * @psalm-assert CartSetAnonymousIdAction $value
     * @psalm-param CartSetAnonymousIdAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartSetAnonymousIdActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartSetAnonymousIdAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartSetAnonymousIdAction
     */
    protected function mapper()
    {
        return function (int $index): ?CartSetAnonymousIdAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CartSetAnonymousIdAction $data */
                $data = CartSetAnonymousIdActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
