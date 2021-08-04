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
 * @extends CartUpdateActionCollection<CartRecalculateAction>
 * @method CartRecalculateAction current()
 * @method CartRecalculateAction at($offset)
 */
class CartRecalculateActionCollection extends CartUpdateActionCollection
{
    /**
     * @psalm-assert CartRecalculateAction $value
     * @psalm-param CartRecalculateAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartRecalculateActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartRecalculateAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartRecalculateAction
     */
    protected function mapper()
    {
        return function (?int $index): ?CartRecalculateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CartRecalculateAction $data */
                $data = CartRecalculateActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
