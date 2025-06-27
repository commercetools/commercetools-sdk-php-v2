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
 * @extends CartUpdateActionCollection<CartChangePriceRoundingModeAction>
 * @method CartChangePriceRoundingModeAction current()
 * @method CartChangePriceRoundingModeAction end()
 * @method CartChangePriceRoundingModeAction at($offset)
 */
class CartChangePriceRoundingModeActionCollection extends CartUpdateActionCollection
{
    /**
     * @psalm-assert CartChangePriceRoundingModeAction $value
     * @psalm-param CartChangePriceRoundingModeAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartChangePriceRoundingModeActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartChangePriceRoundingModeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartChangePriceRoundingModeAction
     */
    protected function mapper()
    {
        return function (?int $index): ?CartChangePriceRoundingModeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CartChangePriceRoundingModeAction $data */
                $data = CartChangePriceRoundingModeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
