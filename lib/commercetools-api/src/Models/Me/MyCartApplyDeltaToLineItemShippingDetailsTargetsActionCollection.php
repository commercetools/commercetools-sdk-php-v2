<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Api\Models\Me\MyCartUpdateActionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MyCartUpdateActionCollection<MyCartApplyDeltaToLineItemShippingDetailsTargetsAction>
 * @method MyCartApplyDeltaToLineItemShippingDetailsTargetsAction current()
 * @method MyCartApplyDeltaToLineItemShippingDetailsTargetsAction at($offset)
 */
class MyCartApplyDeltaToLineItemShippingDetailsTargetsActionCollection extends MyCartUpdateActionCollection
{
    /**
     * @psalm-assert MyCartApplyDeltaToLineItemShippingDetailsTargetsAction $value
     * @psalm-param MyCartApplyDeltaToLineItemShippingDetailsTargetsAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MyCartApplyDeltaToLineItemShippingDetailsTargetsActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyCartApplyDeltaToLineItemShippingDetailsTargetsAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyCartApplyDeltaToLineItemShippingDetailsTargetsAction
     */
    protected function mapper()
    {
        return function (?int $index): ?MyCartApplyDeltaToLineItemShippingDetailsTargetsAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MyCartApplyDeltaToLineItemShippingDetailsTargetsAction $data */
                $data = MyCartApplyDeltaToLineItemShippingDetailsTargetsActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
