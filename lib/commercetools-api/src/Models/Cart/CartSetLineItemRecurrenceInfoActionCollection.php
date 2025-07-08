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
 * @extends CartUpdateActionCollection<CartSetLineItemRecurrenceInfoAction>
 * @method CartSetLineItemRecurrenceInfoAction current()
 * @method CartSetLineItemRecurrenceInfoAction end()
 * @method CartSetLineItemRecurrenceInfoAction at($offset)
 */
class CartSetLineItemRecurrenceInfoActionCollection extends CartUpdateActionCollection
{
    /**
     * @psalm-assert CartSetLineItemRecurrenceInfoAction $value
     * @psalm-param CartSetLineItemRecurrenceInfoAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartSetLineItemRecurrenceInfoActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartSetLineItemRecurrenceInfoAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartSetLineItemRecurrenceInfoAction
     */
    protected function mapper()
    {
        return function (?int $index): ?CartSetLineItemRecurrenceInfoAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CartSetLineItemRecurrenceInfoAction $data */
                $data = CartSetLineItemRecurrenceInfoActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
