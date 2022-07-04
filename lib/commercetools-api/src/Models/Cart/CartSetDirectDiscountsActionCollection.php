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
 * @extends CartUpdateActionCollection<CartSetDirectDiscountsAction>
 * @method CartSetDirectDiscountsAction current()
 * @method CartSetDirectDiscountsAction end()
 * @method CartSetDirectDiscountsAction at($offset)
 */
class CartSetDirectDiscountsActionCollection extends CartUpdateActionCollection
{
    /**
     * @psalm-assert CartSetDirectDiscountsAction $value
     * @psalm-param CartSetDirectDiscountsAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartSetDirectDiscountsActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartSetDirectDiscountsAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartSetDirectDiscountsAction
     */
    protected function mapper()
    {
        return function (?int $index): ?CartSetDirectDiscountsAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CartSetDirectDiscountsAction $data */
                $data = CartSetDirectDiscountsActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
