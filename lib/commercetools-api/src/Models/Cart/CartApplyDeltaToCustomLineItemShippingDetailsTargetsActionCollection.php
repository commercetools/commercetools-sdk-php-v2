<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<CartApplyDeltaToCustomLineItemShippingDetailsTargetsAction>
 * @method CartApplyDeltaToCustomLineItemShippingDetailsTargetsAction current()
 * @method CartApplyDeltaToCustomLineItemShippingDetailsTargetsAction at($offset)
 */
class CartApplyDeltaToCustomLineItemShippingDetailsTargetsActionCollection extends MapperSequence
{
    /**
     * @psalm-assert CartApplyDeltaToCustomLineItemShippingDetailsTargetsAction $value
     * @psalm-param CartApplyDeltaToCustomLineItemShippingDetailsTargetsAction|stdClass $value
     * @return CartApplyDeltaToCustomLineItemShippingDetailsTargetsActionCollection
     * @throws InvalidArgumentException
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
        return function(int $index): ?CartApplyDeltaToCustomLineItemShippingDetailsTargetsAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CartApplyDeltaToCustomLineItemShippingDetailsTargetsActionModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}