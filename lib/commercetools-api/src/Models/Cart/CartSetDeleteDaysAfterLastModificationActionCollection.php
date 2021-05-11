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
 * @extends CartUpdateActionCollection<CartSetDeleteDaysAfterLastModificationAction>
 * @method CartSetDeleteDaysAfterLastModificationAction current()
 * @method CartSetDeleteDaysAfterLastModificationAction at($offset)
 */
class CartSetDeleteDaysAfterLastModificationActionCollection extends CartUpdateActionCollection
{
    /**
     * @psalm-assert CartSetDeleteDaysAfterLastModificationAction $value
     * @psalm-param CartSetDeleteDaysAfterLastModificationAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartSetDeleteDaysAfterLastModificationActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartSetDeleteDaysAfterLastModificationAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartSetDeleteDaysAfterLastModificationAction
     */
    protected function mapper()
    {
        return function (int $index): ?CartSetDeleteDaysAfterLastModificationAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CartSetDeleteDaysAfterLastModificationAction $data */
                $data = CartSetDeleteDaysAfterLastModificationActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
