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
 * @extends CartUpdateActionCollection<CartApplyDeltaToCustomLineItemShippingDetailsTargetsAction>
 * @method CartApplyDeltaToCustomLineItemShippingDetailsTargetsAction current()
 * @method CartApplyDeltaToCustomLineItemShippingDetailsTargetsAction at($offset)
 */
class CartApplyDeltaToCustomLineItemShippingDetailsTargetsActionCollection extends CartUpdateActionCollection
{
    /**
     * @psalm-assert CartApplyDeltaToCustomLineItemShippingDetailsTargetsAction $value
     * @psalm-param CartApplyDeltaToCustomLineItemShippingDetailsTargetsAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartApplyDeltaToCustomLineItemShippingDetailsTargetsActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartApplyDeltaToCustomLineItemShippingDetailsTargetsAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartApplyDeltaToCustomLineItemShippingDetailsTargetsAction
     */
    protected function mapper()
    {
        return function (int $index): ?CartApplyDeltaToCustomLineItemShippingDetailsTargetsAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CartApplyDeltaToCustomLineItemShippingDetailsTargetsAction $data */
                $data = CartApplyDeltaToCustomLineItemShippingDetailsTargetsActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
