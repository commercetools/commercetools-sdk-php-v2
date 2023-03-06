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
 * @extends CartUpdateActionCollection<CartSetBusinessUnitAction>
 * @method CartSetBusinessUnitAction current()
 * @method CartSetBusinessUnitAction end()
 * @method CartSetBusinessUnitAction at($offset)
 */
class CartSetBusinessUnitActionCollection extends CartUpdateActionCollection
{
    /**
     * @psalm-assert CartSetBusinessUnitAction $value
     * @psalm-param CartSetBusinessUnitAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartSetBusinessUnitActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartSetBusinessUnitAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartSetBusinessUnitAction
     */
    protected function mapper()
    {
        return function (?int $index): ?CartSetBusinessUnitAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CartSetBusinessUnitAction $data */
                $data = CartSetBusinessUnitActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
