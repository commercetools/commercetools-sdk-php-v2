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
 * @extends CartUpdateActionCollection<CartSetPurchaseOrderNumberAction>
 * @method CartSetPurchaseOrderNumberAction current()
 * @method CartSetPurchaseOrderNumberAction end()
 * @method CartSetPurchaseOrderNumberAction at($offset)
 */
class CartSetPurchaseOrderNumberActionCollection extends CartUpdateActionCollection
{
    /**
     * @psalm-assert CartSetPurchaseOrderNumberAction $value
     * @psalm-param CartSetPurchaseOrderNumberAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartSetPurchaseOrderNumberActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartSetPurchaseOrderNumberAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartSetPurchaseOrderNumberAction
     */
    protected function mapper()
    {
        return function (?int $index): ?CartSetPurchaseOrderNumberAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CartSetPurchaseOrderNumberAction $data */
                $data = CartSetPurchaseOrderNumberActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
