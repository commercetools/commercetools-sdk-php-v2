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
 * @extends CartUpdateActionCollection<CartApplyDeltaToLineItemShippingDetailsTargetsAction>
 * @method CartApplyDeltaToLineItemShippingDetailsTargetsAction current()
 * @method CartApplyDeltaToLineItemShippingDetailsTargetsAction end()
 * @method CartApplyDeltaToLineItemShippingDetailsTargetsAction at($offset)
 */
class CartApplyDeltaToLineItemShippingDetailsTargetsActionCollection extends CartUpdateActionCollection
{
    /**
     * @psalm-assert CartApplyDeltaToLineItemShippingDetailsTargetsAction $value
     * @psalm-param CartApplyDeltaToLineItemShippingDetailsTargetsAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartApplyDeltaToLineItemShippingDetailsTargetsActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartApplyDeltaToLineItemShippingDetailsTargetsAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartApplyDeltaToLineItemShippingDetailsTargetsAction
     */
    protected function mapper()
    {
        return function (?int $index): ?CartApplyDeltaToLineItemShippingDetailsTargetsAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CartApplyDeltaToLineItemShippingDetailsTargetsAction $data */
                $data = CartApplyDeltaToLineItemShippingDetailsTargetsActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
