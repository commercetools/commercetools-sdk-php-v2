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
 * @extends CartUpdateActionCollection<CartAddPaymentAction>
 * @method CartAddPaymentAction current()
 * @method CartAddPaymentAction at($offset)
 */
class CartAddPaymentActionCollection extends CartUpdateActionCollection
{
    /**
     * @psalm-assert CartAddPaymentAction $value
     * @psalm-param CartAddPaymentAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartAddPaymentActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartAddPaymentAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartAddPaymentAction
     */
    protected function mapper()
    {
        return function (int $index): ?CartAddPaymentAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CartAddPaymentAction $data */
                $data = CartAddPaymentActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
