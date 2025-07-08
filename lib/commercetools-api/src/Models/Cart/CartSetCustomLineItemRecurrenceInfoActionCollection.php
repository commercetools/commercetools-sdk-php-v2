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
 * @extends CartUpdateActionCollection<CartSetCustomLineItemRecurrenceInfoAction>
 * @method CartSetCustomLineItemRecurrenceInfoAction current()
 * @method CartSetCustomLineItemRecurrenceInfoAction end()
 * @method CartSetCustomLineItemRecurrenceInfoAction at($offset)
 */
class CartSetCustomLineItemRecurrenceInfoActionCollection extends CartUpdateActionCollection
{
    /**
     * @psalm-assert CartSetCustomLineItemRecurrenceInfoAction $value
     * @psalm-param CartSetCustomLineItemRecurrenceInfoAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartSetCustomLineItemRecurrenceInfoActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartSetCustomLineItemRecurrenceInfoAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartSetCustomLineItemRecurrenceInfoAction
     */
    protected function mapper()
    {
        return function (?int $index): ?CartSetCustomLineItemRecurrenceInfoAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CartSetCustomLineItemRecurrenceInfoAction $data */
                $data = CartSetCustomLineItemRecurrenceInfoActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
