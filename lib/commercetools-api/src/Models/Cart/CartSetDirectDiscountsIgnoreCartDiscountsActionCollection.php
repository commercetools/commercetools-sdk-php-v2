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
 * @extends CartUpdateActionCollection<CartSetDirectDiscountsIgnoreCartDiscountsAction>
 * @method CartSetDirectDiscountsIgnoreCartDiscountsAction current()
 * @method CartSetDirectDiscountsIgnoreCartDiscountsAction end()
 * @method CartSetDirectDiscountsIgnoreCartDiscountsAction at($offset)
 */
class CartSetDirectDiscountsIgnoreCartDiscountsActionCollection extends CartUpdateActionCollection
{
    /**
     * @psalm-assert CartSetDirectDiscountsIgnoreCartDiscountsAction $value
     * @psalm-param CartSetDirectDiscountsIgnoreCartDiscountsAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartSetDirectDiscountsIgnoreCartDiscountsActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartSetDirectDiscountsIgnoreCartDiscountsAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartSetDirectDiscountsIgnoreCartDiscountsAction
     */
    protected function mapper()
    {
        return function (?int $index): ?CartSetDirectDiscountsIgnoreCartDiscountsAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CartSetDirectDiscountsIgnoreCartDiscountsAction $data */
                $data = CartSetDirectDiscountsIgnoreCartDiscountsActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
