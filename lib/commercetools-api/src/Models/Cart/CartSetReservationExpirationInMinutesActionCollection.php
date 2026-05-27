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
 * @extends CartUpdateActionCollection<CartSetReservationExpirationInMinutesAction>
 * @method CartSetReservationExpirationInMinutesAction current()
 * @method CartSetReservationExpirationInMinutesAction end()
 * @method CartSetReservationExpirationInMinutesAction at($offset)
 */
class CartSetReservationExpirationInMinutesActionCollection extends CartUpdateActionCollection
{
    /**
     * @psalm-assert CartSetReservationExpirationInMinutesAction $value
     * @psalm-param CartSetReservationExpirationInMinutesAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartSetReservationExpirationInMinutesActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartSetReservationExpirationInMinutesAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartSetReservationExpirationInMinutesAction
     */
    protected function mapper()
    {
        return function (?int $index): ?CartSetReservationExpirationInMinutesAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CartSetReservationExpirationInMinutesAction $data */
                $data = CartSetReservationExpirationInMinutesActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
