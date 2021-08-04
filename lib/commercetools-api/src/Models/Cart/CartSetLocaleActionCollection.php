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
 * @extends CartUpdateActionCollection<CartSetLocaleAction>
 * @method CartSetLocaleAction current()
 * @method CartSetLocaleAction end()
 * @method CartSetLocaleAction at($offset)
 */
class CartSetLocaleActionCollection extends CartUpdateActionCollection
{
    /**
     * @psalm-assert CartSetLocaleAction $value
     * @psalm-param CartSetLocaleAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartSetLocaleActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartSetLocaleAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartSetLocaleAction
     */
    protected function mapper()
    {
        return function (?int $index): ?CartSetLocaleAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CartSetLocaleAction $data */
                $data = CartSetLocaleActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
